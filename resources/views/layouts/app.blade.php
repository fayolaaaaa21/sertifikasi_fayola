<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi JWD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-pink { background-color: #ffb7db !important; }
        .btn-pink { background-color: #ffb3d6; color: white; border: none; }
        .btn-pink:hover { background-color: #ffbce0; color: white; }
        .card-pink { border-top: 4px solid #ff87c3; }
    </style>
</head>
<body class="bg-light">

    @auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-pink mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">Aplikasi Sertifikasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ route('skema.index') }}">Data Skema</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="{{ route('peserta.index') }}">Data Peserta</a></li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-outline-light btn-sm fw-bold" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    @endauth

    <div class="container pb-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>