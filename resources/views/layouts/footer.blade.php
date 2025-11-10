<!-- FOOTER BEM Universitas Harapan Bangsa -->
<footer id="footer" class="bg-[#071021] text-slate-300 relative overflow-hidden">
  <!-- Background gradient accent -->
  <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 via-transparent to-transparent pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 py-16">
    <div class="grid md:grid-cols-4 gap-10">
      <!-- Brand / Contact -->
      <div>
        <h3 class="text-2xl font-bold text-white mb-4">BEM Universitas Harapan Bangsa</h3>
        <p class="text-sm text-slate-400 mb-4">Jl. Raden Patah No.100, Purwokerto, Jawa Tengah</p>

        <div class="text-sm text-slate-400 space-y-1 mb-4">
          <div><span class="font-semibold text-slate-300">Phone:</span> +62 812-3456-7890</div>
          <div><span class="font-semibold text-slate-300">Email:</span> bem@uhb.ac.id</div>
        </div>

        <div class="flex items-center gap-3 mt-3">
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:bg-blue-700/30 transition">
            <i data-lucide="facebook" class="w-5 h-5"></i>
          </a>
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:bg-pink-600/30 transition">
            <i data-lucide="instagram" class="w-5 h-5"></i>
          </a>
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:bg-red-600/30 transition">
            <i data-lucide="youtube" class="w-5 h-5"></i>
          </a>
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-slate-700 hover:bg-blue-500/30 transition">
            <i data-lucide="linkedin" class="w-5 h-5"></i>
          </a>
        </div>
      </div>

      <!-- Useful Links -->
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Menu Cepat</h4>
        <ul class="grid grid-cols-1 gap-x-8 gap-y-3 text-slate-400 md:grid-flow-col md:grid-rows-3 md:auto-rows-min md:w-max">
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 mt-1 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M7 7l5 5-5 5"/>
            </svg>
            <a href="/" class="hover:text-blue-400 transition">Home</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 mt-1 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M7 7l5 5-5 5"/>
            </svg>
            <a href="/event" class="hover:text-blue-400 transition">Event</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 mt-1 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M7 7l5 5-5 5"/>
            </svg>
            <a href="/kementrian" class="hover:text-blue-400 transition">Kementrian</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 mt-1 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M7 7l5 5-5 5"/>
            </svg>
            <a href="#footer" class="hover:text-blue-400 transition">Kontak</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 mt-1 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M7 7l5 5-5 5"/>
            </svg>
            <a href="/struktur" class="hover:text-blue-400 transition">Struktur BEM</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 mt-1 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M7 7l5 5-5 5"/>
            </svg>
            <a href="/pemilu" class="hover:text-blue-400 transition">Pemilu</a>
          </li>
        </ul>
      </div>

      <!-- Kementrian -->
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Kementrian</h4>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-3 text-slate-400">
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 1</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 2</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 3</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 4</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 5</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 6</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 7</a></li>
          <li><a href="#" class="hover:text-blue-400 transition">Kementrian 8</a></li>
        </ul>
      </div>

      <!-- Informasi BEM -->
      <div>
        <h4 class="text-lg font-semibold text-white mb-4">Informasi BEM</h4>
        <p class="text-sm text-slate-400 mb-4">
          Dapatkan informasi terbaru seputar kegiatan BEM, event kampus, dan pengumuman penting langsung di website ini.
        </p>

        <form id="saranForm" class="flex gap-2">
          <input id="saranInput" type="text" required placeholder="Tulis saran atau pertanyaan kamu"
                 class="w-full px-4 py-2 rounded-md bg-transparent border border-slate-700 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <button type="submit" class="px-4 py-2 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Kirim</button>
        </form>

        <p id="saranMsg" class="mt-3 text-sm text-emerald-400 hidden">Terima kasih! Saran kamu sudah terkirim (dummy).</p>
      </div>
    </div>

    <!-- Divider -->
    <div class="border-t border-slate-800 mt-10 pt-6">
      <div class="flex flex-col md:flex-row items-center justify-between gap-3">
        <p class="text-sm text-slate-500">© 2025 BEM Universitas Harapan Bangsa — All Rights Reserved</p>
        <p class="text-sm text-slate-500">Designed by <span class="text-amber-500">Ragil & Team</span></p>
      </div>
    </div>
  </div>

  <!-- Back to top button -->
  <button id="backToTop" class="fixed bottom-6 right-6 bg-amber-500 text-white p-3 rounded-lg shadow-lg hover:bg-amber-600 hidden z-50" title="Back to top">
    <i data-lucide="arrow-up" class="w-5 h-5"></i>
  </button>
</footer>

<!-- scripts -->
<script>
  if (window.lucide) lucide.createIcons();

  // Smooth scroll ke footer
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
      }
    });
  });

  // Dummy kirim saran
  document.getElementById('saranForm').addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('saranMsg').classList.remove('hidden');
    setTimeout(()=> document.getElementById('saranMsg').classList.add('hidden'), 4000);
    this.reset();
  });

  // Tombol back to top
  const backBtn = document.getElementById('backToTop');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) backBtn.classList.remove('hidden');
    else backBtn.classList.add('hidden');
  });
  backBtn.addEventListener('click', ()=> window.scrollTo({top:0, behavior:'smooth'}));
</script>
