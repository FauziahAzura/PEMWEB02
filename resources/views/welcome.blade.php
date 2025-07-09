<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #67B26F, #4ca2cd);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .hero {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.25rem;
        }
        .btn-start {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 1.2rem;
        }
        .auth-buttons {
            position: absolute;
            top: 20px;
            right: 30px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <div class="auth-buttons">
        @guest
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
        @endguest
    </div>

    <div class="hero">
        <div>
            <h1>Selamat Datang di Aplikasi Puskesmas</h1>
            <p>Kelola data pasien, paramedik, dan pemeriksaan dengan mudah dan efisien.</p>
            <a href="{{ route('pasien.index') }}" class="btn btn-light btn-start">Mulai Akses Data</a>
        </div>

        @auth
        <div class="mt-4">
            <p class="fw-bold fs-4">Anda sudah login sebagai {{ Auth::user()->name }}</p>
        </div>
        @endauth
    </div>

    <footer>
        &copy; {{ date('Y') }} Aplikasi Puskesmas - STT Nurul Fikri
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
