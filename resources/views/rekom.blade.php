<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ROUND COOL</title>
  <!-- Link Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
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
        <a href="/" class="text-black text-[16px] font-normal leading-[24px]">Home</a>
        <a href="/fitur" class="text-black text-[16px] font-bold leading-[24px]">Fitur</a>
        <a href="/contact-us" class="text-black text-[16px] font-normal leading-[24px]">Contact Us</a>

        @auth
        <!-- Tombol Profil -->
        <a href="{{ route('user.profile') }}"
          class="flex justify-center items-center w-[90px] h-[35px] px-[12px] py-[8px] border-2 border-[#644D41] text-black text-[16px] font-normal leading-[24px] hover:bg-[#F5E5DD] transition-all duration-300 ease-in-out">
          Profil
        </a>
        <!-- Tombol Logout -->
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit"
            class="flex justify-center items-center px-6 py-2 bg-[#644D41] w-[120px] h-[35px] text-[#FAF2EE] text-[16px] leading-[24px] hover:bg-[#4a3d33] transition-all duration-300 ease-in-out">
            Logout
          </button>
        </form>
        @else
        <!-- Tombol Login dan Register jika belum login -->
        <a href="{{ route('login') }}"
          class="flex justify-center items-center w-[90px] h-[35px] border-2 border-[#644D41] text-black text-[16px] leading-[24px] hover:bg-[#F5E5DD] transition-all">
          Login
        </a>
        <a href="{{ route('register') }}"
          class="flex justify-center items-center px-6 py-2 bg-[#644D41] text-[#FAF2EE] text-[16px] leading-[24px] hover:bg-[#4a3d33] transition-all">
          Register
        </a>
        @endauth
      </nav>

    </div>
  </header>

 <!-- Container -->
<div class="max-w-7xl mx-auto p-6 mb-12">

<!-- Heading -->
<h1 class="text-[25px] font-bold text-center text-black-800 mb-5 mt-5" style="font-family: 'Lora', serif;">
  Gaya Rambut Terbaik Untuk Anda
</h1>

<!-- Grid untuk Kolom -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 justify-items-center">

    <!-- Gaya Rambut -->
    @if($haircut)
        <div class="relative p-4 text-center w-[385px] h-[550px] bg-cover bg-transparent bg-center mb-6 mt-6" style="box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7); margin-right: -200px;">
            <!-- Konten di dalam kotak -->
            <h2 class="text-[18px] font-bold text-black-800 mb-6 mt-6" style="font-family: 'Lora', serif;">Rekomendasi Gaya Rambut</h2>
            <img src="{{ asset($haircut->gambar) }}" alt="{{ $haircut->nama }}" class="h-[220px] w-[200px] object-cover mb-10 mt-10 mx-auto">
            <h3 class="text-[18px] font-bold text-black-800 mb-2" style="font-family: 'Lora', serif;">{{ $haircut->nama }}</h3>
            <p class="text-[14px] font-medium text-black-800 mt-2 mb-12" style="font-family: 'Lora', serif;">
                {{ $haircut->deskripsi }}
            </p>
        </div>
    @else
        <p class="text-center text-red-500">Gaya rambut tidak ditemukan.</p>
    @endif

    <!-- Warna Rambut -->
    @if($hairColor)
        <div class="relative p-4 text-center w-[385px] h-[550px] bg-cover bg-transparent bg-center mb-6 mt-6" style="box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7); margin-left: -200px;">
            <!-- Konten di dalam kotak -->
            <h2 class="text-[18px] font-bold text-black-800 mb-6 mt-6" style="font-family: 'Lora', serif;">Rekomendasi Warna Rambut</h2>
            <img src="{{ asset($hairColor->gambar) }}" class="h-[200px] object-cover mb-12 mt-12 mx-auto">
            <h3 class="text-[18px] font-bold text-black-800 mb-2" style="font-family: 'Lora', serif;">{{ $hairColor->nama }}</h3>
            <p class="text-[14px] font-medium text-black-800 mt-2" style="font-family: 'Lora', serif;">
                {{ $hairColor->deskripsi }}
            </p>
        </div>
    @else
        <p class="text-center text-red-500">Warna rambut tidak ditemukan.</p>
    @endif

</div>

</div>


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
        <p class="text-center text-[14px] font-medium mt-6" style="font-family: 'Lora', serif;">&copy; 2024 Seluna. All rights reserved.</p>

      </div>
    </div>
</body>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</html>
</body>