<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="#" class="navbar-brand"><img src="{{ asset('images/LogoLAS.png') }}" class="logo" width="70%" height="70%"></a>
            <ul class="navbar-nav ms-auto"> <!-- Gunakan ml-auto untuk menggeser ke kanan -->
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> jangan dikasih class active dulu -->
                    {{-- <a class="nav-link" id="active" aria-current="page" href="/">Home</a> --}}
                    {{-- <a class="nav-link" id="{{ Request::is('/home') ? 'active':'' }}" aria-current="page" href="/home">Home</a> --}}
                    <a class="nav-link {{ Request::is('home') ? 'active-red':'' }}"  aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sertifikasi.html">Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    {{-- <button class="btn btn-outline-danger btn-login" type="submit">Login</button> --}}
                    @guest
                    <a class="btn btn-outline-danger btn-login active" href="/login">Login</a>
                    @endguest
                    @auth
                    <a class="btn btn-outline-danger btn-login active" href="/logout">Logout</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
