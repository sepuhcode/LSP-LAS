@extends('layouts.app')
@push('style')
    <style>
        .main-pendaftaran {
            background-color: #efefef;
            margin-top: 0px;
        }

        .alur-daftar {
            background-color: #000000;

        }

        .row-test {
            display: flex;
        }


        .icon-pendaftaran {
            margin-top: 80px;
            margin-left: 336px;
            margin-bottom: 80px;
            width: 234px;
            height: 470px;
        }


        .text-daftar-center {
            margin-left: 150px;
            margin-top: 80px;
            font-weight: bold;
            font-size: 40pt;
            color: red;
        }

        .text-daftar-center-p {
            margin-top: 20px;
            margin-left: 150px;
            font-weight: bold;
            font-size: 20pt;
            color: #7b7878;
        }

        .text-daftar-center-p a{
            color: red;
            text-decoration: none;
        }

        .icon-daftar-bnsp {
            display: inline-block;
            margin-left: 150px;
            margin-right: 70px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .icon-daftar-api {
            display: inline-block;
        }

        .container-daftar {
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
            max-width: 1920px;
            flex-wrap: wrap;
            padding: 0px;
            margin-bottom: 0;
        }

        .step {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            padding-top: 0px;
            text-align: center;
            width: 15%;
            height: 430px;
            /* Fixed height */
            position: relative;
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            /* Align items to the top */
            align-items: center;
            margin-bottom: 50px;
            margin-top: 10px;
        }

        .step:hover {
            transform: translateY(-10px);
        }

        .step-garis-ikon {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 15%;
            height: 230px;
            /* Fixed height */
            position: relative;
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            /* Align items to the top */
            align-items: center;
        }

        .line {
            width: 5px;
            height: 130px;
            background: linear-gradient(to bottom, rgba(227, 52, 47, 0) 0%, #e3342f 50%, #e3342f 100%);
        }

        .line2 {
            width: 5px;
            height: 200px;
            background: linear-gradient(to bottom, rgba(227, 52, 47, 0) 0%, #e3342f 50%, #e3342f 100%);
        }


        .icon {
            background-color: red;
            color: white;
            font-weight: bold;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 18px;
        }

        .person {
            position: absolute;
            display: inline-block;
            top: 60px;
            left: 30%;
            transform: translateX(-50%);
            width: auto;
            height: auto;
        }

        .person2 {
            position: absolute;
            display: inline-block;
            top: 130px;
            left: 80%;
            transform: translateX(-50%);
            width: auto;
            height: auto;
        }

        .step h2 {
            color: red;
            font-size: 18px;
            margin: 10px 0 5px 0;
        }

        .step p {
            font-size: 14px;
            color: #333;
            margin: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 5px;
            box-shadow: 10 2px 5px rgba(0, 0, 0, 0.1);
        }

        .border {
            border-radius: 8px;
            background-color: #d9d9d9;
            width: 220px;
            height: 200px;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .step {
                width: 22%;
                /* Adjust width for medium screens */
            }

            .icon-pendaftaran {
                margin: 50px 0 0 50px;
                /* Adjust width for medium screens */
            }
        }

        @media (max-width: 992px) {
            .step {
                width: 30%;
                /* Adjust width for tablet screens */
            }
        }

        @media (max-width: 768px) {
            .step {
                width: 45%;
                /* Adjust width for smaller tablets */
            }
        }

        @media (max-width: 576px) {

            .container-daftar {
                margin-bottom: 20px;
            }

            .step {
                width: 90%;
                /* Adjust width for mobile screens */
                height: auto;
                /* Allow height to adjust based on content */
                padding: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
            }

            step5 .step {
                width: 90%;
                /* Adjust width for mobile screens */
                height: auto;
                /* Allow height to adjust based on content */
                padding: 0px;
                margin-top: 0px;
                margin-bottom: 10px;
            }

            .line {
                height: 30px;
                margin: 0 0 0 0;
            }

            .line2 {
                height: 30px;
                margin: 0 0 0 0;
                padding: 0px;
            }

            .step img {
                content-visibility: hidden;
            }

            .icon-daftar-bnsp {
                margin: 50px 30px 20px 20px;
            }

            .icon-pendaftaran {
                margin: 50px 0 20px 90px;
            }

            .text-daftar-center-p {
                margin-top: 0px;
                margin-left: 0px;
                text-align: center;
                font-size: 10pt;
            }

            .text-daftar-center {
                margin-top: 0px;
                margin-left: 0px;
                margin-bottom: 20px;
                text-align: center;
                font-size: 20pt;
            }
        }
    </style>
@endpush

@section('content')
    <div class="main-pendaftaran">
        <div class="row p-0 m-0">
            <div class="col-lg-4 sm-4">
                <img class="icon-pendaftaran" src="{{ asset('Images/icon gambar pendaftaran.png') }}" />
            </div>
            <div class="col-lg-8 sm-4">
                <p class="text-daftar-center">Anda dapat mendaftar melalui <br> website ini</p>
                <p class="text-daftar-center-p">Pada halaman <a href="{{ url('/login') }}">login</a>, silahkan klik tombol
                    daftar akun</p>
                <p class="text-daftar-center-p">Anda juga dapat menghubungi kami lebih lanjut melalui <br>
                    whatsapp/telepon, klik <a href="http://">di sini</a></p>
                <div class="icon-daftar-bnsp"><img src="{{ asset('Images/bnsp pendaftaran.png') }}" /></div>
                <div class="icon-daftar-api"><img src="{{ asset('Images/api pendaftaran.png') }}" /></div>
            </div>
        </div>
    </div>

    <div class="container-daftar">
        <div class="step" id="step1">
            <img src="{{ asset('Images/man standing with laptop and coffee.png') }}" alt="Person 1" class="person">
            <div class=" line"></div>
            <div class=" icon">1</div>
            <div class="border">
                <h2>Buat Akun</h2>
                <p>Klik pada menu login, lalu pilih daftar untuk membuat akun baru selanjutnya ikuti persyaratan untuk
                    membuat akun baru.</p>
            </div>
        </div>
        <div class="step" id="step2">
            {{-- <img src="person2.gif" alt="Person 2" class="person"> --}}
            <div class="line2"></div>
            <div class="icon">2</div>
            <div class="border">
                <h2 class="h2-daftar">Tunggu Aktivasi</h2>
                <p class="p-daftar">Setelah melakukan pendaftaran, silahkan tunggu aktivasi dari admin kami, atau anda bisa
                    langsung menghubungi admin kami agar proses lebih cepat.</p>
            </div>
        </div>
        <div class="step" id="step3">
            {{-- <img src="person3.gif" alt="Person 3" class="person"> --}}
            <div class="line"></div>
            <div class="icon">3</div>
            <div class="border">
                <h2>Sudah Aktif</h2>
                <p>Sekarang anda bisa melakukan pendaftaran sertifikasi LSP-LAS berdasarkan form-form yang tertera pada
                    pendaftaran.</p>
            </div>
        </div>
        <div class="step" id="step4">
            <img src="{{ asset('Images/two men working with a laptop.png') }}" alt="Person 4" class="person2">
            <div class="line2"></div>
            <div class="icon ">4</div>
            <div class="border">
                <h2>Cek Status</h2>
                <p>Anda dapat melihat status pendaftaran sertifikasi yang anda daftarkan.</p>
            </div>
        </div>
        <div class="step" id="step5">
            {{-- <img src="person5.gif" alt="Person 5" class="person"> --}}
            <div class="line"></div>
            <div class="icon">5</div>
            <div class="border">
                <h2>Login/Logout</h2>
                <p>Anda dapat login & logout kapan pun di web LSP-LAS.</p>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        feather.replace();
    </script>
@endsection
