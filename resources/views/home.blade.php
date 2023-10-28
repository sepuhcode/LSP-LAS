@extends('layouts.app')
@section('content')
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
                <img src="{{ asset('images/Content-Dashboard1.png') }}" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Content-Dashboard2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Content-Dashboard1.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row px-0 py-5 m-0 justify-content-center" style="background-color: #EFEFEF">
        <div class="row p-0 text-center justify-content-center tuk-box" style="width: 33%">
            <div class="tuk col-4">
                <h2>+18K</h2>
                <p>Sertifikat Terbit</p>
            </div>
            <div class="tuk col-4">
                <h2>18</h2>
                <p>TUK Aktif</p>
            </div>
            <div class="tuk col-4">
                <h2>13</h2>
                <p>Skema Sertifikasi</p>
            </div>
        </div>
        {{-- <div class="TUK-left">
            <h2>+18K</h2>
            <p>Sertifikat Terbit</p>
        </div>
        <div class="TUK-mid">
            <h2>18</h2>
            <p>TUK Aktif</p>
        </div>
        <div class="TUK-right">
            <h2>13</h2>
            <p>Skema Sertifikasi</p>
        </div> --}}

        <div class="row justify-content-center d-none d-lg-flex mb-4 mt-4">
            <div class="col-lg-2 ">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-none d-lg-flex mb-4">
            <div class="col-lg-2 ">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-none d-lg-flex">
            <div class="col-lg-2 ">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
            <div class="col-lg-2">
                <div>
                    <img src="{{ asset('images/Patria.png') }}" style="display: inline" />
                </div>
            </div>
        </div>
    </div>
    <div class="row p-0 m-0">
        <img src="{{ asset('Images/Content-Dashboard.png') }}" />
    </div>
    <div class="row px-0 py-5 m-0" style="background-color: #EFEFEF">
        <div class="col-12 text-center">
            <h1 class="fw-semibold fs-3" style="color: red">Visi Misi LSP LAS</h1>
            <h2 class="fw-semibold mx-auto my-5 fs-5" style="width: 50%">
                Menjadi satu – satunya Lembaga Sertifikasi Profesi Pengelasan di Indonesia yang memiliki Kompetensi Nasional
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
                    <!-- Add more accordion items as needed -->
                </div>
            </div>
            <div class="col-md-5">
                <div class="image-accordion">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
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
    </script>
@endsection
