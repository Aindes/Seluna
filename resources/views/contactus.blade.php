<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-us</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Link Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="bg-cover bg-center" style="background-image: url('{{ asset('images/bg1.png') }}');">
    <!-- Header -->
    <header class="bg-[#FAF2EE] w-full flex items-center" style="height: 64px; flex-shrink: 0;">
        <div class="max-w-7xl mx-auto w-full flex items-center justify-between px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Seluna Logo" class="w-[132px] h-[68px]">
            </div>

            <!-- Navigation -->
            <nav class="flex items-center space-x-8">
                <a href="/" class="text-black text-[16px] font-normal leading-[24px]"
                    style="font-family: 'Lora', serif;">Home</a>
                <a href="/fitur" class="text-black text-[16px] font-normal leading-[24px]"
                    style="font-family: 'Lora', serif;">Fitur</a>
                <a href="/contact-us" class="text-black text-[16px] font-bold leading-[24px]"
                    style="font-family: 'Lora', serif;">Contact Us</a>

                <!-- Login Button -->
                <a href="/login"
                    class="flex justify-center items-center w-[90px] h-[35px] px-[12px] py-[8px] border-2 border-[#644D41] text-black text-[16px] font-normal leading-[24px] hover:bg-[#F5E5DD] transition-all duration-300 ease-in-out"
                    style="font-family: 'Lora', serif;">
                    Login
                </a>

                <!-- Sign Up Button -->
                <a href="/register"
                    class="flex justify-center items-center px-6 py-2 bg-[#644D41] w-[120px] h-[35px] text-[#FAF2EE] text-[16px] leading-[24px] hover:bg-[#4a3d33] transition-all duration-300 ease-in-out"
                    style="font-family: 'Lora', serif;">
                    Sign Up
                </a>
            </nav>
        </div>
    </header>


    <!-- Main Content -->
    <main class="py-8" style="font-family: 'Lora', serif;">
        <div>
            <!-- Section Contact Us -->
            <section class="container mx-auto p-6">
                <h1 class="text-center text-3xl font-bold mb-4">
                    <span class="text-[#575757]">GET IN</span>
                    <span class="text-[#A7806C]">TOUCH</span>
                </h1>
                <p class="text-center text-xl text-black-600 mb-4">
                    <span class="block">Feel free to contact us anytime, either through our social media or the form
                        below!</span>
                    <span class="block">We are always open to creative ideas, criticism, and discussions!</span>
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
                    <!-- Left Box: Contact Information -->
                    <div class="bg-[#FAF2EE] shadow-lg p-6 pt-2 flex flex-col justify-between col-span-1">
                        <div>
                            <div class="flex items-center mb-0">
                                <img src="{{ asset('images/logo.png') }}" alt="Seluna Logo"
                                    class="w-[172px] h-[108px] m-0 mb-0">
                            </div>
                            <h3 class="text-lg font-semibold text-[#644D41] mt-0 mb-1">PT Seluna</h3>
                            <p class="mb-4">Jl.Merjosari Lowokwaru Malang</p>
                            <div class="space-y-4">
                                <!-- Email -->
                                <div class="flex items-center">
                                    <img src="{{ asset('images/email.png') }}" alt="Email Icon" class="w-5 h-5 mr-2">
                                    <p class="text-black-700">
                                        <a href="mailto:seluna@gmail.com" class="text-[#644D41]">seluna@gmail.com</a>
                                    </p>
                                </div>
                                <!-- WhatsApp -->
                                <div class="flex items-center">
                                    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp Icon"
                                        class="w-5 h-5 mr-2">
                                    <p class="text-black-700">
                                        <a href="https://wa.me/081262166946" class="text-[#644D41]">0812-6216-6946</a>
                                    </p>
                                </div>
                                <!-- Telepon -->
                                <div class="flex items-center">
                                    <img src="{{ asset('images/telepon.png') }}" alt="Phone Icon" class="w-5 h-5 mr-2">
                                    <p class="text-black-700">
                                        <a href="https://wa.me/0341575754" class="text-[#644D41]">0341-575 754</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Box: Suggestion Form -->
                    <div class="bg-[#FAF2EE] shadow-lg p-6 flex flex-col justify-between col-span-2">
                        <p class="text-center text-12px font-semibold text-[#644D41] mb-4">Beri tahu kami masukan Anda
                        </p>
                        <form action="#" method="POST" class="space-y-4 flex-grow flex flex-col">
                            <textarea id="message" name="message" rows="6"
                                class="w-full p-3 border border-none bg-[#F5E5DD] flex-grow resize-none"
                                placeholder="Tuliskan masukan Anda di sini..." required></textarea>
                            <button type="submit"
                                class="bg-[#644D41] text-white py-2 px-4 w-full hover:bg-[#4a3d33] transition-all duration-300 ease-in-out">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section with Background Color -->
        <section class="w-full h-auto bg-[#FAF2EE] py-12 flex items-center justify-between mx-0 px-0 mt-12">

            <!-- Text Content in the Center -->
            <div class="text-black text-center px-16 mx-auto">
                <h1 class="text-3xl font-bold mb-4">ABOUT US</h1>
                <p class="text-lg mb-4">
                    Seluna hadir untuk membantu Anda menemukan gaya rambut yang paling sesuai dengan bentuk wajah
                    Anda. Kami percaya bahwa setiap individu unik, dan gaya rambut yang tepat dapat meningkatkan
                    rasa percaya diri serta menonjolkan kepribadian Anda. Dengan pendekatan berbasis teknologi dan
                    keahlian di bidang gaya rambut, kami menyediakan panduan dan inspirasi yang dipersonalisasi
                    untuk memastikan Anda mendapatkan hasil terbaik. Seluna adalah solusi modern bagi Anda yang
                    ingin tampil percaya diri dan menarik di setiap kesempatan.
                </p>
            </div>
        </section>

        <!-- Section: Meet Our Team -->
        <section class="py-12">
            <div class="container mx-auto text-center">
                <!-- Title -->
                <h2 class="text-3xl font-bold mb-12">MEET OUR TEAM</h2>
                <!-- Team Members -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Team Member 1 -->
                    <div class="flex flex-col items-center">
                        <img src="images/ara.png" alt="Mutiara Dwi Artono"
                            class="rounded-full w-32 h-32 object-cover mb-4 shadow-lg">
                        <h3 class="font-semibold text-lg">Mutiara Dwi Artono</h3>
                        <p class="text-sm text-black-600">Product Design & Front End</p>
                        <p class="text-sm text-black-600">235150700111032</p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="flex flex-col items-center">
                        <img src="images/melani.png" alt="Melani Sitohang"
                            class="rounded-full w-32 h-32 object-cover mb-4 shadow-lg">
                        <h3 class="font-semibold text-lg">Melani Sitohang</h3>
                        <p class="text-sm text-black-600">Product Design & Back End</p>
                        <p class="text-sm text-black-600">235150700110042</p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="flex flex-col items-center">
                        <img src="images/gein.png" alt="Graine Ivana L."
                            class="rounded-full w-32 h-32 object-cover mb-4 shadow-lg">
                        <h3 class="font-semibold text-lg">Graine Ivana L.</h3>
                        <p class="text-sm text-black-600">Product Design & Back End</p>
                        <p class="text-sm text-black-600">235150700110042</p>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="flex flex-col items-center">
                        <img src="images/intan.png" alt="Intan Desi Purnomo"
                            class="rounded-full w-32 h-32 object-cover mb-4 shadow-lg">
                        <h3 class="font-semibold text-lg">Intan Desi Purnomo</h3>
                        <p class="text-sm text-black-600">Product Design & Front End</p>
                        <p class="text-sm text-black-600">235150701110050</p>
                    </div>
                </div>
            </div>
        </section>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#4E3C32] text-white py-12 sm:py-10" style="font-family: 'Lora', serif;">
        <div class="w-full px-12 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h4 class="text-center text-xl font-medium mb-6">Connect with us</h4>
                <div class="flex justify-center">
                    <!-- Footer Column: Social Media -->
                    <div class="flex flex-col items-center">
                        <ul class="flex space-x-6 text-black-400">
                            <li><a href="https://id-id.facebook.com/login.php/" class="hover:text-white-300"><img
                                        src="{{ asset('images/facebook-icon.png') }}" alt="Facebook"
                                        class="w-6 h-6"></a></li>
                            <li><a href="https://x.com/?lang=id" class="hover:text-white-300"><img
                                        src="{{ asset('images/twitter-icon.png') }}" alt="Twitter" class="w-6 h-6"></a>
                            </li>
                            <li><a href="https://www.instagram.com/" class="hover:text-white-300"><img
                                        src="{{ asset('images/instagram-icon.png') }}" alt="Instagram"
                                        class="w-6 h-6"></a></li>
                            <li><a href="https://chat.whatsapp.com/FsuimHbww3gKyOI8rSrQb3"
                                    class="hover:text-white-300"><img src="{{ asset('images/whatsapp-icon.png') }}"
                                        alt="Whatsapp" class="w-6 h-6"></a></li>
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