@extends('layouts.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators mx-auto">
            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button> --}}
            @foreach ($carousels as $carousel)
                @if ($loop->iteration == 1)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
                @else
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->iteration-1 }}"
                aria-label="Slide {{ $loop->iteration }}"></button>
                @endif
            @endforeach
        </div>
        <div class="carousel-inner">
            {{-- <div class="carousel-item active">
                <img src="{{ asset('images/Content-Dashboard1.png') }}" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Content-Dashboard2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/Content-Dashboard1.png') }}" class="d-block w-100" alt="...">
            </div> --}}
            @foreach ($carousels as $carousel)
            <div class="carousel-item {{ $loop->iteration == 1?'active':''  }}">
                <img src="{{ asset('images/carouselImg/'.$carousel->image) }}" class="d-block w-100" alt="...">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
            <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M28.5 57C44.2398 57 57 44.2398 57 28.5C57 12.7602 44.2398 0 28.5 0C12.7602 0 0 12.7602 0 28.5C0 44.2398 12.7602 57 28.5 57ZM34.2181 37.0319C34.6901 37.5205 34.9512 38.175 34.9453 38.8543C34.9394 39.5336 34.667 40.1835 34.1866 40.6638C33.7062 41.1442 33.0564 41.4167 32.377 41.4226C31.6977 41.4285 31.0432 41.1674 30.5546 40.6954L20.191 30.3318C19.7052 29.8459 19.4324 29.187 19.4324 28.5C19.4324 27.813 19.7052 27.1541 20.191 26.6682L30.5546 16.3046C31.0432 15.8326 31.6977 15.5715 32.377 15.5774C33.0564 15.5833 33.7062 15.8558 34.1866 16.3362C34.667 16.8165 34.9394 17.4664 34.9453 18.1457C34.9512 18.825 34.6901 19.4795 34.2181 19.9681L25.6863 28.5L34.2181 37.0319Z"
                    fill="#ED1C24" />
            </svg>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
            <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M28.5 0C12.7602 0 0 12.7602 0 28.5C0 44.2398 12.7602 57 28.5 57C44.2398 57 57 44.2398 57 28.5C57 12.7602 44.2398 0 28.5 0ZM22.7819 19.9681C22.3099 19.4795 22.0488 18.825 22.0547 18.1457C22.0606 17.4664 22.333 16.8165 22.8134 16.3362C23.2938 15.8558 23.9436 15.5833 24.623 15.5774C25.3023 15.5715 25.9568 15.8326 26.4454 16.3046L36.809 26.6682C37.2948 27.1541 37.5676 27.813 37.5676 28.5C37.5676 29.187 37.2948 29.8459 36.809 30.3318L26.4454 40.6954C25.9568 41.1674 25.3023 41.4285 24.623 41.4226C23.9436 41.4167 23.2938 41.1442 22.8134 40.6638C22.333 40.1835 22.0606 39.5336 22.0547 38.8543C22.0488 38.175 22.3099 37.5205 22.7819 37.0319L31.3137 28.5L22.7819 19.9681Z"
                    fill="#ED1C24" />
            </svg>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row px-0 py-5 m-0 justify-content-center" style="background-color: #EFEFEF">
        <div class="row p-0 mb-5 text-center justify-content-center tuk-box" style="width: 33%">
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
        <div class="row justify-content-center p-0" style="width: 80%">
            {{-- <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div>
            <div class="col-2 p-3">
                <div class="tuk-box-img">
                    <img width="100%" src="{{ asset('images/patria.png') }}"/>
                </div>
            </div> --}}

            @foreach ($tuks as $tuk)
                <div class="col-2 p-3">
                    <div class="tuk-box-img">
                        <img width="100%" height="135px" src="{{ asset('Images/tukImg/'.$tuk->image) }}" />
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
