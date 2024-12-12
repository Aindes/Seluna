<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shape n tone</title>
  <!-- Link Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#fff4ec]" style="font-family: 'Lora', serif;">
  <!-- Header -->
  <header class="bg-[#FAF2EE] w-full flex items-center" style="height: 64px; flex-shrink: 0;">
    <div class="max-w-7xl mx-auto w-full flex items-center justify-between px-4">
      <!-- Logo -->
      <div class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Seluna Logo" class="w-[132px] h-[68px]">
      </div>

      <!-- Navigation -->
      <nav class="flex items-center space-x-8">
        <a href="/" class="text-black text-[16px] font-normal leading-[24px]">Home</a>
        <a href="/fitur" class="text-black text-[16px] font-bold leading-[24px]">Fitur</a>
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

  <!-- Section: Welcome Section -->
  <section
    class="flex justify-center items-center h-[500px] bg-cover bg-center bg-[url('images/bgcewek.png')] bg-black bg-opacity-50 min-h-screen">
    <!-- Content Box -->
    <div class="text-white px-12 py-8 max-w-2xl w-full ml-auto">
      <!-- Heading -->
      <h1 class="text-4xl font-bold text-left" style="font-family: 'Lora', serif;">
        We'll help you find the <br> perfect look
      </h1>
      <!-- Subtext -->
      <p class="text-xl text-left mt-4" style="font-family: 'Lora', serif;">
        Tell us about your face shape and skin tone! Is <br>
        your face oval, round, or square-shaped? <br>
        And what about your skin tone—do you have a <br>
        warm, cool, or neutral undertone?
      </p>
      <!-- Learn More Button -->
      <a href="#learn-more"
        class="inline-block px-4 py-2 mt-4 bg-[#644D41] text-lg text-white font-semibold hover:bg-[#4a3d33] transition-all duration-300 ml-0"
        style="font-family: 'Lora', serif;">
        Learn More »
      </a>
    </div>
  </section>
  
  <!-- Section: Pilih Bentuk Wajahmu -->
  <section class="p-8 bg-cover bg-center bg-[url('/images/bg.png')] min-h-screen">
    <h1 class="text-[25px] font-bold text-center text-black-800 mb-4" style="font-family: 'Lora', serif;">
      Pilih bentuk wajahmu!
    </h1>
    <!-- Grid untuk Kolom dengan Flexbox -->
    <div class="flex justify-center gap-6">
      <!-- Oval (Cool) -->
      <div class="bg-[#F5E5DD] bg-opacity-50 p-6 shadow-lg text-center w-[250px] h-[400px] mb-4 mt-5">
        <img src="{{ asset('images/ovalbg.png') }}" alt="wajah oval"
          class="w-full h-[230px] object-cover rounded-md mb-4">
        <h2 class="text-[20px] font-bold text-black-800" style="font-family: 'Lora', serif;">OVAL</h2>
        <p class="text-[17px] font-medium text-black-800 -mt-1" style="font-family: 'Lora', serif;">Proporsi seimbang
        </p>
      </div>
      <!-- Bulat (Netral) -->
      <div class="bg-[#F5E5DD] bg-opacity-50 p-6 shadow-lg text-center w-[250px] h-[400px] mb-4 mt-5">
        <img src="{{ asset('images/bulatbg.png') }}" alt="Wajah Bulat"
          class="w-full h-[230px] object-cover rounded-md mb-4">
        <h2 class="text-[20px] font-bold text-black-800" style="font-family: 'Lora', serif;">BULAT</h2>
        <p class="text-[17px] font-medium text-black-800 -mt-1" style="font-family: 'Lora', serif;">
          <span class="block">Pipi penuh dan</span>
          <span class="block">garis wajah lembut</span>
        </p>
      </div>
      <!-- Kotak (Warm) -->
      <div class="bg-[#F5E5DD] bg-opacity-50 p-6 shadow-lg text-center w-[250px] h-[400px] mb-4 mt-5">
        <img src="{{ asset('images/kotakbg.png') }}" alt="wajah kotak"
          class="w-full h-[230px] object-cover rounded-md mb-4">
        <h2 class="text-[20px] font-bold text-black-800" style="font-family: 'Lora', serif;">KOTAK</h2>
        <p class="text-[17px] font-medium text-black-800 -mt-1" style="font-family: 'Lora', serif;">
          <span class="block">Rahang tegas</span>
          <span class="block">dan lebar</span>
        </p>
      </div>
    </div>
  </section>
  <!-- Section: Pilih Tone Warna Kulitmu -->
  <section class="p-8 mt-4 min-h-screen">
    <!-- Caption -->
    <h1 class="text-[25px] font-bold text-center text-black-800 mb-8" style="font-family: 'Lora', serif;">
      Yuk kenali tone warna kulitmu!
    </h1>
    <!-- Cool Tone -->
    <div class="mb-4">
      <div class="grid grid-cols-1 justify-items-center gap-4">
        <img src="images/kenalicool.png" alt="Cool Tone" class="w-full max-w-3xl" />
      </div>
    </div>
    <!-- Neutral Tone -->
    <div class="mb-4">
      <div class="grid grid-cols-1 justify-items-center gap-4">
        <img src="images/kenalinetral.png" alt="Neutral Tone" class="w-full max-w-3xl" />
      </div>
    </div>
    <!-- Warm Tone -->
    <div class="mb-4">
      <div class="grid grid-cols-1 justify-items-center gap-4">
        <img src="images/kenaliwarm.png" alt="Warm Tone" class="w-full max-w-3xl" />
      </div>
    </div>
    </div>
  </section>
  <!-- Section: Pencet Warna Kulit -->
  <section class="bg-cover bg-center bg-[url('images/bg.png')] p-8 mt-4">
    <h3 class="text-[25px] font-bold text-center text-black-800 mb-4" style="font-family: 'Lora', serif;">
      Sekarang, pilih tone warna kulitmu.
    </h3>
    <div class="flex justify-center gap-2 mt-1">
      <!-- COOL -->
      <div
        class="border-2 border-[#4e3c32] p-3 text-center w-[120px] h-[40px] bg-center opacity-80 flex items-center justify-center">
        <span class="text-[17px] font-bold" style="font-family: 'Lora', serif;">COOL</span>
      </div>
      <!-- NETRAL -->
      <div
        class="border-2 border-[#4e3c32] p-3 text-center w-[120px] h-[40px] bg-center opacity-80 flex items-center justify-center">
        <span class="text-[17px] font-bold" style="font-family: 'Lora', serif;">NETRAL</span>
      </div>
      <!-- WARM -->
      <div
        class="border-2 border-[#4e3c32] p-3 text-center w-[120px] h-[40px] bg-center opacity-80 flex items-center justify-center">
        <span class="text-[17px] font-bold" style="font-family: 'Lora', serif;">WARM</span>
      </div>
    </div>
  </section>
  <!-- Section: Results and Next Button -->
  <section class="p-8 mt-6">
    <div class="flex justify-center space-x-6 -mt-8 -mb-8">
      <button class="text-black text-[20px] font-bold" style="font-family: 'Lora', serif;">
        See Your Results
      </button>
      <button class="bg-[#4e3c32] text-white w-[150px] h-[40px] text-[20px] font-bold hover:bg-[#5d4a3b] 
transition-all duration-300" style="font-family: 'Lora', serif;">
        Next
      </button>
    </div>
  </section>
</body>
<!-- Footer -->
<footer class="bg-[#4E3C32] text-white py-12 sm:py-10">
  <div class="w-full px-12 lg:px-8">
    <div class="mx-auto max-w-7xl">
      <h4 class="text-center text-[20px] font-medium mb-6" style="font-family: 'Lora', serif;">Connect with us</h4>
      <div class="flex justify-center">
        <!-- Footer Column: Social Media -->
        <div class="flex flex-col items-center">
          <ul class="flex space-x-6 text-gray-400">
            <li><a href="https://id-id.facebook.com/login.php/" class="hover:text-white-300"><img
                  src="{{ asset('images/facebook-icon.png') }}" alt="Facebook" class="w-6 h-6"></a></li>
            <li><a href="https://x.com/?lang=id" class="hover:text-white-300"><img
                  src="{{ asset('images/twitter-icon.png') }}" alt="Twitter" class="w-6 h-6"></a>
            </li>
            <li><a href="https://www.instagram.com/" class="hover:text-white-300"><img
                  src="{{ asset('images/instagram-icon.png') }}" alt="Instagram" class="w-6 h-6"></a></li>
            <li><a href="https://chat.whatsapp.com/FsuimHbww3gKyOI8rSrQb3" class="hover:text-white-300"><img
                  src="{{ asset('images/whatsapp-icon.png') }}" alt="Whatsapp" class="w-6 h-6"></a></li>
          </ul>
        </div>
      </div>
      <p class="text-center text-[14px] font-medium mt-6" style="font-family: 'Lora', serif;">&copy; 2024 Seluna. All
        rights reserved.</p>
    </div>
  </div>
</footer>
<script src="{{ asset('js/script.js') }}"></script>

</html>
</body>