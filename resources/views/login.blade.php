<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Link Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
</head>

<body class="bg-cover bg-center" style="background-image: url('{{ asset('images/bg-login.png') }}'); font-family: 'Lora', serif;">
    <div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm bg-white p-8 bg-opacity-40 shadow-lg">
            <form class="space-y-4" action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <h2 class="mt-1 text-center text-2xl font-bold text-black-900">Login</h2>
                </div>
                
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="email" required
                            class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900 focus:outline-[#4E3C32] focus:ring-0 focus:border-[#4E3C32]">
                        @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Password Field -->
                <div class="pt-0.25 relative">
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="mt-2 relative">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900 focus:outline-[#4E3C32] focus:ring-0 focus:border-[#4E3C32]">
                        <!-- Eye Icon -->
                        <button type="button" id="togglePassword" class="absolute right-3 top-3.5">
                            <img src="{{ asset('images/eye-slash.png') }}" id="eyeIcon" alt="eye icon" class="w-4 h-4">
                        </button>
                    </div>
                    @error('password')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-[#4E3C32] py-2 text-sm font-semibold text-white hover:bg-[#3a2c22] focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                        Sign in
                    </button>
                </div>
            </form>

            <!-- Link ke halaman Register -->
            <p class="mt-4 text-center text-sm text-gray-500">
                <a href="{{ route('register') }}" class="font-semibold text-[#4E3C32] hover:text-white-500">Don't have an account?</a>
            </p>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordField = document.getElementById("password");
        const eyeIcon = document.getElementById("eyeIcon");

        togglePassword.addEventListener("click", function () {
            // Toggle the type attribute
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;

            // Toggle the eye icon (change from slash to open and vice versa)
            if (passwordField.type === "password") {
                eyeIcon.src = "{{ asset('images/eye-slash.png') }}";  // Eye closed icon
            } else {
                eyeIcon.src = "{{ asset('images/eye.png') }}";  // Eye open icon
            }
        });
    </script>
</body>

</html>
