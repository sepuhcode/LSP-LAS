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
                    <a class="nav-link" id="active" aria-current="page" href="#">Home</a>
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
                    <button class="btn btn-outline-danger btn-login" type="submit">Login</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
