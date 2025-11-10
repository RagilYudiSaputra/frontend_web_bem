 {{-- resources/views/user/event.blade.php --}}

<!doctype html>

<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Detail Event | BEM Universitas Harapan Bangsa</title>

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

 <!-- HERO SECTION (Full Screen) -->
  <section id="home" class="relative min-h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image:url('/images/cover1.jpg')">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 px-6 text-white text-center">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-5 tracking-wide leading-snug">
        EVENT OSIS<br>SMA N 1 BANTARBOLANG
      </h1>
    </div>
  </section>

  <!-- DETAIL EVENT -->
  <main class="py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-start">

      <!-- GAMBAR EVENT -->
      <div class="w-full bg-gray-100 rounded-2xl overflow-hidden shadow-md">
        <a href="#" id="openImageModal">
          <img src="/images/event1.png" alt="Pamflet Lomba Poster"
               class="w-full h-[600px] object-cover hover:scale-105 transition duration-500 cursor-pointer rounded-2xl">
        </a>
      </div>

      <!-- INFORMASI EVENT -->
      <div class="flex flex-col justify-between">
        <div>
          <!-- JUDUL EVENT -->
          <h1 class="text-3xl font-bold text-blue-700 mb-3">Lomba Poster Pendidikan</h1>

          <div class="text-sm text-slate-600 mb-6 flex flex-wrap gap-4">
            <div><span class="font-semibold text-slate-700">Tanggal:</span> 15 Desember 2025</div>
            <div><span class="font-semibold text-slate-700">Tempat:</span> Aula SMAN 1 Bantarbolang</div>
          </div>

          <!-- DESKRIPSI -->
          <div class="mb-8">
            <h2 class="text-lg font-semibold text-blue-700 mb-2">Deskripsi Kegiatan</h2>
            <p class="text-gray-700 leading-relaxed text-justify">
              Lomba ini bertujuan untuk menumbuhkan kreativitas siswa dalam menyampaikan pesan dan ide melalui media visual.
              Tema kegiatan adalah <span class="italic">“Pendidikan untuk Masa Depan”</span>, di mana peserta ditantang untuk
              membuat karya orisinal yang menggambarkan semangat belajar, inovasi, dan nilai-nilai pendidikan.
              <br><br>
              Penilaian mencakup orisinalitas ide, komposisi desain, pemilihan warna, dan kekuatan pesan yang disampaikan.
            </p>
          </div>

          <!-- PERSYARATAN -->
          <div class="mb-8">
            <h3 class="text-lg font-semibold text-blue-700 mb-3">Persyaratan Peserta</h3>
            <ul class="list-disc pl-6 space-y-2 text-gray-700 leading-relaxed text-justify">
              <li>Peserta dapat berupa individu atau kelompok maksimal 2 orang.</li>
              <li>Karya harus orisinal dan belum pernah dipublikasikan sebelumnya.</li>
              <li>Ukuran karya A3, format digital: JPG atau PNG.</li>
              <li>Karya dikumpulkan sebelum tanggal 10 Desember 2025.</li>
            </ul>
          </div>
        </div>

        <!-- BUTTON -->
        <div class="flex items-center gap-4 mt-6">
          <a href="{{ route('event') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-md border border-slate-300 bg-white text-slate-700 hover:bg-slate-100 transition">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali ke Event
          </a>
          <a href="#daftar" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
            <i data-lucide="edit-3" class="w-4 h-4"></i> Daftar Sekarang
          </a>
        </div>
      </div>
    </div>
  </main>

  <!-- MODAL GAMBAR -->
  <div id="imageModal" class="fixed inset-0 bg-black/80 flex items-center justify-center hidden z-50">
    <div class="relative">
      <img src="/images/event1.png" alt="Pamflet Lomba" class="max-h-[90vh] rounded-lg shadow-lg">
      <button id="closeImageModal" class="absolute top-2 right-2 bg-white/70 hover:bg-white p-1.5 rounded-full">
        <i data-lucide="x" class="w-5 h-5 text-gray-800"></i>
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
