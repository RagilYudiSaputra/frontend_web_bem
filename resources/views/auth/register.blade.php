{{-- resources/views/auth/register.blade.php --}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Daftar Akun | BEM Universitas Harapan Bangsa</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Roboto:wght@300;400;500&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --bem-main: #0E294B;   /* Biru Dongker */
      --bem-accent: #FFC300; /* Kuning Emas */
      --bem-bg: #f9fafb;
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

    .register-card {
      background: #ffffff;
      width: 100%;
      max-width: 480px;
      padding: 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      text-align: center;
    }

    .register-card img {
      width: 80px;
      margin: 0 auto 0.6rem auto;
    }

    .register-card h2 {
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--bem-main);
      margin-bottom: 0.4rem;
    }

    .register-card p {
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

    .register-btn {
      width: 100%;
      background-color: var(--bem-main);
      color: white;
      padding: 10px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1rem;
      transition: background-color 0.3s, transform 0.2s;
    }

    .register-btn:hover {
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
  <div class="register-card">
    <img src="{{ asset('images/logobem.png') }}" alt="Logo BEM">
    <h2 class="font-title">Buat Akun Baru</h2>
    <p>Bergabung dengan Sistem Informasi BEM Universitas Harapan Bangsa</p>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Name -->
      <div class="input-group mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9.964 9.964 0 0112 15c2.29 0 4.39.77 6.121 2.053" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2z" />
        </svg>
        <input id="name" type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required autofocus autocomplete="name">
        @error('name')
          <p class="text-red-500 text-sm mt-1 text-left">{{ $message }}</p>
        @enderror
      </div>

      <!-- Email -->
      <div class="input-group mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8-4H8m8 8H8m12 4H4a2 2 0 01-2-2V6a2 2 0 012-2h16a2 2 0 012 2v12a2 2 0 01-2 2z" />
        </svg>
        <input id="email" type="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}" required autocomplete="username">
        @error('email')
          <p class="text-red-500 text-sm mt-1 text-left">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div class="input-group mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75A4.5 4.5 0 007.5 6.75V10.5M4.5 10.5H19.5V18.75A2.25 2.25 0 0117.25 21H6.75A2.25 2.25 0 014.5 18.75V10.5z" />
        </svg>
        <input id="password" type="password" name="password" placeholder="Kata Sandi" required autocomplete="new-password">
        @error('password')
          <p class="text-red-500 text-sm mt-1 text-left">{{ $message }}</p>
        @enderror
      </div>

      <!-- Confirm Password -->
      <div class="input-group mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9.964 9.964 0 0112 15c2.29 0 4.39.77 6.121 2.053" />
        </svg>
        <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
        @error('password_confirmation')
          <p class="text-red-500 text-sm mt-1 text-left">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="register-btn">Daftar</button>

      <div class="footer-links">
        <p>Sudah punya akun?
          <a href="{{ route('login') }}">Masuk Sekarang</a>
        </p>
      </div>
    </form>
  </div>
</body>
</html>
