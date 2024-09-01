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

        .main-about {
            background-color: #efefef;
            margin-top: 0px;
        }

        .icon-about {
            margin-top: 80px;
            margin-left: 336px;
            margin-bottom: 80px;
            width: 234px;
            height: 470px;
        }

        .text-about-center {
            margin-left: 150px;
            margin-top: 80px;
            font-weight: bold;
            font-size: 40pt;
            color: red;
        }

        .text-about-center a{
            color: black;
        }

        .text-about-center-p {
            margin-top: 20px;
            margin-left: 150px;
            font-weight: bold;
            font-size: 20pt;
            color: #7b7878;
        }

        .icon-about-bnsp {
            display: inline-block;
            margin-left: 150px;
            margin-right: 70px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .icon-about-api {
            display: inline-block;
        }

        @media (max-width: 576px) {

            #gambar-home-las {
                overflow: hidden;
            }
            
            .icon-about {
                margin: 50px 0 20px 90px;
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

            .icon-about-bnsp {
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

            .text-about-center {
                margin-top: 20px;
                margin-left: 0px;
                margin-bottom: 20px;
                text-align: center;
                font-size: 12pt;
            }

            .slider-wrapper h1{
            font-size: 12pt;
        }
    }


    </style>
@endpush

@section('content')
    <div class="row p-0 m-0">
        <div class="col-lg-8 col-sm-4 main-text">
            <p class="text-home-center">Lembaga Sertifikasi Profesi - LAS</p>
            <p class="text-home-center-p">Lembaga sertifikasi untuk profesi <br>
                pengelasan yang didirikan oleh Asosiasi <br>
                Pengelasan Indonesia dan Terlisensi oleh <br>
                Badan Nasional Sertifikasi Profesi.</p>
            <div class="icon-about-bnsp"><img src="{{ asset('Images/bnsp pendaftaran.png') }}" /></div>
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

    <div class="main-about">
        <div class="row p-0 m-0">
            <div class="col-lg-4 sm-4">
                <img class="icon-about" src="{{ asset('Images/icon gambar pendaftaran.png') }}" />
            </div>
            <div class="col-lg-8 sm-4">
                <p class="text-about-center">Anda dapat menghubungi kami <br>
                melalui whatsapp/telepon <br>
                Klik <a href="http://">di sini</a></p>
                <div class="icon-about-bnsp"><img src="{{ asset('Images/bnsp pendaftaran.png') }}" /></div>
                <div class="icon-about-api"><img src="{{ asset('Images/api pendaftaran.png') }}" /></div>
            </div>
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
            const imageUrl = "{{ asset('images/mampu-bersaing.png') }}";
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
                "{{ asset('images/mampu-bersaing.png') }}",
                "{{ asset('images/mengikuti-perkembangan.png') }}",
                "{{ asset('images/membina-tempat.png') }}",
                "{{ asset('images/menjalin hub.png') }}",
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
