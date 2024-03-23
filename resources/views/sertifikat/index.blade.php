@extends('layouts.app')
@section('content')
    <div class="row p-0 m-0">
        <img src="{{ asset('Images/bg-carisertifikat.png') }}" />
    </div>
    <div class="container-fluid mb-4" style="width: 40%;">
        <form action="/cari/sertifikat" method="POST" class="d-flex">
            @csrf
            <input name="keyword" class="form-control me-2 search-box" type="search" placeholder="Cari nomor sertifikasi"
                aria-label="Search">
            <button class="btn btn-danger" type="submit"><i data-feather="search"></i></button>
        </form>
    </div>
    <div>
        <div class="center">

            <div class="table-size">
                <img src="{{ asset('images/Logo-LSP-3.png') }}" alt="logo LSP">
                <table class="table table-bordered rounded">
                    <tbody>
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
                            <th scope="row">Berlaku Sampai</th>
                            @if (empty($tglBerlaku))
                                <td>{{ ' ' }}</td>
                            @else
                                <td> {{ date_format($tglBerlaku, 'd-m-Y') }} </td>
                            @endif
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row px-0 py-5 m-0" style="background-color: #EFEFEF">
            <div class="col-12 text-center">
                <h1 class="fw-semibold fs-3" style="color: red">SKEMA Sertifikasi</h1>
            </div>
            <div class="row mx-auto" style="width: 50%;">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-accordion" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="fw-semibold fs-5">FIELLET WELDER</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show bg-accordion"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="text-align: justify;">
                                    Daftar Unit Kompetensi<br>

                                    KOMPETENSI INTI<br>
                                    1 . C.25LAS01.001.1 Melaksanakan Persiapan Tempat Kerja<br>
                                    <br>
                                    KOMPETENSI PILIHAN<br>
                                    1 .C.25LAS01.026.1 Memperbaiki Hasil Pengelasan<br>
                                    2. C.25LAS01.028.1 Membuat Sambungan Las Fillet Sesuai WPS untuk Pengelasan<br>
                                    Pelat ke Pelat, Pipa ke Pipa, dan Pelat ke Pipa sesuai dengan<br>
                                    Proses Las yang Digunakan<br>
                                    <br>
                                    PERSYARATAN DASAR PEMOHON SERTIFIKASI<br>
                                    Minimal pendidikan SD dan/ atau yang setara pada bidang keahlian pengelasan dan/atau<br>
                                    memiliki sertifikat pelatihan Bidang Pengelasan Fillet atau yang setara, atau<br>
                                    Tenaga Kerjadengan memiliki pengalaman kerja minimal 1 (satu) Tahun dibidang<br>
                                    pengelasan pada industri, atau<br>
                                    Tenaga Kerja berpengalaman minimal 2 ( dua ) tahun di bidang pengelasan pada
                                    kelompok<br>
                                    usaha mandiri.<br>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-accordion " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="fw-semibold fs-5">
                                        PLATE WELDER
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse bg-accordion"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="text-align: justify;">
                                    Daftar Unit Kompetensibr<br>
                                    KOPETENSI INTI<br>
                                    1 . C.25LAS01.001.1 Melaksanakan Persiapan Tempat Kerja<br>
                                    <br>
                                    KOMPETENSI PILIHAN<br>
                                    1 .C.25LAS01.026.1 Memperbaiki Hasil Pengelasan<br>
                                    2. C.25LAS01.029.1 Membuat Sambungan Las Kampuh (Groove) sesuai WPS untuk<br>
                                    Pengelasan Pelat ke Pelat dan sesuai dengan Proses Las yang<br>
                                    Digunakan<br>
                                    <br>
                                    PERSYARATAN DASAR PEMOHON SERTIFIKASI<br>
                                    Minimal pendidikan SD dan/ atau yang setara pada bidang keahlian pengelasan dan/atau<br>
                                    memiliki sertifikat pelatihan Bidang Pengelasan Fillet atau yang setara, atau<br>
                                    Tenaga Kerja dengan memiliki pengalaman kerja minimal 1 (satu) Tahun dibidang
                                    pengelasan<br>
                                    pada industri, atau<br>
                                    Tenaga Kerja berpengalaman minimal 2 ( dua ) tahun di bidang pengelasan pada
                                    kelompok<br>
                                    usaha mandiri.<br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button bg-accordion collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="fw-semibold fs-5">
                                        PIPE WELDER
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse bg-accordion"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="text-align: justify;">
                                    Daftar Unit Kompetensi<br>
                                    <br>
                                    KOPETENSI INTI<br>
                                    1.C.25LAS01.001.1 Melaksanakan Persiapan Tempat Kerja<br>
                                    <br>
                                    KOMPETENSI PILIHAN<br>
                                    1.C.25LAS01.002.1 Melakukan Peran Serta (Contribute) pada Sistem Mutu<br>
                                    2.C.25LAS01.026.1 Memperbaiki Hasil Pengelasan<br>
                                    3.C.25LAS01.030.1 Membuat Sambungan Las Kampuh (Groove) sesuai WPS untuk<br>
                                    Pengelasan Pipa ke Pipa dan sesuai dengan Proses Las yang Digunakan<br>
                                    4.C.25LAS01.031.1 Melakukan Inspeksi Visual Pengelasan<br>
                                    <br>
                                    PERSYARATAN DASAR PEMOHON SERTIFIKASI<br>
                                    Minimal pendidikan SLTP dan/ atau yang setara pada bidang keahlian pengelasan dan/atau
                                    memiliki<br>
                                    sertifikat pelatihan Bidang Pengelasan Pipa atau yang setara, atau<br>
                                    Tenaga Kerja dengan memiliki pengalaman kerja minimal 2 (dua) Tahun dibidang pengelasan
                                    pada<br>
                                    industri, atau<br>
                                    Tenaga Kerja berpengalaman minimal 3 ( dua ) tahun di bidang pengelasan pada kelompok
                                    usaha<br>
                                    mandiri<br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        @endsection
        @push('scripts')
            <script>
                feather.replace();
            </script>
        @endpush
