{{-- resources/views/auth/login.blade.php --}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login | BEM Universitas Harapan Bangsa</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Roboto:wght@300;400;500&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --bem-main: #0E294B;   /* Biru Dongker */
      --bem-accent: #FFC300; /* Kuning Emas */
      --bem-bg: #f9fafb;     /* Latar belakang terang */
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bem-bg);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    h1, h2, .font-title {
      font-family: 'Montserrat', sans-serif;
    }

    .login-card {
      background: #ffffff;
      width: 100%;
      max-width: 480px;
      padding: 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      text-align: center;
    }

    .login-card img {
      width: 80px;
      margin: 0 auto 0.6rem auto;
    }

    .login-card h2 {
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--bem-main);
      margin-bottom: 0.4rem;
    }

    .login-card p {
      color: #555;
      font-size: 0.95rem;
      margin-bottom: 1.3rem;
    }

    .input-group {
      position: relative;
    }

    .input-group input {
      width: 100%;
      padding: 11px 14px 11px 40px;
      border: 2px solid #d1d5db;
      border-radius: 8px;
      font-size: 0.95rem;
      transition: all 0.2s;
    }

    .input-group svg {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      width: 18px;
      height: 18px;
      color: var(--bem-main);
    }

    .input-group input:focus {
      border-color: var(--bem-main);
      outline: none;
    }

    .login-btn {
      width: 100%;
      background-color: var(--bem-main);
      color: white;
      padding: 10px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1rem;
      transition: background-color 0.3s, transform 0.2s;
    }

    .login-btn:hover {
      background-color: var(--bem-accent);
      color: var(--bem-main);
      transform: translateY(-2px);
    }

    .footer-links {
      margin-top: 0.8rem;
      font-size: 0.9rem;
    }

    .footer-links a {
      color: var(--bem-main);
      font-weight: 500;
      text-decoration: none;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-card">
    <img src="{{ asset('images/logobem.png') }}" alt="Logo BEM">
    <h2 class="font-title">Selamat Datang</h2>
    <p>Masuk ke akun BEM Universitas Harapan Bangsa</p>

    @if (session('status'))
      <div class="mb-3 text-green-600 text-sm">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="input-group mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8-4H8m8 8H8m12 4H4a2 2 0 01-2-2V6a2 2 0 012-2h16a2 2 0 012 2v12a2 2 0 01-2 2z" />
        </svg>
        <input id="email" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
        @error('email')
          <p class="text-red-500 text-sm mt-1 text-left">{{ $message }}</p>
        @enderror
      </div>

      <div class="input-group mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9.964 9.964 0 0112 15c2.29 0 4.39.77 6.121 2.053" />
        </svg>
        <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
        @error('password')
          <p class="text-red-500 text-sm mt-1 text-left">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex justify-between items-center mb-3">
        <label class="flex items-center text-sm text-gray-600">
          <input type="checkbox" name="remember" class="mr-2 rounded border-gray-300">
          Ingat saya
        </label>

        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm text-blue-700 hover:underline">Lupa Password?</a>
        @endif
      </div>

      <button type="submit" class="login-btn">Login</button>

      <div class="footer-links">
        <p>Belum punya akun?
          <a href="{{ route('register') }}">Daftar Sekarang</a>
        </p>
      </div>
    </form>
  </div>
</body>
</html>
