{{-- resources/views/user/kementrian.blade.php --}}

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kementrian | BEM Universitas Harapan Bangsa</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      color: #1e293b;
      background-color: #f8fafc;
      scroll-behavior: smooth;
    }
    h1, h2, h3, .font-title {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>

<body class="text-slate-800">

  {{-- NAVIGATION --}}
  @include('layouts.navigation')

  <!-- ===================================== -->
  <!-- HERO SECTION (FULL SCREEN) -->
  <!-- ===================================== -->
  <section id="home" 
    class="relative h-screen flex items-center justify-center text-center bg-cover bg-center" 
    style="background-image:url('/images/cover1.jpg')">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 px-6 text-white">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-4 leading-snug">
        Kementrian Sekretariat dan Tata Kelola Kabinet (Setlokab)
      </h1>
    </div>
  </section>

  <!-- ===================================== -->
  <!-- KOORDINATOR & TUGAS UMUM -->
  <!-- ===================================== -->
  <section id="koordinator-divisi" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-2xl font-bold text-indigo-700 mb-10 text-left">Koordinator Bidang 1</h2>

      <div class="grid lg:grid-cols-12 gap-10 items-start">
        <!-- Card Koordinator -->
        <div class="lg:col-span-4 flex justify-center">
          <div class="w-full max-w-sm">
            <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
              <div class="w-full h-80 bg-gray-100 overflow-hidden">
                <img src="/images/koor1.png" alt="Koordinator Bidang 1"
                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
              </div>
              <div class="bg-white rounded-lg shadow-md p-5 -mt-8 mx-4 relative z-10 text-center">
                <h3 class="text-lg font-semibold text-slate-800">Kartika Anindita</h3>
                <p class="text-sm text-slate-500 italic mt-1">Koordinator Bidang 1</p>
                <div class="h-px bg-slate-200 my-3"></div>
                <div class="flex justify-center gap-3 text-slate-500">
                  <a href="#" class="p-2 rounded-full hover:bg-pink-50 hover:text-pink-600 transition">
                    <i data-lucide="instagram" class="w-4 h-4"></i>
                  </a>
                  <a href="#" class="p-2 rounded-full hover:bg-sky-50 hover:text-sky-600 transition">
                    <i data-lucide="linkedin" class="w-4 h-4"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tugas Umum -->
        <div class="lg:col-span-8 bg-white rounded-2xl shadow-md p-8">
          <h3 class="text-xl font-semibold text-indigo-700 mb-4 text-left">Tugas Umum Divisi</h3>
          <ul class="list-disc pl-6 space-y-2 text-gray-700 leading-relaxed text-base">
            <li>Menjalankan kegiatan keagamaan yang rutin dan terjadwal di sekolah.</li>
            <li>Menjadi penggerak kegiatan sosial dan pembinaan karakter rohani siswa.</li>
            <li>Mendukung kegiatan OSIS dan sekolah dalam bidang kerohanian.</li>
            <li>Berkoordinasi dengan guru pembimbing dalam setiap pelaksanaan proker.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================== -->
  <!-- ANGGOTA DIVISI -->
  <!-- ===================================== -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-2xl font-bold text-indigo-700 mb-10 text-left">Anggota Divisi</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @php
          $anggota = [
            ['img'=>'/images/koor1.png','nama'=>'Aisyah Fadhlurahman'],
            ['img'=>'/images/anggota1.png','nama'=>'Rizky Maulana'],
            ['img'=>'/images/koor1.png','nama'=>'Nabila Putri'],
            ['img'=>'/images/anggota1.png','nama'=>'Dimas Aditya'],
          ];
        @endphp

        @foreach ($anggota as $a)
        <div class="w-full max-w-sm mx-auto">
          <div class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
            <div class="w-full h-64 bg-gray-100 overflow-hidden rounded-t-2xl">
              <img src="{{ $a['img'] }}" alt="{{ $a['nama'] }}"
                   class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            <div class="bg-white rounded-lg shadow p-4 -mt-6 mx-4 relative z-10 text-center">
              <h4 class="font-semibold text-slate-800 text-base">{{ $a['nama'] }}</h4>
              <p class="text-sm text-slate-500 italic mt-1">Anggota Bidang 1</p>
              <div class="h-px bg-slate-200 my-3"></div>
              <div class="flex justify-center gap-3 text-slate-500">
                <a href="#" class="p-2 rounded-full hover:bg-pink-50 hover:text-pink-600 transition">
                  <i data-lucide="instagram" class="w-4 h-4"></i>
                </a>
                <a href="#" class="p-2 rounded-full hover:bg-sky-50 hover:text-sky-600 transition">
                  <i data-lucide="linkedin" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- ===================================== -->
  <!-- PROGRAM KERJA -->
  <!-- ===================================== -->
  <section id="proker" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
      <div class="bg-white rounded-2xl shadow-md p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-8 text-left">Program Kerja</h2>

        <div class="grid gap-8 md:grid-cols-2 text-gray-700 text-base leading-relaxed">
          <div>
            <h3 class="text-lg font-semibold text-indigo-600 mb-2">Proker Harian</h3>
            <p>Pembacaan Asmaul Husna, doa pagi, sholat dzuhur berjamaah, penarikan infak harian, dan zikir singkat sebelum pembelajaran.</p>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-indigo-600 mb-2">Proker Mingguan</h3>
            <p>Pelatihan hadroh, tilawah, pengajian, sholat Jum'at berjamaah, serta pengumpulan infak mingguan.</p>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-indigo-600 mb-2">Proker Bulanan</h3>
            <p>Pengajian bulanan, kajian keislaman, workshop ibadah, evaluasi kegiatan, dan kerja bakti keagamaan.</p>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-indigo-600 mb-2">Proker Tahunan</h3>
            <p>Peringatan hari besar Islam, pesantren kilat, buka puasa bersama, halal bihalal, istighosah, dan penggalangan dana sosial.</p>
          </div>
        </div>

        <p class="text-sm text-slate-500 mt-6 text-left italic">
          *Jadwal kegiatan dapat berubah sesuai kalender akademik dan arahan pembina.
        </p>
      </div>
    </div>
  </section>

  {{-- FOOTER --}}
  @include('layouts.footer')

  <script>
    lucide.createIcons();

    // Slider sederhana
    (function(){
      const images = [
        'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1800&q=80',
        'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1800&q=80',
        'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1800&q=80',
      ];

      const slidesWrap = document.getElementById('heroSlides');
      const dotsWrap = document.getElementById('heroDots');
      let idx = 0, timer = null;

      function build(){
        slidesWrap.innerHTML = '';
        dotsWrap.innerHTML = '';
        images.forEach((src,i)=>{
          const slide = document.createElement('div');
          slide.className = 'absolute inset-0 transition-opacity duration-700';
          slide.style.opacity = i===0 ? '1':'0';
          slide.innerHTML = `<img src="${src}" class="w-full h-full object-cover" alt="Slide ${i+1}">`;
          slidesWrap.appendChild(slide);

          const dot = document.createElement('button');
          dot.className = 'dot w-3 h-3 rounded-full bg-white/60';
          dot.onclick = ()=>show(i);
          dotsWrap.appendChild(dot);
        });
        updateDots();
      }

      function show(n){
        const slides = slidesWrap.children;
        idx = (n + slides.length) % slides.length;
        Array.from(slides).forEach((s,i)=> s.style.opacity = i===idx ? '1':'0');
        updateDots();
      }

      function updateDots(){
        Array.from(dotsWrap.children).forEach((d,i)=> d.classList.toggle('bg-white', i===idx));
      }

      function next(){ show(idx+1); }
      function start(){ timer = setInterval(next, 4500); }

      build();
      start();
    })();
  </script>

</body>
</html>
