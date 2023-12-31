<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white">
    <div class="container-fluid" style="width: 80%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-3 py-md-0" id="navbarNav">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/LogoLAS.png') }}" width="120px"></a>
            <ul class="navbar-nav ms-auto me-5 fw-bold gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cari/sertifikat') ? 'active' : '' }}" href="{{ route('sertifikat') }}">Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pendaftaran/*') ? 'active' : '' }}" href="#">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about/*') ? 'active' : '' }}" href="#">About</a>
                </li>
            </ul>
        </div>
        <div class="auth-section">
            @guest
                <a class="btn nav-link btn-primary" href="{{ url('/login') }}">Login</a>
            @endguest
            @auth
                <a class="btn nav-link btn-primary" href="{{ url('/logout') }}">Logout</a>
            @endauth
        </div>
    </div>
</nav>
