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

                <!-- Login Button -->
                <a href="/login" class="flex justify-center items-center w-[90px] h-[35px] px-[12px] py-[8px] border-2 border-[#644D41] text-black text-[16px] font-normal leading-[24px] hover:bg-[#F5E5DD] transition-all duration-300 ease-in-out">
                    Profile
                </a>

                <!-- Sign Up Button -->
                <a href="/register" class="flex justify-center items-center px-6 py-2 bg-[#644D41] w-[120px] h-[35px] text-[#FAF2EE] text-[16px] leading-[24px] hover:bg-[#4a3d33] transition-all duration-300 ease-in-out">
                    Log Out
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-8">
        <div class="bg-beige min-h-screen flex items-center px-20">
            <!-- Form Section -->
            <div class="w-1/2 pr-10 flex flex-col p-8 bg-[#FAF2EE] shadow-lg max-w-2xl">
                <h1 class="text-2xl font-semibold text-black-700 mb-6">Welcome, {{ Auth::user()->username }}</h1>

                @if(session('success'))
                    <div class="bg-green-100 border-t-4 border-green-500 text-green-700 p-4 mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(Auth::user() instanceof App\Models\Admin)
                    <p>You are logged in as Admin.</p>
                    <a href="{{ route('admin.dashboard') }}" class="text-blue-500">Go to Admin Dashboard</a>
                @else
                    <h2>Create Your Profile</h2>
                    <form action="{{ route('user.updateProfile') }}" method="POST">
                        @csrf
                        <div>
                            <label for="bentuk_muka" class="block text-black-600 mb-1">Choose Face Shape:</label>
                            <select name="bentuk_muka_id" class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900">
                                @foreach($bentukMuka as $bentuk)
                                    <option value="{{ $bentuk->id }}" @if($user->bentuk_muka_id == $bentuk->id) selected @endif>{{ $bentuk->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="tone_kulit" class="block text-black-600 mb-1">Choose Skin Tone:</label>
                            <select name="tone_kulit_id" class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900">
                                @foreach($toneKulit as $tone)
                                    <option value="{{ $tone->id }}" @if($user->tone_kulit_id == $tone->id) selected @endif>{{ $tone->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="w-full bg-[#4E3C32] py-2 text-sm font-semibold text-white hover:bg-[#3a2c22] focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                            Update Profile
                        </button>
                    </form>
                @endif
            </div>

            <!-- Image Section -->
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
