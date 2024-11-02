<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('Images/LogoLAS.png') }}" width="120px"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="margin-left: auto; margin-right: 0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page"
                        href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('sertifikat') ? 'active' : '' }}"
                        href="{{ route('sertifikat') }}">Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pendaftaran') ? 'active' : '' }}"
                        href="{{ route('pendaftaran') }}">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/login') }}">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/logout') }}">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
