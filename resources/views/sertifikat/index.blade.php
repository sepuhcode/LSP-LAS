@extends('layouts.app')

@push('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <style>
        .main-sertifikat {
            background-color: #ffffff;
            margin-top: 0px;
            margin-left: 0px;
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

        .icon-sertifikat {
            margin-top: 80px;
            margin-right: 1455px;
            margin-bottom: 80px;
            width: 373px;
            height: 507px;
        }

        @media (max-width: 576px) {
            .icon-sertifikat {
                margin: 50px 0 20px 0;
            }
        }



        .text-sertif-center {
            margin-left: 150px;
            margin-top: 80px;
            font-weight: bold;
            font-size: 40pt;
            color: red;
            margin-bottom: 70px;
        }

        @media (max-width: 576px) {
            .text-sertif-center {
                margin-top: 20px;
                margin-left: 0px;
                margin-bottom: 20px;
                text-align: center;
                font-size: 19pt;
            }
        }

        .text-sertif-center-p {
            margin-top: 20px;
            margin-left: 150px;
            font-weight: bold;
            font-size: 20pt;
            margin-bottom: 30px;
            color: #7b7878;
        }

        @media (max-width: 576px) {
            .text-sertif-center-p {
                margin-top: 0px;
                margin-left: 0px;
                text-align: center;
                font-size: 10pt;
            }
        }

        .icon-sertif-bnsp {
            display: inline-block;
            margin-left: 150px;
            margin-right: 70px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        @media (max-width: 576px) {
            .icon-sertif-bnsp {
                margin: 5px 30px 20px 20px;
            }
        }


        .icon-sertif-api {
            display: inline-block;
        }

        /* TABLE SERTIF*/
        .search-bar {
            width: 40%;
        }

        @media(max-width: 574px) {
            .search-bar {
                width: 300px;
            }
        }

        .search-button {
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        @media(max-width: 574px) {
            .btn .btn-danger {
                width: 10px;
                height: 10px;
            }
        }



        .search-box::placeholder {
            font-style: italic;
        }

        @media(max-width: 574px) {
            .search-box {
                width: 300px;
                margin: 0 0;
            }
        }

        .table {
            width: 40%;
            /* Mengatur lebar tabel menjadi 40% dari lebar container */
            margin: 20px auto;
            /* Memusatkan tabel secara horizontal */
            border-collapse: collapse;
        }

        @media(max-width: 574px) {
            .table {
                width: 95%;
                height: 100%;
                margin: 20px 10px;
            }
        }


        .table-size {
            position: relative;
        }

        .table-size table {
            /* set border table  */
            border: 2px solid black;
            text-align: left;
        }



        /* gambar background tabel  */
        .table-size img {
            position: absolute;
            width: 205px;
            height: 205px;
            margin-top: 20px;
            /* opacity: .1; */
            filter: opacity(.1);
            left: 50%;
            z-index: 5;
        }

        @media(max-width: 574px) {
            .table-size img {
                width: 180px;
                height: 180px;
                margin: 50px 70px 0 0;

            }
        }


        .table-bordered th {
            width: 30%;
            background-color: #e5e5e5;
            /* text-align: left; */
            padding: 8px;
        }



        /* Mengatur gaya sel data */
        td {
            width: 70%;
            padding: 8px;
        }

        .teks-2 {
            text-align: center;
            font-size: 15pt;
        }

        div .table-sertifikat {
            margin-left: 0px;
            margin-top: 0px;
            margin-bottom: 106px;
        }


        #acc-sertif {
            width: 50%;
        }

        @media(max-width: 574px) {
            #acc-sertif {
                width: 100%;

            }
        }
    </style>
@endpush

@section('content')
    <div class="main-sertifikat">
        <div class="row p-0 m-0 ">
            <div class="col-lg-8 sm-4 main-text">
                <p class="text-sertif-center">Anda dapat memastikan keaslian <br>sertifikat disini</p>
                <p class="text-sertif-center-p">Anda juga dapat melihat informasi sertifikasi pada halaman ini</p>
                <div class="icon-sertif-bnsp"><img src="{{ asset('Images/bnsp pendaftaran.png') }}" /></div>
                <div class="icon-sertif-api"><img src="{{ asset('Images/api pendaftaran.png') }}" /></div>
            </div>
            <div class="col-lg-3 sm-4">
                <img class="icon-sertifikat" src="{{ asset('Images/icon-sertifikat.png') }}" />
            </div>
        </div>
    </div>
    <div class="container-fluid mb-4" style="width: 40%;">
        {{-- <form action="/cari/sertifikat" method="POST" class="d-flex"> --}}
        <form method="" class="d-flex">
            @csrf
            <input name="keyword" class="form-control input-keyword me-2 search-box" type="search"
                placeholder="Cari nomor sertifikasi" aria-label="Search">
            {{-- <button class="btn btn-danger" type="submit"><i data-feather="search"></i></button> --}}
            <button type="button" class="btn btn-danger btn-search">cari</i></button>
        </form>
    </div>
    <div>
        <div class="center">
            <div class="table-size">
                <img src="{{ asset('Images/Logo-LSP-3.png') }}" alt="logo LSP">
                <table class="table table-bordered rounded">
                    <tbody>
                        <tr>
                            <th scope="row">Nama</th>
                            {{-- @if (empty($sertifikat))
                                <td>{{ ' ' }}</td>
                            @else
                                <td>{{ $sertifikat[0]->nama }}</td>
                            @endif --}}
                            <td class="name"></td>
                        </tr>
                        <tr>
                            <th scope="row">No. Sertifikasi</th>
                            <td class="no-sertifikat"></td>
                        </tr>
                        <tr>
                            <th scope="row">Asesor</th>
                            <td class="asesor"></td>
                        </tr>
                        <tr>
                            <th scope="row">Skema Sertifikasi</th>
                            <td class="skema-sertifikasi"></td>
                        </tr>
                        <tr>
                            <th scope="row">Posisi Las</th>
                            <td class="posisi-las"></td>
                        </tr>
                        <tr>
                            <th scope="row">Berlaku Sampai</th>
                            <td class="tgl-berlaku"></td>
                        </tr>
                    </tbody>

                    {{-- jangan dihapus --}}
                    {{-- <tbody>
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
                            <th scope="row">Posisi Las</th>
                            @if (empty($sertifikat))
                                <td>{{ ' ' }}</td>
                            @else
                                <td>{{ $sertifikat[0]->posisi_las }}</td>
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
                    </tbody> --}}
                    {{-- jangan dihapus --}}

                </table>
            </div>
        </div>
        <div class="row px-0 py-5 m-0" style="background-color: #EFEFEF">
            <div class="col-12 text-center">
                <h1 class="fw-semibold fs-3" style="color: red">SKEMA Sertifikasi</h1>
            </div>
            <div class="row mx-auto" style="" id="acc-sertif">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        @foreach ($skemaSertifikasis as $skemaSertifikasi)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $loop->iteration }}">
                                    <button
                                        class="accordion-button bg-accordion {{ $loop->iteration != 1 ? 'collapsed' : '' }}"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="collapse{{ $loop->iteration }}">
                                        <span class="fw-semibold fs-5">{{ $skemaSertifikasi->name }}</span>
                                    </button>
                                </h2>
                                <div id="collapse{{ $loop->iteration }}"
                                    class="accordion-collapse collapse {{ $loop->iteration == 1 ? 'show' : '' }} bg-accordion"
                                    aria-labelledby="heading{{ $loop->iteration }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="text-align: justify;">
                                        {!! $skemaSertifikasi->deskripsi !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // feather icons
        // feather.replace();
        $(function() {

            // ajax request
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btn-search').on('click', function() {
                var keyword = $('.input-keyword').val();
                $.ajax({
                    url: "{{ url('/cari-sertifikat') }}",
                    type: "POST",
                    data: {
                        _token: $('#signup-token').val(),
                        key_word: keyword
                    },
                    dataType: 'json',
                    success: function(result) {
                        if (!$.isEmptyObject(result.sertifikat[0])) {
                            $('.name').html(result.sertifikat[0].name);
                            $('.no-sertifikat').html(result.sertifikat[0].no_sertifikat);
                        } else {
                            $('.name').empty();
                            $('.no-sertifikat').empty();
                        }

                        if (!$.isEmptyObject(result.asesor)) {
                            if (result.asesor2+=null) {
                                $('.asesor').html(result.asesor + ' & ' + result.asesor2);
                            } else {
                                $('.asesor').html(result.asesor);
                            }
                        } else {
                            $('.asesor').empty();
                        }

                        if (!$.isEmptyObject(result.skemaSertifikasi)) {
                            $('.skema-sertifikasi').html(result.skemaSertifikasi);
                        } else {
                            $('.skema-sertifikasi').empty();
                        }
                        if (!$.isEmptyObject(result.posisiLas)) {
                            $('.posisi-las').html(result.posisiLas);
                        } else {
                            $('.posisi-las').empty();
                        }

                        if (!$.isEmptyObject(result.tglBerlaku)) {
                            $('.tgl-berlaku').html(result.tglBerlaku);
                        } else {
                            $('.tgl-berlaku').empty();
                        }
                        // console.log(result);
                    },
                });

            });


        });
    </script>
@endpush
