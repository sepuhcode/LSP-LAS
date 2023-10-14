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
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a href="#" class="navbar-brand"><img src="../assets/Images/LogoLAS.png" class="logo" width="70%"
                        height="70%"></a>
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
                <img src="../assets/Images/Content-Dashboard.png" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/Images/Content-Dashboard.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/Images/Content-Dashboard.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    
    <!-- <img src=" ../assets/Images/lingkaransetkiri.png" class="logo-kiri"> -->
    
    <div class="line-with-text">
        <hr>
        <div class="text">Daftar TUK Mandiri Aktif</div>
        <hr>
    </div>
    
    <div class="logos">
        <div class="logos-slide">
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
        </div>
        <div class="logos-slide">
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
        </div>
    </div>
    
    <div class="logos-2">
        <div class="logos-slide-right">
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
        </div>
        <div class="logos-slide-right">
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
            <img src="../assets/Images/Patria.png" />
        </div>
    </div>
    
    <div class="line-with-text">
        <hr>
        <div class="text">Visi Misi LSP LAS</div>
        <hr>
    </div>
    <div>
        <div class="teks-2">Menjadi satu – satunya Lembaga Sertifikasi Profesi Pengelasan di Indonesia </div>
        <div class="teks-2">yang memiliki Kompetensi Nasional dan Internasional untuk menghasilkan </div>
        <div class="teks-2">tenaga – tenaga pengelasan yang berkualifikasi Nasional dan Internasional. </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-accordion" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Mampu Bersaing
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show bg-accordion"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Mampu bersaing adalah tentang
                                mengadopsi sikap proaktif dan adaptif
                                terhadap tantangan yang muncul di
                                lingkungan bisnis atau konteks apapun.
                                Ini melibatkan kombinasi dari kecerdasan
                                strategis, inovasi, dan kualitas eksekusi
                                yang kuat.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-accordion " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Mengikuti Perkembangan Internasional
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse bg-accordion" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Mengacu pada komitmen atau tujuan untuk
                                tetap terinformasi dan terlibat dalam
                                berbagai aspek yang terjadi di tingkat
                                global. Ini mencakup pemahaman mendalam
                                tentang tren, isu, dan peristiwa penting yang
                                mempengaruhi dunia secara khusus dunia
                                LAS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button bg-accordion collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Membina Tempat Uji Kompetensi
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse bg-accordion"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Bertujuan untuk menciptakan infrastruktur
                                yang mendukung pengembangan dan
                                pengakuan keterampilan atau kompetensi
                                individu. Hal ini memungkinkan mereka
                                untuk membuktikan kemampuan mereka
                                secara resmi dan meningkatkan peluang
                                dalam dunia kerja atau industri LAS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header " id="headingFour">
                            <button class="accordion-button bg-accordion collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Menjalin Hubungan Komunikasi Yang Intens dengan Stake Holder dan Lembaga
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse bg-accordion" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Visi ini menyoroti pentingnya
                                memprioritaskan hubungan yang baik
                                dengan semua pihak yang terlibat dalam
                                aktivitas atau proyek organisasi. Ini
                                menciptakan fondasi yang kuat untuk
                                keberlanjutan, pertumbuhan, dan
                                keberhasilan jangka panjang.
                            </div>
                        </div>
                    </div>
    
                    <!-- Add more accordion items as needed -->
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="image-container">
                    <!-- <img src="../assets/Images/lingkaransetkiri.png" alt="Image 1" class="img-fluid"> -->
                </div>
            </div>
    
    
            <div class="alur-pendaftaran line-with-text2 ">
                <hr>
                <div class="text2 ">Alur Pendaftaran</div>
                <hr>
            </div>
    
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script>
        // JavaScript untuk menampilkan gambar di luar accordion saat item di-klik
        const accordionItems = document.querySelectorAll(".accordion-item");
        const imageContainer = document.querySelector(".image-container");
    
        accordionItems.forEach((item, index) => {
            const button = item.querySelector(".accordion-button");
            const images = [
                "../assets/Images/accordion-image-1.png", // Gambar untuk Accordion Item #1
                "../assets/Images/accordion-image-2.png",
                "../assets/Images/accordion-image-3.png",
                "../assets/Images/accordion-image-4.png",
    
                // Gambar untuk Accordion Item #2
                // Tambahkan lebih banyak URL gambar sesuai dengan jumlah accordion items
            ];
    
            button.addEventListener("click", () => {
                const imageUrl = images[index];
                const imgElement = document.createElement("img");
                imgElement.src = imageUrl;
                imgElement.alt = `Image for Accordion Item #${index + 1}`;
    
                // Hapus gambar sebelumnya (jika ada) dan tambahkan gambar baru
                imageContainer.innerHTML = "";
                imageContainer.appendChild(imgElement);
                imageContainer.style.display = "block";
            });
        });
    </script>

</body>

</html>
