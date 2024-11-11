@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="{{ asset('css/about-page.css') }}">
@endpush

@section('content')
    <div class="container-xl">
        <div class="row p-0 m-0">
            <div class="col-xl-6 col-12 main-text">
                <p class="text-home-center text-center text-xl-start">Lembaga Sertifikasi Profesi - LAS</p>
                <p class="text-home-center-p text-center text-xl-start">Lembaga sertifikasi untuk profesi <br>
                    pengelasan yang didirikan oleh Asosiasi <br>
                    Pengelasan Indonesia dan Terlisensi oleh <br>
                    Badan Nasional Sertifikasi Profesi.</p>
                <div class="right-home-icons-wrapper mx-auto mx-xl-0">
                    <div class="icon-home-bnsp"><img src="{{ asset('Images/bnsp pendaftaran.png') }}" /></div>
                    <div class="icon-home-api"><img src="{{ asset('Images/api pendaftaran.png') }}" /></div>
                </div>
            </div>
            <div class="my-5 col-xl-6 col-12 d-flex justify-content-center align-items-center" id="gambar-home-las">
                <div class="left-home-icons-wrapper d-flex justify-content-center align-items-center">
                    <img class="icon-home1" src="{{ asset('Images/circle-background.png') }}" />
                    <img class="icon-home2" src="{{ asset('Images/las2.png') }}" />
                    <img class="icon-home3" src="{{ asset('Images/las3.png') }}" />
                </div>
            </div>
        </div>
    </div>

    <div class="row px-0 py-4 m-0" style="background-color: #EFEFEF">
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
                            <button class="accordion-button bg-accordion collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="fw-semibold">
                                    Menjalin Hubungan Komunikasi Yang Intens dengan Stake Holder dan Lembaga
                                </span>
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
                </div>
            </div>
            <div class="col-md-5">
                <div class="image-accordion">
                </div>
            </div>
        </div>
    </div>

    <div id="container-our-team" class="row mx-auto px-0 py-5 m-0" style="width: 80%;">
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
        <div class="container">
            <div class="row p-0 m-0">
                <div class="col-lg-6 col-12 sm-4">
                    <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                        <img class="icon-about" src="{{ asset('Images/icon gambar pendaftaran.png') }}" />
                    </div>
                </div>
                <div class="col-lg-6 col-12 sm-4">
                    <p class="text-about-center">Anda dapat menghubungi kami <br>
                        melalui whatsapp/telepon <br>
                        Klik <a href="http://">di sini</a></p>
                    <div class="row my-5">
                        <div class="col-12 col-md-6">
                            <div class="icon-about-bnsp"><img class="d-block mx-auto mx-lg-0"
                                    src="{{ asset('Images/bnsp pendaftaran.png') }}" /></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="icon-about-api"><img class="d-block mx-auto mx-lg-0"
                                    src="{{ asset('Images/api pendaftaran.png') }}" /></div>
                        </div>
                    </div>
                </div>
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
        let containerOurTeam = document.getElementById("container-our-team");
        if (imagesObject.length === 0) {
            containerOurTeam.style.display = "none";
        }

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
