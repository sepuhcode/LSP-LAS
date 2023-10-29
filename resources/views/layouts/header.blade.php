<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white">
    <div class="container-fluid" style="width: 80%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/LogoLAS.png') }}"
                    width="120px"></a>
            <ul class="navbar-nav ms-auto fw-bold">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page"
                        href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cari/sertifikat') ? 'active' : '' }}"
                        href="{{ route('cari.sertifikat') }}">Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pendaftaran/*') ? 'active' : '' }}"
                        href="#">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about/*') ? 'active' : '' }}" href="#">About</a>
                </li>
                <li class="nav-item">
                    @guest
                        <a class="btn nav-link btn-primary" href="/login">Login</a>
                    @endguest
                    @auth
                        <a class="btn nav-link btn-primary" href="/logout">Logout</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
