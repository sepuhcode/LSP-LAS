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
                    <img src="{{ asset('images/carouselImg/' . $carousel->image) }}" class="d-block w-100" alt="...">
                </div>
            @empty
                <div class="carousel-item active">
                    <img src="{{ asset('images/Content-Dashboard1.png') }}" class="d-block w-100" alt="dashboard image">
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
    <div class="row px-0 py-5 m-0 justify-content-center" style="background-color: #EFEFEF">
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
                    <h2>13</h2>
                    <p>Skema Sertifikasi</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center p-0" style="width: 80%">
            @foreach ($tuks as $tuk)
                <div class="col-2 p-3">
                    <div class="tuk-box-img">
                        <img width="100%" height="135px" src="{{ asset('Images/tukImg/' . $tuk->image) }}" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row p-0 m-0">
        <img src="{{ asset('Images/Content-Dashboard.png') }}" />
    </div>
    <div class="row px-0 py-5 m-0" style="background-color: #EFEFEF">
        <div class="col-12 text-center">
            <h1 class="fw-semibold fs-3" style="color: red">Visi Misi LSP LAS</h1>
            <h2 class="fw-semibold mx-auto my-5 fs-5" style="width: 50%">
                Menjadi satu – satunya Lembaga Sertifikasi Profesi Pengelasan di Indonesia yang memiliki Kompetensi
                Nasional
                dan Internasional untuk menghasilkan tenaga – tenaga pengelasan yang berkualifikasi Nasional dan
                Internasional.
            </h2>
        </div>
        <div class="row mx-auto" style="width: 50%;">
            <div class="col-md-7">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-accordion" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="fw-semibold fs-5">Mampu Bersaing</span>
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
                                <span class="fw-semibold fs-5">
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
                                <span class="fw-semibold fs-5">
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
                                <span class="fw-semibold fs-5">
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
    <div class="row mx-auto px-0 py-5 m-0" style="width: 80%;">
        <div class="col-12">
            <section id="slider-section">
                <div class="container">
                    <div class="subcontainer">
                        <div class="slider-wrapper">
                            <h1 class="fw-semibold fs-3 text-center" style="color: red">Tim Kami</h1>
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
        const imagesObject = [{
                "img": "{{ asset('images/our-team/image-1.png') }}",
                "nama": "Sunoto Mudiantoro",
                "jabatan": "Direktur"
            },
            {
                "img": "{{ asset('images/our-team/image-2.png') }}",
                "nama": "Kemal Mahdi",
                "jabatan": "Manajer Mutu"
            },
            {
                "img": "{{ asset('images/our-team/image-3.png') }}",
                "nama": "Aiyub",
                "jabatan": "Komite Skema"
            },
            {
                "img": "{{ asset('images/our-team/image-4.png') }}",
                "nama": "Wahadi Sugijono",
                "jabatan": "Manajer Sertifikat"
            },
            {
                "img": "{{ asset('images/our-team/image-5.png') }}",
                "nama": "Wahyuni",
                "jabatan": "Manajer Administrasi"
            },
            {
                "img": "{{ asset('images/our-team/image-6.png') }}",
                "nama": "Nadifa Mutiara",
                "jabatan": "Wakil Manajer Mutu"
            },
            {
                "img": "{{ asset('images/our-team/image-7.png') }}",
                "nama": "Karla Juwita",
                "jabatan": "Staff Administrasi"
            }
        ];

        window.addEventListener("load", initializeSlider());

        function initializeSlider() {
            let images = "";
            for (let image in imagesObject) {
                images += `<div class="slide">
              <img src="${imagesObject[image].img}"
                alt="image">
              <br><br>
              <div>
                <p><strong>${imagesObject[image].nama}</strong></p>
                <p>${imagesObject[image].jabatan}</p>
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
            nav: true,
            speed: 400,
            controlsContainer: '#slider-section #controls',
            prevButton: '#slider-section .previous',
            nextButton: '#slider-section .next'
        });
    </script>
@endpush
