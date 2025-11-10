{{-- resources/views/user/dashboard.blade.php --}}

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Home | BEM Universitas Harapan Bangsa</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    body { font-family: 'Poppins', sans-serif; }
    h1,h2,h3,.font-title { font-family: 'Montserrat', sans-serif; }

    .menu-link { position: relative; transition: color .18s ease, transform .18s cubic-bezier(.2,.9,.3,1); }
    .menu-link::after { content: ""; position: absolute; left: 0; bottom: -8px; height: 4px; width: 0%; background: #fcca1b; border-radius: 3px; transition: width .26s cubic-bezier(.2,.9,.3,1); box-shadow: 0 6px 18px rgba(252,202,59,0.12); }
    .menu-link:hover::after, .menu-link.active::after { width: 100%; }
    .menu-link:hover { transform: translateY(-4px); color: #fcca1b !important; }
    .menu-link.active { color: #fcca1b !important; transform: translateY(-4px); }
    .menu-link.active::before { content: ""; position: absolute; left:0; right:0; bottom:-14px; height:6px; border-radius:6px; filter: blur(8px); background: linear-gradient(90deg, rgba(252,202,59,0.18), rgba(252,202,59,0.06)); opacity:1; transform: translateY(0); }
    #navbar { z-index: 999; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

{{-- NAVIGATION --}}
@include('layouts.navigation')

{{-- HERO --}}
<section id="home" class="relative h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image:url('/images/cover1.jpg')">
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="relative z-10 px-6 text-white">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-wide">BEM Universitas Harapan Bangsa</h1>
    <p class="text-lg font-light">Official Website</p>
  </div>
</section>

{{-- VISI & MISI --}}
<section id="visi-misi" class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

{{-- Ketua --}}
<div class="flex justify-center">
  <div class="w-full max-w-sm">
    <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all">
      <div class="w-full h-80 overflow-hidden bg-gray-100 rounded-t-2xl">
        <img src="/images/ketua.png" alt="Ketua BEM" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="bg-white rounded-lg shadow p-5 -mt-8 mx-4 relative z-10 text-center">
        <h3 class="text-lg font-semibold text-gray-800">Yohan Nurizki Putra</h3>
        <p class="text-xs text-gray-500 italic mt-1">Ketua BEM</p>
        <div class="h-px bg-gray-100 my-3"></div>
        <div class="flex justify-center gap-3 text-gray-500">
          <a href="#" class="p-2 hover:bg-pink-50 hover:text-pink-600 rounded-full transition"><i data-lucide="instagram" class="w-4 h-4"></i></a>
          <a href="#" class="p-2 hover:bg-sky-50 hover:text-sky-600 rounded-full transition"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
        </div>
      </div>
      <div class="pt-6"></div>
    </div>
  </div>
</div>

{{-- VISI & MISI TEKS --}}
<div class="space-y-8">
  <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
    <div class="flex items-center gap-3 mb-3">
      <i data-lucide="eye" class="w-5 h-5 text-blue-600"></i>
      <h4 class="text-lg font-bold text-blue-700">Visi</h4>
    </div>
    <p class="text-sm text-gray-700 leading-relaxed text-justify">
      Menjadikan BEM sebagai organisasi yang berinovatif, berkarakter, dan bermanfaat bagi mahasiswa serta kampus.
    </p>
  </div>
  <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
    <div class="flex items-center gap-3 mb-3">
      <i data-lucide="target" class="w-5 h-5 text-blue-600"></i>
      <h4 class="text-lg font-bold text-blue-700">Misi</h4>
    </div>
    <ul class="list-disc pl-5 space-y-2 text-sm text-gray-700 leading-relaxed text-justify">
      <li>Menyelenggarakan kegiatan yang mendukung pengembangan pengetahuan, bakat, dan inovasi mahasiswa.</li>
      <li>Mengoptimalkan potensi mahasiswa melalui kegiatan organisasi, lomba, dan pengabdian masyarakat.</li>
      <li>Menumbuhkan rasa tanggung jawab dan solidaritas antar mahasiswa melalui kegiatan sosial dan akademik.</li>
    </ul>
  </div>
</div>

{{-- Wakil Ketua --}}
<div class="flex justify-center">
  <div class="w-full max-w-sm">
    <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all">
      <div class="w-full h-80 overflow-hidden bg-gray-100 rounded-t-2xl">
        <img src="/images/wakilosis.png" alt="Wakil Ketua BEM" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="bg-white rounded-lg shadow p-5 -mt-8 mx-4 relative z-10 text-center">
        <h3 class="text-lg font-semibold text-gray-800">Khanza Azrania Rose</h3>
        <p class="text-xs text-gray-500 italic mt-1">Wakil Ketua BEM</p>
        <div class="h-px bg-gray-100 my-3"></div>
        <div class="flex justify-center gap-3 text-gray-500">
          <a href="#" class="p-2 hover:bg-pink-50 hover:text-pink-600 rounded-full transition"><i data-lucide="instagram" class="w-4 h-4"></i></a>
          <a href="#" class="p-2 hover:bg-sky-50 hover:text-sky-600 rounded-full transition"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
        </div>
      </div>
      <div class="pt-6"></div>
    </div>
  </div>
</div>

  </div>
</section>

{{-- Event --}}
<section id="events" class="py-12 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-title text-blue-600 font-bold mb-8">Event Terbaru</h2>

    <!-- GRID EVENT -->
    <div class="grid md:grid-cols-3 gap-6 justify-center">

      <!-- Event 1 -->
      <div class="relative bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="overflow-hidden">
          <img src="/images/cover1.jpg" alt="Lomba Poster" class="w-full h-40 md:h-44 object-cover transform group-hover:scale-110 transition duration-500">
        </div>
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-500">
          <span class="text-white font-semibold">Lihat Detail</span>
        </div>
        <div class="p-4 text-left">
          <h3 class="text-lg font-semibold mb-1">Lomba Poster</h3>
          <p class="text-gray-600 text-sm mb-1">Kompetisi desain poster bertema pendidikan.</p>
          <p class="text-xs text-gray-500">Tanggal: 15 Des 2025</p>
        </div>
      </div>

      <!-- Event 2 -->
      <div class="relative bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="overflow-hidden">
          <img src="/images/cover1.jpg" alt="Festival Musik" class="w-full h-40 md:h-44 object-cover transform group-hover:scale-110 transition duration-500">
        </div>
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-500">
          <span class="text-white font-semibold">Lihat Detail</span>
        </div>
        <div class="p-4 text-left">
          <h3 class="text-lg font-semibold mb-1">Festival Musik</h3>
          <p class="text-gray-600 text-sm mb-1">Pertunjukan musik antar kelas.</p>
          <p class="text-xs text-gray-500">Tanggal: 17 Agustus 2025</p>
        </div>
      </div>

      <!-- Event 3 -->
      <div class="relative bg-white rounded-xl shadow-md overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="overflow-hidden">
          <img src="/images/cover1.jpg" alt="Lomba Olahraga" class="w-full h-40 md:h-44 object-cover transform group-hover:scale-110 transition duration-500">
        </div>
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-500">
          <span class="text-white font-semibold">Lihat Detail</span>
        </div>
        <div class="p-4 text-left">
          <h3 class="text-lg font-semibold mb-1">Lomba Olahraga</h3>
          <p class="text-gray-600 text-sm mb-1">Kompetisi olahraga antar kelas.</p>
          <p class="text-xs text-gray-500">Tanggal: 20 Des 2025</p>
        </div>
      </div>

    </div>

    <!-- Tombol "Lihat Event Lainnya" -->
    <!-- Tombol "Lihat Event Lainnya" -->
<div class="text-center mt-10">
  <a href="{{ url('/event') }}" class="inline-block px-8 py-3 rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold hover:opacity-90 transition">
    Lihat Event Lainnya
  </a>
</div>


  </div>
</section>

{{-- KEMENTRIAN --}}
<section id="kementrian" class="py-12 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-title text-blue-600 font-bold mb-8">Kementrian BEM</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      @for ($j = 1; $j <= 8; $j++)
      <div class="relative rounded-lg overflow-hidden shadow-md group cursor-pointer">
        <img src="/images/cover1.jpg" alt="Kementrian {{ $j }}" class="w-full h-44 object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
          <h3 class="text-white text-lg md:text-xl font-semibold">KEMENTRIAN  {{ $j }}</h3>
        </div>
      </div>
      @endfor
    </div>
  </div>
</section>

{{-- VIDEO + SLOGAN --}}
<section class="py-12 bg-gray-100 text-center">
  <div class="max-w-4xl mx-auto px-4">
    <div class="relative overflow-hidden rounded-xl shadow-lg mb-6">
      <div style="position:relative;padding-bottom:56.25%;height:0;width:100%;">
        <iframe src="https://www.youtube.com/embed/N5zYrpWDwIs" title="YouTube video" allowfullscreen style="position:absolute;left:0;top:0;width:100%;height:100%;border:0;"></iframe>
      </div>
    </div>
    <p class="text-base md:text-lg font-semibold mb-2">“Banyak pengalaman dan koneksi yang bisa kalian dapatkan dengan mengikuti kepengurusan BEM.”</p>
    <p class="text-lg md:text-xl font-bold text-blue-600">Ayo Join Sekarang!</p>
  </div>
</section>

{{-- FOOTER --}}
@include('layouts.footer')

<script>
  lucide.createIcons();
</script>

</body>
</html>
