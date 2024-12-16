<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registers</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
</head>

<body class="bg-cover bg-center" style="background-image: url('{{ asset('images/bg-login.png') }}'); font-family: 'Lora', serif;">
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm bg-white p-8 bg-opacity-40 shadow-lg">
                <h2 class="mt-1 text-center text-2xl font-bold text-black-900">Register</h2>

                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
                    <div class="mt-2">
                        <input type="text" name="username" id="username" placeholder="Username" required class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" placeholder="Email" required class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="mt-2 relative">
                        <input type="password" name="password" id="password" placeholder="Password" required class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900">
                        <button type="button" id="togglePassword" class="absolute right-3 top-3.5">
                            <img src="{{ asset('images/eye-slash.png') }}" id="eyeIcon" alt="eye icon" class="w-4 h-4">
                        </button>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Confirm Password</label>
                    <div class="mt-2 relative">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required class="block w-full border border-[#4E3C32] bg-transparent px-3 py-2 text-base text-black-900">
                        <button type="button" id="togglePassword" class="absolute right-3 top-3.5">
                            <img src="{{ asset('images/eye-slash.png') }}" id="eyeIcon" alt="eye icon" class="w-4 h-4">
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" class="w-full bg-[#4E3C32] py-2 text-sm font-semibold text-white hover:bg-[#3a2c22] focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">Sign up</button>
                </div>

                <!-- Login Link -->
                <p class="mt-4 text-center text-sm text-gray-500">
                    <a href="{{ route('login') }}" class="font-semibold text-[#4E3C32] hover:text-white-500">Already have an account?</a>
                </p>
            </div>
        </div>
    </form>

    <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordField = document.getElementById("password");
        const confirmPasswordField = document.getElementById("password_confirmation");
        const eyeIcon = document.getElementById("eyeIcon");

        togglePassword.addEventListener("click", function () {
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;

            if (passwordField.type === "password") {
                eyeIcon.src = "{{ asset('images/eye-slash.png') }}";
            } else {
                eyeIcon.src = "{{ asset('images/eye.png') }}";
            }

            const typeConfirm = confirmPasswordField.type === "password" ? "text" : "password";
            confirmPasswordField.type = typeConfirm;
        });
    </script>
</body>

</html>
