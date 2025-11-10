{{-- resources/views/welcome.blade.php --}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>BEM Universitas Harapan Bangsa</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    body { font-family: 'Poppins', sans-serif; }
    h1,h2,h3,.font-title { font-family: 'Montserrat', sans-serif; }

    .menu-link {
      position: relative;
      font-size: 17px;
      transition: color .18s ease, transform .18s cubic-bezier(.2,.9,.3,1);
    }
    .menu-link::after {
      content: "";
      position: absolute;
      left: 0; bottom: -8px;
      height: 4px; width: 0%;
      background: #fcca1b; border-radius: 3px;
      transition: width .26s cubic-bezier(.2,.9,.3,1);
      box-shadow: 0 6px 18px rgba(252,202,59,0.12);
    }
    .menu-link:hover::after, .menu-link.active::after { width: 100%; }
    .menu-link:hover { transform: translateY(-4px); color: #fcca1b !important; }
    .menu-link.active { color: #fcca1b !important; transform: translateY(-4px); }

    #navbar { transition: all 0.3s ease; }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

{{-- NAVBAR --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 text-white transition-all duration-300">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

    <!-- Brand -->
    <a href="/" class="flex items-center gap-3">
      <img src="{{ asset('images/logobem.png') }}" alt="Logo BEM" class="h-10 w-10 object-contain">
      <span id="brandName" class="text-xl font-extrabold tracking-wide">BEM UHB Official Website</span>
    </a>

    <!-- Menu -->
    <ul id="menuList" class="hidden md:flex items-center gap-8 text-base font-semibold">
      <li><a href="/" class="menu-link" data-menu="home">Home</a></li>
      <li><a href="{{ route('event') }}" class="menu-link" data-menu="event">Event</a></li>

      <!-- Dropdown Kementrian -->
      <li class="relative group" data-parent="kementrian">
        <a href="#" class="menu-link flex items-center gap-1" data-menu="kementrian">Kementrian
          <i data-lucide="chevron-down" class="w-4 h-4"></i>
        </a>
        <ul class="absolute left-0 mt-2 w-52 bg-white shadow-lg rounded-lg opacity-0 scale-y-95 pointer-events-none
                   group-hover:opacity-100 group-hover:scale-y-100 group-hover:pointer-events-auto
                   transition-all duration-300 ease-in-out origin-top">
          @for ($i=1;$i<=8;$i++)
            <li><a href="/kementrian/{{ $i }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 submenu-link" data-parent="kementrian">Kementrian {{ $i }}</a></li>
          @endfor
        </ul>
      </li>

      <li><a href="#footer" class="menu-link" data-menu="kontak">Kontak</a></li>

      <!-- Dropdown Lainnya -->
      <li class="relative group" data-parent="lainnya">
        <a href="#" class="menu-link flex items-center gap-1" data-menu="lainnya">Lainnya
          <i data-lucide="chevron-down" class="w-4 h-4"></i>
        </a>
        <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg
                    opacity-0 translate-y-1 pointer-events-none
                    group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto
                    transition-all duration-200 origin-top-right">
          <div class="p-2">
            <a href="/struktur" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm text-slate-700 submenu-link" data-parent="lainnya">Struktur BEM</a>
            <a href="/pemilu" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm text-slate-700 submenu-link" data-parent="lainnya">Pemilu</a>
          </div>
        </div>
      </li>
    </ul>

    <!-- Auth Area -->
    @auth
      <div class="relative">
        <button id="userButton" class="flex items-center justify-center w-11 h-11 rounded-full bg-yellow-400 hover:bg-yellow-500 transition">
          <i data-lucide="user" class="w-6 h-6 text-white"></i>
        </button>
        <div id="userDropdown" class="absolute right-0 mt-3 w-56 bg-white rounded-lg shadow-lg hidden transition-all duration-200 z-50">
          <div class="px-4 py-3 border-b text-gray-700 text-sm">
            <p class="font-semibold">{{ Auth::user()->name ?? 'User' }}</p>
            <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
          </div>
          <form method="POST" action="{{ route('logout') }}" class="p-2"
            onsubmit="event.preventDefault(); this.submit(); setTimeout(()=>window.location.href='{{ url('/') }}', 400)">
            @csrf
            <button type="submit"
              class="w-full text-left px-3 py-2 rounded hover:bg-gray-100 text-sm text-gray-700 flex items-center gap-2">
              <i data-lucide="log-out" class="w-4 h-4"></i> Logout
            </button>
          </form>
        </div>
      </div>
    @else
      <a id="loginBtn" href="{{ route('login') }}" 
         class="px-6 py-2.5 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-base font-bold shadow-md transition transform hover:scale-105">
        Login
      </a>
    @endauth
  </div>
</nav>

{{-- SCRIPT --}}
<script>
  const navbar = document.getElementById('navbar');
  const menuLinks = document.querySelectorAll('.menu-link');
  const submenuLinks = document.querySelectorAll('.submenu-link');
  const loginBtn = document.getElementById('loginBtn');
  const userButton = document.getElementById('userButton');
  const userDropdown = document.getElementById('userDropdown');

  // === USER DROPDOWN ===
  if (userButton) {
    userButton.addEventListener('click', (e) => {
      e.stopPropagation();
      userDropdown.classList.toggle('hidden');
    });
    window.addEventListener('click', (e) => {
      if (!userButton.contains(e.target)) userDropdown.classList.add('hidden');
    });
  }

  // === SCROLL NAVBAR STYLE ===
  function onScroll() {
    if (window.scrollY > 50) {
      navbar.classList.remove('text-white');
      navbar.classList.add('bg-white', 'text-blue-800', 'shadow-md');
      menuLinks.forEach(link => link.classList.replace('text-white', 'text-blue-800'));
      if (loginBtn) loginBtn.classList.replace('bg-gradient-to-r', 'bg-blue-700');
    } else {
      navbar.classList.remove('bg-white', 'text-blue-800', 'shadow-md');
      navbar.classList.add('text-white');
      menuLinks.forEach(link => link.classList.replace('text-blue-800', 'text-white'));
      if (loginBtn) loginBtn.classList.replace('bg-blue-700', 'bg-gradient-to-r');
    }
  }
  window.addEventListener('scroll', onScroll);

  // === MENU AKTIF OTOMATIS ===
  function setActiveMenu() {
    const path = window.location.pathname.replace(/\/$/, ""); 
    const hash = window.location.hash;

    // Reset
    menuLinks.forEach(link => link.classList.remove('active'));
    submenuLinks.forEach(link => link.classList.remove('active'));

    // --- HOME / DASHBOARD ---
    if (path === "" || path === "/" || path.includes("/dashboard")) {
      document.querySelector('[data-menu="home"]').classList.add('active');
    }

    // --- EVENT ---
    if (path.includes("/event")) {
      document.querySelector('[data-menu="event"]').classList.add('active');
    }

    // --- KEMENTRIAN ---
    if (path.includes("/kementrian")) {
      document.querySelector('[data-menu="kementrian"]')?.classList.add('active');
    }

    // --- LAINNYA ---
    if (path.includes("/struktur") || path.includes("/pemilu")) {
      document.querySelector('[data-menu="lainnya"]')?.classList.add('active');
    }

    // --- KONTAK ---
    if (hash === "#footer") {
      document.querySelector('[data-menu="kontak"]').classList.add('active');

      // Tambahan: tetap aktifkan menu utama yang sedang dibuka
      if (path === "" || path === "/" || path.includes("/dashboard")) {
        document.querySelector('[data-menu="home"]').classList.add('active');
      } 
      if (path.includes("/kementrian")) {
        document.querySelector('[data-menu="kementrian"]').classList.add('active');
      } 
      if (path.includes("/event")) {
        document.querySelector('[data-menu="event"]').classList.add('active');
      } 
      if (path.includes("/struktur") || path.includes("/pemilu")) {
        document.querySelector('[data-menu="lainnya"]').classList.add('active');
      }
    }
  }

  document.addEventListener("DOMContentLoaded", () => {
    onScroll();
    setActiveMenu();
    lucide.createIcons();
  });

  window.addEventListener("hashchange", setActiveMenu);
</script>

</body>
</html>
