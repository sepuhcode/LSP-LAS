@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <style>
        #slider-section * {
            margin: 0;
        }

        #slider-section {
            /* height: 600px; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #slider-section .container {
            /* width: 1600px; */
            margin: auto;
        }

        #slider-section .subcontainer {
            width: 85%;
            margin: auto;
        }

        #slider-section .slider-wrapper {
            position: relative;
        }

        #slider-section .previous,
        #slider-section .next {
            padding: 2px;
            width: 30px;
            cursor: pointer;
            border-radius: 50%;
            outline: none;
            transition: 0.7s ease-in-out;
            border: 3px solid white;
            background-color: #1a1a1a;
            box-shadow: 0 0 5px #bbb;
            position: absolute;
            top: 50%;
        }

        #slider-section .previous {
            left: 2%;
        }

        #slider-section .next {
            right: 2%;
        }

        #slider-section .previous:hover,
        #slider-section .next:hover {
            border: 3px solid gray;
        }

        #slider-section #controls i {
            color: white;
            font-size: 1rem;
        }

        #slider-section .tns-nav {
            text-align: right;
        }

        #slider-section .tns-nav button {
            border: black 1px solid;
            padding: 8px;
            border-radius: 50%;
            background-color: white;
            margin-left: 15px;
        }

        #slider-section .tns-nav .tns-nav-active {
            background-color: gray;
        }

        /* DYNAMIC HTML */

        #slider-section .slide {
            width: auto;
            height: fit-content;
        }

        #slider-section .slide img {
            width: 100%;
            height: 200px;
        }

        @media(max-width:1600px) {
            #slider-section .container {
                width: 100%;
            }
        }

        .main-text {
            margin-left: 40px;
        }

        @media (max-width: 576px) {
            .main-text {
                margin-top: 0px;
                margin-left: 0px;
                text-align: center;
            }
        }

        .visi-misi-title {
            color: red;
            font-weight: bold;
            font-size: 30pt;
        }

        .visi-misi-text {
            width: 50%;
            font-weight: bold;
            margin: 20px auto;
            font-size: 20px;
            color: #7b7b7b;
        }

        .accordion-home {
            width: 50%;
        }

        .icon-home1 {
            margin: 80px 0 0 -300px;
            width: 453px;
            height: 453px;
            z-index: 1;
        }

        .icon-home2 {
            top: 0px;
            left: -200px;
            width: 553px;
            height: 309px;
            margin-top: -750px;
            z-index: 2;
            position: relative;
        }

        .icon-home3 {
            margin: -380px 0 0 -470px;
            width: 553px;
            height: 309px;
            position: relative;
            z-index: 3;
        }

        #div-tuk {
            background-color: #EFEFEF;
            padding: 30px 0;
        }

        .tuk-box {
            border-radius: 35px;
            box-shadow: 0px 11px 21px 1px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 0px 11px 21px 1px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 11px 21px 1px rgba(0, 0, 0, 0.25);
        }

        .tuk-box-img {
            border: 3px #d9d9d9 solid;
        }
        .tuk {
            padding: 10px;
            background-color: #FEFEFE;
            color: #FF2F2F;
            font-weight: bold;
        }
        .tuk * {
            cursor: pointer;
        }

        .tuk:first-child {
            border-radius: 35px 0px 0px 35px;
            border-right: 4px #efefef solid;
            padding-left: 13px;
        }

        .tuk:last-child {
            border-radius: 0px 35px 35px 0px;
            border-left: 4px #efefef solid;
            padding-right: 13px;
        }

        .tuk:hover {
            background-color: #FF2F2F;
            color: #FEFEFE;
        }

        .text-home-center {
            margin-left: 150px;
            margin-top: 80px;
            font-weight: bold;
            font-size: 40pt;
            color: red;
            margin-bottom: 70px;
        }
        .text-home-center-p {
            margin-top: 20px;
            margin-left: 150px;
            font-weight: bold;
            font-size: 20pt;
            margin-bottom: 30px;
            color: #7b7878
        }

        .icon-home-bnsp {
            display: inline-block;
            margin-left: 150px;
            margin-right: 70px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .icon-home-api {
            display: inline-block;
        }

        .slider-wrapper h1{
            font-size: 34pt;
        }

        @media (max-width: 576px) {

            #div-tuk {
                padding: 10px 0;

            }

            .tuk {
                height: 50px;
            }

            .tuk h2 {
                font-size: 10pt;
                margin-bottom: 0px;
            }

            .tuk p {
                font-size: 7pt;
            }

            #gambar-home-las {
                overflow: hidden;
            }

            .icon-home1 {
                margin: 70px 0 0 130px;
                width: 150px;
                height: 150px;
            }

            .icon-home2 {
                margin: -360px 0 -100px 360px;
                width: 200px;
                height: 100px;
                /* position: relative; */
            }

            .icon-home3 {
                margin: -150px 0 0 55px;
                width: 200px;
                height: 100px;
                /* position: relative; */
            }

            .icon-home-bnsp {
                margin: 5px 30px 20px 20px;
            }

            .visi-misi-text {
                width: 95%;
                font-size: 10pt;
                margin: 10px;
            }

            .visi-misi-title {
                font-size: 12pt;
            }

            .accordion-home {
                margin: 10px 0 10px 0;
                width: 90%;
                font-size: 10pt;
            }

            .fw-semibold {
                font-size: 10pt;
            }

            .image-accordion {
                position: relative;
                content-visibility: hidden;
                /* Sesuaikan lebar gambar sesuai kebutuhan Anda */
            }

            .text-home-center {
                margin-top: 20px;
                margin-left: 0px;
                margin-bottom: 20px;
                text-align: center;
                font-size: 12pt;
            }

            .text-home-center-p {
                margin-top: 0px;
                margin-left: 0px;
                text-align: center;
                font-size: 10pt;
            }

            .slider-wrapper h1{
            font-size: 12pt;
        }
        }
    </style>
@endpush

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators mx-auto">
            @foreach ($carousels as $carousel)
                @if ($loop->iteration == 1)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                @else
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $loop->iteration - 1 }}" aria-label="Slide {{ $loop->iteration }}"></button>
                @endif
            @endforeach
        </div>
        <div class="carousel-inner">
            @forelse ($carousels as $carousel)
                <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                    <img src="{{ asset('Images/carousel-img/' . $carousel->image) }}" class="d-block w-100" alt="...">
                </div>
            @empty
                <div class="carousel-item active">
                    <img src="{{ asset('Images/Content-Dashboard1.png') }}" class="d-block w-100" alt="dashboard image">
                </div>
            @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M28.5 57C44.2398 57 57 44.2398 57 28.5C57 12.7602 44.2398 0 28.5 0C12.7602 0 0 12.7602 0 28.5C0 44.2398 12.7602 57 28.5 57ZM34.2181 37.0319C34.6901 37.5205 34.9512 38.175 34.9453 38.8543C34.9394 39.5336 34.667 40.1835 34.1866 40.6638C33.7062 41.1442 33.0564 41.4167 32.377 41.4226C31.6977 41.4285 31.0432 41.1674 30.5546 40.6954L20.191 30.3318C19.7052 29.8459 19.4324 29.187 19.4324 28.5C19.4324 27.813 19.7052 27.1541 20.191 26.6682L30.5546 16.3046C31.0432 15.8326 31.6977 15.5715 32.377 15.5774C33.0564 15.5833 33.7062 15.8558 34.1866 16.3362C34.667 16.8165 34.9394 17.4664 34.9453 18.1457C34.9512 18.825 34.6901 19.4795 34.2181 19.9681L25.6863 28.5L34.2181 37.0319Z"
                    fill="#ED1C24" />
            </svg>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M28.5 0C12.7602 0 0 12.7602 0 28.5C0 44.2398 12.7602 57 28.5 57C44.2398 57 57 44.2398 57 28.5C57 12.7602 44.2398 0 28.5 0ZM22.7819 19.9681C22.3099 19.4795 22.0488 18.825 22.0547 18.1457C22.0606 17.4664 22.333 16.8165 22.8134 16.3362C23.2938 15.8558 23.9436 15.5833 24.623 15.5774C25.3023 15.5715 25.9568 15.8326 26.4454 16.3046L36.809 26.6682C37.2948 27.1541 37.5676 27.813 37.5676 28.5C37.5676 29.187 37.2948 29.8459 36.809 30.3318L26.4454 40.6954C25.9568 41.1674 25.3023 41.4285 24.623 41.4226C23.9436 41.4167 23.2938 41.1442 22.8134 40.6638C22.333 40.1835 22.0606 39.5336 22.0547 38.8543C22.0488 38.175 22.3099 37.5205 22.7819 37.0319L31.3137 28.5L22.7819 19.9681Z"
                    fill="#ED1C24" />
            </svg>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row m-0 justify-content-center" id="div-tuk">
        <div class="col-10 col-md-4">
            <div class="row justify-content-center text-center p-0 tuk-box">
                <div class="tuk col-4">
                    <h2>18K+</h2>
                    <p>Sertifikat Terbit</p>
                </div>
                <div class="tuk col-4">
                    <h2>{{ count($tuks) }}</h2>
                    <p>TUK Aktif</p>
                </div>
                <div class="tuk col-4">
                    <h2>{{ $skema }}</h2>
                    <p>Skema Sertifikasi</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center p-0" style="width: 80%">
            {{-- @foreach ($tuks as $tuk)
                <div class="col-2 p-3">
                    <div class="tuk-box-img">
                        <img width="100%" height="135px" src="{{ asset('Images/tuk-img/' . $tuk->image) }}" />
                    </div>
                </div>
            @endforeach --}}
            <div class="col-lg-2 col-4 p-3 ">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
            <div class="col-lg-2 col-4 p-3">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
            <div class="col-lg-2 col-4 p-3">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
            <div class="col-lg-2 col-4 p-3 ">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
            <div class="col-lg-2 col-4 p-3">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
            <div class="col-lg-2 col-4 p-3">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
        </div>
        <div class="row justify-content-center p-0" style="width: 80%">
            <div class="col-lg-2 col-4 p-3">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
            <div class="col-lg-2 col-4 p-3">
                <div class="tuk-box-img">
                    <img width="100%" height="100%" src="{{ asset('Images/tuk-img/tuk1705123689.png') }}" />
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="row p-0 m-0">
        <div class="col-lg-8 col-sm-4 main-text">
            <p class="text-home-center">Lembaga Sertifikasi Profesi - LAS</p>
            <p class="text-home-center-p">Lembaga sertifikasi untuk profesi <br>
                pengelasan yang didirikan oleh Asosiasi <br>
                Pengelasan Indonesia dan Terlisensi oleh <br>
                Badan Nasional Sertifikasi Profesi.</p>
            <div class="icon-home-bnsp"><img src="{{ asset('Images/bnsp pendaftaran.png') }}" /></div>
            <div class="icon-home-api"><img src="{{ asset('Images/api pendaftaran.png') }}" /></div>
        </div>
        <div class="col-lg-3 col-sm-4" id="gambar-home-las">
            <img class="icon-home1" src="{{ asset('Images/lingkaran1.png') }}" />
            <img class="icon-home2" src="{{ asset('Images/las2.png') }}" />
            <img class="icon-home3" src="{{ asset('Images/las3.png') }}" />
        </div>
    </div>

    <div class="row px-0 py-2 m-0" style="background-color: #EFEFEF">
        <div class="col-12 text-center">
            <h1 class="visi-misi-title">Visi Misi LSP LAS</h1>
            <h2 class="visi-misi-text">
                Menjadi satu – satunya Lembaga Sertifikasi Profesi Pengelasan di Indonesia yang memiliki Kompetensi
                Nasional
                dan Internasional untuk menghasilkan tenaga – tenaga pengelasan yang berkualifikasi Nasional dan
                Internasional.
            </h2>
        </div>
        <div class="row mx-auto accordion-home">
            <div class="col-md-7">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-accordion" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="fw-semibold">Mampu Bersaing</span>
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
                            <button class="accordion-button collapsed bg-accordion " type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <span class="fw-semibold">
                                    Mengikuti Perkembangan Internasional
                                </span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse bg-accordion"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                            <button class="accordion-button bg-accordion collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <span class="fw-semibold">
                                    Membina Tempat Uji Kompetensi
                                </span>
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
                            <button class="accordion-button bg-accordion collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                <span class="fw-semibold">
                                    Menjalin Hubungan Komunikasi Yang Intens dengan Stake Holder dan Lembaga
                                </span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse bg-accordion"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                </div>
            </div>
            <div class="col-md-5">
                <div class="image-accordion">
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-auto px-0 py-5 m-0" style="width: 80%; ">
        <div class="col-12">
            <section id="slider-section">
                <div class="container">
                    <div class="subcontainer">
                        <div class="slider-wrapper">
                            <h1 class="fw-semibold text-center" style="color: red">Tim Kami</h1>
                            <br>
                            <div class="slider"></div>
                            <div id="controls">
                                <button class="previous"><i class="fas fa-angle-left"></i></button>
                                <button class="next"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <script>
        // begin accordion
        const imageContainer = document.querySelector(".image-accordion");

        // show image after load dom
        $(document).ready(function() {
            const imageUrl = "{{ asset('Images/mampu-bersaing.png') }}";
            const imgElement = document.createElement("img");
            imgElement.src = imageUrl;
            imgElement.classList.add("img-fluid");
            imgElement.alt = `Image for Accordion Item #1`;

            imageContainer.innerHTML = "";
            imageContainer.appendChild(imgElement);
            imageContainer.style.display = "block";
        });

        // show image in accordion after click
        const accordionItems = document.querySelectorAll(".accordion-item");

        accordionItems.forEach((item, index) => {
            const button = item.querySelector(".accordion-button");
            const images = [
                "{{ asset('Images/mampu-bersaing.png') }}",
                "{{ asset('Images/mengikuti-perkembangan.png') }}",
                "{{ asset('Images/membina-tempat.png') }}",
                "{{ asset('Images/menjalin hub.png') }}",
            ];

            button.addEventListener("click", () => {
                const imageUrl = images[index];
                const imgElement = document.createElement("img");
                imgElement.src = imageUrl;
                imgElement.classList.add("img-fluid");
                imgElement.alt = `Image for Accordion Item #${index + 1}`;

                imageContainer.innerHTML = "";
                imageContainer.appendChild(imgElement);
                imageContainer.style.display = "block";
            });
        });
        // end accordion


        // carousel image about us
        const slider = document.querySelector("#slider-section .slider");
        const imagesObject = JSON.parse('<?= json_encode($karyawans) ?>');

        window.addEventListener("load", initializeSlider());

        function initializeSlider() {
            let images = "";
            for (let image in imagesObject) {
                images += `<div class="slide">
                    <img src="{{ asset('Images/our-team/${imagesObject[image].image}') }}"
                        alt="image">
                    <br><br>
                    <div>
                        <p><strong>${imagesObject[image].name}</strong></p>
                        <p>${imagesObject[image].department}</p>
                    </div>
                    </div>`
            }
            slider.innerHTML = images;
        }

        const tnslider = tns({
            container: '#slider-section .slider',
            autoWidth: true,
            gutter: 50,
            slideBy: 1,
            speed: 400,
            controlsContainer: '#slider-section #controls',
            prevButton: '#slider-section .previous',
            nextButton: '#slider-section .next',
            nav: false
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const steps = document.querySelectorAll('.step');

            steps.forEach(step => {
                step.addEventListener('mouseover', () => {
                    step.style.transform = 'translateY(-10px)';
                    step.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.2)';
                });

                step.addEventListener('mouseout', () => {
                    step.style.transform = 'translateY(0)';
                    step.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
                });
            });
        });
    </script>
@endpush
