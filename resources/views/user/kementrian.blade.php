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

  
<!-- FULL-WIDTH SLIDER + COVER BIDANG -->
<!-- Pastikan tailwind sudah diload di layout -->
<style>
  /* kecil agar dots/btn kontras di full width */
  .slider-slide { position: absolute; inset: 0; transition: opacity .7s, transform .7s; }
  .slider-img { width:100%; height:100%; object-fit:cover; display:block; }
  /* buat overlay dot kecil */
  .dot { width:10px; height:10px; border-radius:9999px; }
</style>

<section aria-label="Hero slider and cover" class="w-full overflow-hidden">
  <!-- SLIDER (full width, tinggi 55vh pada desktop, 40vh mobile) -->
  <div id="heroSlider" class="relative w-full" style="height:55vh;">
    <div id="heroSlides" class="relative w-full h-full"></div>

    <!-- overlay grad untuk teks kontras (di tengah bawah) -->
    <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-black/45 to-transparent pointer-events-none"></div>

    <!-- prev/next (desktop visible) -->
    <button id="heroPrev" class="hidden md:flex items-center justify-center absolute left-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 rounded-full bg-black/40 text-white hover:bg-black/60">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </button>
    <button id="heroNext" class="hidden md:flex items-center justify-center absolute right-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 rounded-full bg-black/40 text-white hover:bg-black/60">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </button>

    <!-- dots -->
    <div id="heroDots" class="absolute left-1/2 -translate-x-1/2 bottom-6 z-30 flex items-center gap-3"></div>
  </div>

  <!-- COVER BIDANG (full width, tinggi 45vh desktop, 35vh mobile) -->
<div class="relative w-full h-[45vh] md:h-[45vh] lg:h-[55vh]">
  <img src="/images/cover1.jpg" alt="Cover Bidang 2" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/50"></div>

  <div class="absolute inset-0 z-20 flex items-center">
    <div class="w-full px-6 lg:px-24">
      <div class="grid grid-cols-12 items-center">
        <div class="col-span-7">
          <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">kementrian 2</h2>
          <p class="mt-2 text-white/90 italic max-w-xl">"Kedisiplinan, Budi Pekerti dan Wawasan Bela Negara"</p>
        </div>

        <div class="col-span-5 flex justify-end">
          <a href="/kementrian/2"
             class="inline-flex items-center gap-3 px-8 py-3 rounded-lg
                    bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold
                    transition-all duration-300 transform hover:scale-105 hover:shadow-xl
                    hover:from-blue-700 hover:to-blue-800">
            SELENGKAPNYA
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

</section>

<!-- SLIDER JS (vanilla) -->
<script>
(function(){
  const images = [
    // Ganti dengan path lokal jika mau
    'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1800&q=80',
    'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1800&q=80',
    'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1800&q=80',
    'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1800&q=80',
    'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1800&q=80'
  ];

  const slidesWrap = document.getElementById('heroSlides');
  const dotsWrap = document.getElementById('heroDots');
  const prevBtn = document.getElementById('heroPrev');
  const nextBtn = document.getElementById('heroNext');

  let idx = 0;
  let timer = null;
  const AUTOPLAY = 4500;

  function build() {
    slidesWrap.innerHTML = '';
    dotsWrap.innerHTML = '';
    images.forEach((src, i) => {
      // slide
      const slide = document.createElement('div');
      slide.className = 'slider-slide';
      slide.style.opacity = i === 0 ? '1' : '0';
      slide.style.zIndex = i === 0 ? '20' : '10';

      const link = document.createElement('a');
      link.href = src; // buka gambar di tab baru jika klik
      link.target = '_blank';
      link.rel = 'noopener noreferrer';
      link.className = 'block w-full h-full';

      const img = document.createElement('img');
      img.src = src;
      img.alt = 'Slide ' + (i+1);
      img.className = 'slider-img';

      link.appendChild(img);
      slide.appendChild(link);
      slidesWrap.appendChild(slide);

      // dot
      const d = document.createElement('button');
      d.className = 'dot bg-white/60';
      d.setAttribute('aria-label', 'Slide ' + (i+1));
      d.addEventListener('click', ()=> goTo(i));
      dotsWrap.appendChild(d);
    });

    updateDots();
  }

  function show(n) {
    const slides = slidesWrap.children;
    if (!slides.length) return;
    idx = ((n % slides.length) + slides.length) % slides.length;
    Array.from(slides).forEach((s, i) => {
      if (i === idx) {
        s.style.opacity = '1';
        s.style.zIndex = '20';
        s.style.transform = 'translateZ(0) scale(1)';
      } else {
        s.style.opacity = '0';
        s.style.zIndex = '10';
        s.style.transform = 'translateZ(0) scale(1.02)';
      }
    });
    updateDots();
  }

  function updateDots() {
    Array.from(dotsWrap.children).forEach((d, i) => {
      d.classList.toggle('bg-white', i === idx);
      d.classList.toggle('bg-white/60', i !== idx);
      d.style.transform = i === idx ? 'scale(1.15)' : 'scale(1)';
      d.style.transition = 'transform .18s';
    });
  }

  function prev() { show(idx - 1); reset(); }
  function next() { show(idx + 1); reset(); }
  function goTo(i) { show(i); reset(); }

  function start() {
    stop();
    timer = setInterval(()=> { show(idx + 1); }, AUTOPLAY);
  }
  function stop() { if (timer) { clearInterval(timer); timer = null; } }
  function reset(){ start(); }

  // init
  build();
  show(0);
  start();

  // events
  if (prevBtn) prevBtn.addEventListener('click', prev);
  if (nextBtn) nextBtn.addEventListener('click', next);
  const hero = document.getElementById('heroSlider');
  hero.addEventListener('mouseenter', stop);
  hero.addEventListener('mouseleave', start);
  window.addEventListener('keydown', (e)=> {
    if (e.key === 'ArrowLeft') prev();
    if (e.key === 'ArrowRight') next();
  });

  // responsive height: adjust mobile height
  function adjustHeight(){
    const h = window.innerWidth < 768 ? Math.round(window.innerHeight * 0.45) : Math.round(window.innerHeight * 0.55);
    document.getElementById('heroSlider').style.height = h + 'px';
  }
  adjustHeight();
  window.addEventListener('resize', adjustHeight);
})();
</script>


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
