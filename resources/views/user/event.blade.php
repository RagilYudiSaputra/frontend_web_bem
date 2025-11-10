{{-- resources/views/user/event.blade.php --}}

<!doctype html>

<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Event | BEM Universitas Harapan Bangsa</title>

  <!-- Tailwind & Lucide -->

  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; }
    h1,h2,h3,.font-title { font-family: 'Montserrat', sans-serif; }
  </style>

</head>

<body class="bg-slate-50 text-slate-800">

{{-- NAVIGATION --}}
@include('layouts.navigation')

<!-- HERO -->

<section id="home" class="relative h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image:url('/images/cover1.jpg')">
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="relative z-10 px-6 text-white text-center">
    <h1 class="text-3xl md:text-5xl font-extrabold mb-5 tracking-wide">
      Event BEM Universitas Harapan Bangsa
    </h1>
  </div>
</section>

<!-- Event Terbaru -->

<section id="events-terbaru" class="py-12 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-title text-blue-600 font-bold mb-8">Event Terbaru</h2>
    <div class="grid md:grid-cols-3 gap-6 justify-center">

  <!-- Event 1 -->
  <a href="{{ route('detailevent', ['id' => 1]) }}" class="block">
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
</a>

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

  </div>
</section>

<!-- Event Selesai -->

<section id="events-selesai" class="py-12 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-title text-blue-600 font-bold mb-8">Event Selesai</h2>
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

  </div>
</section>

{{-- FOOTER --}}
@include('layouts.footer')

<script>
  if (window.lucide) lucide.createIcons();
</script>

</body>
</html>
