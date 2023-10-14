<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP-WEB</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- sweetalert2 --}}
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css " rel="stylesheet">
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js "></script>
</head>

<body>
    {{-- @dd(request()->session()->get('failed')) --}}
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a href="#" class="navbar-brand"><img src="{{ asset('Images/LogoLAS.png') }}" class="logo"
                        width="70%" height="70%"></a>
                <ul class="navbar-nav ms-auto"> <!-- Gunakan ml-auto untuk menggeser ke kanan -->
                    <li class="nav-item">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> jangan dikasih class active dulu -->
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sertifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators" id="test">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('Images/Content-Dashboard.png') }}" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Images/Content-Dashboard.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Images/Content-Dashboard.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="line-with-text">
        <hr>
        <div class="text">Cari Data Sertifikasi</div>
        <hr>
    </div>
    <div class="search-container">
        <!-- Kolom pencarian -->
        <form action="{{ route('cari.sertifikat') }}" method="POST">
            @csrf
            <input name="keyword" type="text" class="search-box" placeholder="Cari nomor sertifikasi">
            <!-- Tombol pencarian -->
            <button class="search-button" type="submit"> <i data-feather="search"></i></button>
        </form>
        <div class="table-size">
            <img src="{{ asset('Images/Logo-LSP-3.png') }}" alt="logo LSP">
            <table class="table table-bordered rounded" style="margin-top: 3%;">
                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        @if (empty($sertifikat))
                            <td>{{ ' ' }}</td>
                        @else
                            <td>{{ $sertifikat[0]->nama }}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="row">No. Sertifikasi</th>
                        @if (empty($sertifikat))
                            <td>{{ ' ' }}</td>
                        @else
                            <td>{{ $sertifikat[0]->no_sertifikat }}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="row">Asesor</th>
                        @if (empty($sertifikat))
                            <td>{{ ' ' }}</td>
                        @else
                            <td>{{ $sertifikat[0]->asesor }}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="row">Skema</th>
                        @if (empty($sertifikat))
                            <td>{{ ' ' }}</td>
                        @else
                            <td>{{ $sertifikat[0]->skema_sertifikasi }}</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="row">Berlaku Sampai</th>
                        @if (empty($tglBerlaku))
                            <td>{{ ' ' }}</td>
                        @else
                            <td> {{ date_format($tglBerlaku, 'd-m-Y') }} </td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>

    </div>

    @if (request()->session()->has('failed'))
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Data tidak ditemukan',
                icon: 'error',
                confirmButtonText: 'Close'
            })
        </script>
        request()->session()->flush();
    @endif

    

    <!-- Tambahkan tautan ke file JavaScript Bootstrap 5 (Popper.js harus dimuat sebelum Bootstrap.js) -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        feather.replace();
    </script>

</body>

</html>
