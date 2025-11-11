{{-- resources/views/user/strukturbem.blade.php --}}

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Struktur BEM | BEM Universitas Harapan Bangsa</title>

  <!-- Tailwind & Lucide -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; }
    h1, h2, h3, .font-title { font-family: 'Montserrat', sans-serif; }
  </style>
</head>

<body class="bg-slate-50 text-slate-800">

{{-- NAVIGATION --}}
@include('layouts.navigation')

<!-- HERO -->
<section id="home" 
  class="relative h-screen flex items-center justify-center text-center bg-cover bg-center" 
  style="background-image:url('/images/cover1.jpg')">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Content -->
  <div class="relative z-10 px-6 text-white text-center">
    <h1 class="text-3xl md:text-5xl font-extrabold mb-5 tracking-wide">
      Struktur Kepengurusan BEM<br>Universitas Harapan Bangsa
    </h1>
  </div>
</section>

<!-- Struktur Kepengurusan -->
<section id="struktur-osis" class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="relative rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500 bg-white">

      <!-- Foto Struktur -->
      <div class="w-full h-[550px] overflow-hidden bg-gray-100 rounded-t-3xl group">
        <img src="/images/strukturosis.png" alt="Struktur Kepengurusan BEM"
             class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-102 cursor-pointer"
             onclick="openImageModal(this.src)">
      </div>

      <!-- Info -->
      <div class="p-10 text-center">
        <p class="text-base md:text-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">
          Berikut adalah susunan kepengurusan BEM Universitas Harapan Bangsa periode 2024/2025
          yang bertugas menjalankan program kerja serta mewujudkan visi misi universitas.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Modal Preview Gambar -->
<div id="imageModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50 backdrop-blur-sm">
  <div class="relative max-w-6xl w-full px-4 overflow-hidden">
    <img id="modalImage" src=""
         class="w-full h-auto rounded-xl shadow-lg border border-gray-700 transform transition-transform duration-200 cursor-zoom-in"
         ondblclick="closeImageModal()">
    <button onclick="closeImageModal()"
      class="absolute top-4 right-4 bg-white/90 text-gray-800 p-2 rounded-full shadow hover:bg-gray-200 transition">
      ✕
    </button>
  </div>
</div>

{{-- FOOTER --}}
@include('layouts.footer')

<script>
  if (window.lucide) lucide.createIcons();
</script>

</body>
</html>
