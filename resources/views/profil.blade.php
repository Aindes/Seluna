<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Seluna - Profile')</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-cover bg-center" style="background-image: url('{{ asset('images/bg1.png') }}'); font-family: 'Lora', serif;">
    <!-- Header -->
    <header class="bg-[#FAF2EE] w-full flex items-center" style="height: 64px; flex-shrink: 0;">
        <div class="max-w-7xl mx-auto w-full flex items-center justify-between px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Seluna Logo" class="w-[132px] h-[68px]">
            </div>

            <!-- Navigation -->
            <nav class="flex items-center space-x-8">
                <a href="/" class="text-black text-[16px] font-bold leading-[24px]">Home</a>
                <a href="/fitur" class="text-black text-[16px] font-normal leading-[24px]">Fitur</a>
                <a href="/contact-us" class="text-black text-[16px] font-normal leading-[24px]">Contact Us</a>

                <!-- Tampilkan jika pengguna login -->
                @auth
                <!-- Profile Button -->
                <a href="{{ route('user.profile') }}"
                    class="flex justify-center items-center w-[90px] h-[35px] px-[12px] py-[8px] border-2 border-[#644D41] text-black text-[16px] font-normal leading-[24px] hover:bg-[#F5E5DD] transition-all duration-300 ease-in-out">
                    Profile
                </a>

                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="flex justify-center items-center px-6 py-2 bg-[#644D41] w-[120px] h-[35px] text-[#FAF2EE] text-[16px] leading-[24px] hover:bg-[#4a3d33] transition-all duration-300 ease-in-out">
                        Logout
                    </button>
                </form>
                @endauth

                <!-- Tampilkan jika pengguna belum login -->
                @guest
                <!-- Login Button -->
                <a href="{{ route('login') }}"
                    class="flex justify-center items-center w-[90px] h-[35px] px-[12px] py-[8px] border-2 border-[#644D41] text-black text-[16px] font-normal leading-[24px] hover:bg-[#F5E5DD] transition-all duration-300 ease-in-out">
                    Login
                </a>

                <!-- Sign Up Button -->
                <a href="{{ route('register') }}"
                    class="flex justify-center items-center px-6 py-2 bg-[#644D41] w-[120px] h-[35px] text-[#FAF2EE] text-[16px] leading-[24px] hover:bg-[#4a3d33] transition-all duration-300 ease-in-out">
                    Sign Up
                </a>
                @endguest
            </nav>

        </div>
    </header>

   <!-- Main Content -->
<main class="py-8">
    <div class="bg-beige min-h-screen flex items-center px-20">
        <!-- Bagian Form di Sebelah Kiri -->
        <div class="w-1/2 pr-10 flex flex-col p-8 bg-[#FAF2EE] shadow-lg max-w-2xl">
            <h1 class="text-2xl font-semibold text-black-700 mb-6">Halo, Lunars!</h1>

            @if(session('success'))
            <div class="bg-green-100 border-t-4 border-green-500 text-green-700 p-4 mb-4">
                {{ session('success') }}
            </div>
            @endif

            @if(Auth::user() instanceof App\Models\Admin)
            <p>You are logged in as Admin.</p>
            <a href="{{ route('admin.dashboard') }}" class="text-blue-500">Go to Admin Dashboard</a>
            @else
            <form action="{{ route('user.updateProfile') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="full_name" class="block text-black-600 mb-1">Full Name</label>
                    <input type="text" name="full_name" id="full_name" value="{{ old('full_name', Auth::user()->full_name) }}"
                        class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900 focus:outline-[#4E3C32] focus:ring-0 focus:border-[#4E3C32]">
                </div>

                <div>
                    <label for="email" class="block text-black-600 mb-1">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}"
                        class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900 focus:outline-[#4E3C32] focus:ring-0 focus:border-[#4E3C32]">
                </div>

                <div>
                    <label for="username" class="block text-black-600 mb-1">Username</label>
                    <input type="text" name="username" id="username" value="{{ old('username', Auth::user()->username) }}"
                        class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900 focus:outline-[#4E3C32] focus:ring-0 focus:border-[#4E3C32]">
                </div>

                <div>
                    <label for="password" class="block text-black-600 mb-1">Password</label>
                    <input type="password" name="password" id="password" placeholder="Leave blank to keep current password"
                        class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900 focus:outline-[#4E3C32] focus:ring-0 focus:border-[#4E3C32]">
                </div>

                <div class="flex justify-end space-x-4 mt-6">
                    <button type="button" class="bg-gray-300 text-black-800 px-4 py-2 rounded-md hover:bg-gray-400">
                        Setting
                    </button>
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                        Delete Profile
                    </button>
                </div>
            </form>
            @endif
        </div>

        <!-- Bagian Gambar di Sebelah Kanan -->
        <div class="w-1/2 flex items-center justify-center pr-0.5">
            <img src="{{ asset('images/tone.png') }}" alt="Gambar Ilustrasi" class="max-w-full">
        </div>
    </div>
</main>

    <!-- Footer -->
    <footer class="bg-[#4E3C32] text-white py-12 sm:py-10">
        <div class="w-full px-12 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h4 class="text-center text-xl font-medium mb-6">Connect with us</h4>
                <div class="flex justify-center">
                    <!-- Footer Column: Social Media -->
                    <div class="flex flex-col items-center">
                        <ul class="flex space-x-6 text-black-400">
                            <li><a href="https://id-id.facebook.com/login.php/" class="hover:text-white-300"><img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook" class="w-6 h-6"></a></li>
                            <li><a href="https://x.com/?lang=id" class="hover:text-white-300"><img src="{{ asset('images/twitter-icon.png') }}" alt="Twitter" class="w-6 h-6"></a></li>
                            <li><a href="https://www.instagram.com/" class="hover:text-white-300"><img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram" class="w-6 h-6"></a></li>
                            <li><a href="https://chat.whatsapp.com/FsuimHbww3gKyOI8rSrQb3" class="hover:text-white-300"><img src="{{ asset('images/whatsapp-icon.png') }}" alt="Whatsapp" class="w-6 h-6"></a></li>
                        </ul>
                    </div>
                </div>
                <p class="text-center text-[#9D9D9D] mt-6">&copy; 2024 Seluna. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>