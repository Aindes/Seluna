<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Seluna')</title>
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
                <a href="/login"
                    class="flex justify-center items-center w-[90px] h-[35px] px-[12px] py-[8px] border-2 border-[#644D41] text-black text-[16px] font-normal leading-[24px] hover:bg-[#F5E5DD] transition-all duration-300 ease-in-out">
                    Login
                </a>

                <!-- Sign Up Button -->
                <a href="/register"
                    class="flex justify-center items-center px-6 py-2 bg-[#644D41] w-[120px] h-[35px] text-[#FAF2EE] text-[16px] leading-[24px] hover:bg-[#4a3d33] transition-all duration-300 ease-in-out">
                    Sign Up
                </a>
            </nav>
        </div>
    </header>


    <!-- Main Content -->
    <main class="py-8">
        <div>

            <!-- Section with Woman Image and Text -->
            <section class="relative w-full flex flex-col md:flex-row items-center justify-between py-8">
                <!-- Text Content (on the left) -->
                <div class="w-full md:w-1/2 text-black pl-[135px]">
                    <h2 class="text-5xl font-bold mb-4">
                        <span class="block">Temukan</span>
                        <span class="block">Gaya Rambut</span>
                        <span class="block">Terbaikmu</span>
                    </h2>
                    <p class="text-lg">
                        <span class="block">Hanya pilih bentuk wajah dan tone</span>
                        <span class="block">kulitmu, kamu bisa dapatkan gaya rambut</span>
                        <span class="block">yang sempurna untukmu!</span>
                    </p>

                    <!-- Daftar Button -->
                    <a href="/register"
                        class="flex items-center justify-center w-[255px] h-[50px] bg-[#644D41] text-[#FAF2EE] text-[16px] font-semibold leading-[24px] hover:bg-[#4a3d33] transition-all duration-300 ease-in-out mt-6 pl-[0]">
                        Daftar
                    </a>
                </div>

                <!-- Woman Image (on the right) -->
                <div class="w-full md:w-1/2 mt-2 md:mt-0 flex justify-end pr-[148px] py-8">
                    <img src="{{ asset('images/cewe.png') }}" alt="Woman" class="w-[420px] h-[540px] shadow-xl">
                </div>
            </section>

            <!-- Section with Background Color and Images on Both Sides -->
            <section class="w-full h-auto bg-[#FAF2EE] py-12 flex items-center justify-between mx-0 px-0 mt-12">
                <!-- Left Image -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/icon1.png') }}" alt="Left Image"
                        class="w-[243px] h-[285.53px] object-cover">
                </div>

                <!-- Text Content in the Center -->
                <div class="text-black text-center px-4 max-w-2xl mx-auto">
                    <h1 class="text-4xl font-bold mb-4">Welcome to Seluna</h1>
                    <h3 class="text-2xl font-regular mb-4">Discover Your Perfect Look!</h3>
                    <p class="text-lg mb-4">
                        Seluna hadir untuk membantumu menemukan gaya dan warna rambut
                        terbaik yang sesuai dengan bentuk wajah dan tone kulitmu.
                        Nikmati panduan lengkap tentang hairstyle, perawatan rambut, dan tips kecantikan.
                        Jadikan setiap hari adalah good hair day bersama Seluna!
                    </p>
                </div>

                <!-- Right Image -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/icon2.png') }}" alt="Right Image"
                        class="w-[277.08px] h-[252.73px] object-cover">
                </div>
            </section>

            <!-- Section Gaya Rambut -->
            <section class="w-full py-12 relative text-center mt-12">
                <h2 class="text-4xl font-bold mb-8">Do you know?</h2>
                <p class="text-lg mb-12">
                    <span class="block">“Setiap Jenis Rambut Itu Indah Dan Penuh Pesona, Baik Itu Lurus,</span>
                    <span class="block">Bergelombang, Ikal, Atau Keriting. Keunikannya Terpancar Dari Bagaimana</span>
                    <span class="block">Anda Merawat Dan Mencintainya.”</span>
                </p>

                <!-- Gambar-gambar dalam posisi tangga -->
                <div class="flex justify-center space-x-4 relative">
                    <!-- Gambar 1 (paling kiri, ukuran 289x452) -->
                    <div class="flex-shrink-0 mt-12">
                        <img src="{{ asset('images/style4.png') }}" alt="Gaya Rambut 1"
                            class="w-[204.5px] h-[286px] object-cover shadow-l">
                    </div>

                    <!-- Gambar 2 (kedua dari kiri, ukuran 352x550) -->
                    <div class="flex-shrink-0 mt-6">
                        <img src="{{ asset('images/style2.png') }}" alt="Gaya Rambut 2"
                            class="w-[236px] h-[335px] object-cover shadow-l">
                    </div>

                    <!-- Gambar 3 (di tengah, ukuran 416x650) -->
                    <div class="flex-shrink-0 mt-0">
                        <img src="{{ asset('images/style1.png') }}" alt="Gaya Rambut 3"
                            class="w-[268px] h-[385px] object-cover shadow-l">
                    </div>

                    <!-- Gambar 4 (kedua dari kanan, ukuran 352x550) -->
                    <div class="flex-shrink-0 mt-6">
                        <img src="{{ asset('images/style3.png') }}" alt="Gaya Rambut 4"
                            class="w-[236px] h-[335px] object-cover shadow-l">
                    </div>

                    <!-- Gambar 5 (paling kanan, ukuran 289x452) -->
                    <div class="flex-shrink-0 mt-12">
                        <img src="{{ asset('images/style5.png') }}" alt="Gaya Rambut 5"
                            class="w-[204.5px] h-[286px] object-cover shadow-l">
                    </div>
                </div>
            </section>

            <!-- Section Gaya Rambut & Tone Warna -->
            <section class="w-full py-16 px-8 text-center mt-4">
                <h2 class="text-4xl font-bold mb-6">Mulai dari sini!</h2>
                <p class="text-lg mb-12">Merasa kurang nyaman dan tidak percaya diri dengan gaya rambutmu sehari-hari?
                </p>
                <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
                    <!-- Gambar Kiri -->
                    <div class="flex-1 px-12">
                        <img src="{{ asset('images/tone.png') }}" alt="Gaya Rambut 3" class="w-[205] h-[210]">
                    </div>

                    <!-- Teks Kanan -->
                    <div class="flex-1">
                        <!-- List Poin -->
                        <ul class="list-disc pl-6 space-y-12 text-left">
                            <li class="text-lg">Pilih bentuk wajahmu, kami akan memberikan rekomendasi gaya rambut yang
                                sempurna untukmu.</li>
                            <li class="text-lg mt-20">Pilih warna kulitmu, kami akan memberikan rekomendasi warna rambut
                                yang cocok untukmu.</li>
                            <li class="text-lg mt-20">Temukan blog-blog dan artikel menarik yang membantu merawat
                                keindahan rambutmu.</li>
                            <li class="text-lg mt-20">Temukan berbagai gaya rambut baru dan unik yang dapat dicoba di
                                kehidupan sehari-hari.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Section Blog -->
            <section class="py-16 sm:py-30">
                <div class="w-full px-8 lg:px-16">
                    <div class="mx-auto max-w-7xl text-center">
                        <h2 class="text-4xl font-bold mb-6">Blog Terbaru</h2>
                        <p class="text-lg mb-12">Temukan tips terkini dan terpercaya untuk merawat rambut agar tetap
                            sehat, indah, dan memukau setiap hari!</p>
                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-12 lg:gap-12">

                            <!-- Blog 1 -->
                            <div class="bg-[#FAF2EE] p-6 shadow-lg transition-all hover:scale-105 hover:shadow-xl mx-4">
                                <a href="https://www.alodokter.com/12-cara-mengatasi-rambut-rontok-berlebihan"
                                    target="_blank">
                                    <div class="relative">
                                        <img src="{{ asset('images/blog1.jpg') }}" alt="Blog 1 Image"
                                            class="w-full h-60 object-cover">
                                    </div>
                                    <div class="mt-6">
                                        <h3 class="text-xl font-semibold text-black-900">12 Cara Mengatasi Rambut Rontok
                                            Berlebihan</h3>
                                        <p class="mt-3 text-black-600 text-sm">Kerontokan rambut yang berlebihan
                                            ditandai dengan penipisan rambut secara bertahap.</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Blog 2 -->
                            <div class="bg-[#FAF2EE] p-6 shadow-lg transition-all hover:scale-105 hover:shadow-xl mx-4">
                                <a href="https://web.rupa.ai/10-gaya-rambut-ala-korea-terbaik-cocok-buat-wanita-indonesia/"
                                    target="_blank">
                                    <div class="relative">
                                        <img src="{{ asset('images/blog2.webp') }}" alt="Blog 2 Image"
                                            class="w-full h-60 object-cover">
                                    </div>
                                    <div class="mt-6">
                                        <h3 class="text-xl font-semibold text-black-900">10 Gaya Rambut ala Korea
                                            Terbaik untuk Kamu</h3>
                                        <p class="mt-3 text-black-600 text-sm">Gaya rambut bukan cuma menyangkut
                                            penampilan tapi cerminan kepribadian orang. </p>
                                    </div>
                                </a>
                            </div>

                            <!-- Blog 3 -->
                            <div class="bg-[#FAF2EE] p-6 shadow-lg transition-all hover:scale-105 hover:shadow-xl mx-4">
                                <a href="https://www.alodokter.com/10-cara-menghilangkan-ketombe-dan-rambut-rontok-yang-paling-ampuh"
                                    target="_blank">
                                    <div class="relative">
                                        <img src="{{ asset('images/blog3.jpg') }}" alt="Blog 3 Image"
                                            class="w-full h-60 object-cover">
                                    </div>
                                    <div class="mt-6">
                                        <h3 class="text-xl font-semibold text-black-900">10 Cara Menghilangkan Ketombe
                                            yang Paling Ampuh</h3>
                                        <p class="mt-3 text-black-600 text-sm">Cara menghilangkan ketombe dan rambut
                                            rontok tidaklah sulit.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section FAQ -->
            <section class="py-20 sm:py-20">
                <div class="w-full px-8 lg:px-16"> <!-- Mengubah padding di sini -->
                    <div class="mx-auto max-w-7xl text-center">
                        <h2 class="text-4xl font-bold mb-6">Frequently Asked Questions</h2>
                        <p class="text-lg mb-12">Temukan jawaban untuk beberapa pertanyaan umum yang sering diajukan
                            oleh pengguna</p>

                        <!-- FAQ Accordion -->
                        <div class="mt-8 space-y-6">
                            <!-- FAQ 1 -->
                            <div class="bg-[#FAF2EE] p-6 shadow-md hover:shadow-xl transition-all">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-semibold text-black-900">Bagaimana cara menentukan bentuk
                                        wajah saya?</h3>
                                    <button class="text-black-500 text-2xl font-semibold"
                                        onclick="toggleFAQ('faq1')">+</button>
                                </div>
                                <p id="faq1" class="mt-4 text-black-600 text-sm hidden">
                                    Anda dapat menentukan bentuk wajah dengan mengukur lebar dahi, pipi, rahang, dan
                                    panjang wajah menggunakan cermin dan alat ukur, lalu mencocokkannya dengan ciri khas
                                    bentuk wajah seperti oval, bulat, persegi, atau hati.
                                </p>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bg-[#FAF2EE] p-6 shadow-md hover:shadow-xl transition-all">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-semibold text-black-900">Bagaimana cara mengetahui tone
                                        kulit saya (warm, cool, atau neutral)?</h3>
                                    <button class="text-black-500 text-2xl font-semibold"
                                        onclick="toggleFAQ('faq2')">+</button>
                                </div>
                                <p id="faq2" class="mt-4 text-black-600 text-sm hidden">
                                    Perhatikan warna pembuluh darah di pergelangan tangan: hijau (warm), biru atau ungu
                                    (cool), atau campuran (neutral). Alternatifnya, uji dengan perhiasan: emas cocok
                                    untuk warm, perak untuk cool, dan keduanya cocok untuk neutral.
                                </p>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bg-[#FAF2EE] p-6 shadow-md hover:shadow-xl transition-all">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-semibold text-black-900">Apakah layanan ini gratis?</h3>
                                    <button class="text-black-500 text-2xl font-semibold"
                                        onclick="toggleFAQ('faq3')">+</button>
                                </div>
                                <p id="faq3" class="mt-4 text-black-600 text-sm hidden">
                                    Ya, layanan ini sepenuhnya gratis dan dapat diakses oleh semua pengguna yang
                                    terdaftar.
                                </p>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="bg-[#FAF2EE] p-6 shadow-md hover:shadow-xl transition-all">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-semibold text-black-900">Bagaimana cara menghubungi customer
                                        support?</h3>
                                    <button class="text-black-500 text-2xl font-semibold"
                                        onclick="toggleFAQ('faq4')">+</button>
                                </div>
                                <p id="faq4" class="mt-4 text-black-600 text-sm hidden">
                                    Anda dapat menghubungi customer support kami melalui formulir kontak di website atau
                                    melalui email yang tersedia...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                // Function to toggle the FAQ answer visibility
                function toggleFAQ(faqId) {
                    const answer = document.getElementById(faqId);
                    const button = answer.previousElementSibling.querySelector('button');

                    // Toggle visibility
                    if (answer.classList.contains('hidden')) {
                        answer.classList.remove('hidden');
                        button.textContent = '-'; // Change button to "-"
                    } else {
                        answer.classList.add('hidden');
                        button.textContent = '+'; // Change button to "+"
                    }
                }
            </script>
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
                        <ul class="flex space-x-6 text-gray-400">
                            <li><a href="https://id-id.facebook.com/login.php/" class="hover:text-white-300"><img
                                        src="{{ asset('images/facebook-icon.png') }}" alt="Facebook"
                                        class="w-6 h-6"></a></li>
                            <li><a href="https://x.com/?lang=id" class="hover:text-white-300"><img
                                        src="{{ asset('images/twitter-icon.png') }}" alt="Twitter" class="w-6 h-6"></a>
                            </li>
                            <li><a href="https://www.instagram.com/" class="hover:text-white-300"><img
                                        src="{{ asset('images/instagram-icon.png') }}" alt="Instagram"
                                        class="w-6 h-6"></a></li>
                            <li><a href="https://chat.whatsapp.com/FsuimHbww3gKyOI8rSrQb3" class="hover:text-white-300"><img
                                        src="{{ asset('images/whatsapp-icon.png') }}" alt="Whatsapp"
                                        class="w-6 h-6"></a></li>
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