<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap 5</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/CSS/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a href="#"><img src="/assets/Images/LogoLAS.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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
                <img src="/assets/Images/Content-Dashboard.png" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/Images/Content-Dashboard.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/Images/Content-Dashboard.png" class="d-block w-100" alt="...">
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
        <input type="text" class="search-box" placeholder="Cari nomor sertifikasi">

        <!-- Tombol pencarian -->
        <button class="search-button"> <i data-feather="search"></i></button>
        <div class="table-size">
            <table class="table table-bordered" style="margin-top: 3%;">
                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <th scope="row">No. Sertifikasi</th>
                        <td>2017728361726</td>
                    </tr>
                    <tr>
                        <th scope="row">Asesor</th>
                        <td>ahwdvwhdvhavh</td>
                    </tr>
                    <tr>
                        <th scope="row">Skema</th>
                        <td>Plate Walder</td>
                    </tr>
                    <tr>
                        <th scope="row">Berlaku Sampai</th>
                        <td>20/09/2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>

    </div>
    <!-- Tambahkan tautan ke file JavaScript Bootstrap 5 (Popper.js harus dimuat sebelum Bootstrap.js) -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>feather.replace();</script>

</body>

</html>