@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
<style>

.main-sertifikat{
    background-color: #ffffff;
    margin-top: 0px;
    margin-left: 0px;
}   

.main-text{
    margin-left: 40px;
}

@media (max-width: 576px) { 
    .main-text { 
       margin-top: 0px; 
       margin-left: 0px;
       text-align: center;
   }
}

    .icon-sertifikat{
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



.text-sertif-center{
    margin-left: 150px;
    margin-top: 80px;
    font-weight: bold;
    font-size:40pt;
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
    font-size:20pt;
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

.icon-sertif-bnsp{
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


.icon-sertif-api{
    display: inline-block;
}

/* TABLE SERTIF*/
.search-bar{
    width: 40%;
}

@media(max-width: 574px){
    .search-bar{
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

@media(max-width: 574px){
    .btn .btn-danger{
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
    #acc-sertif{
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
    <div class="container-fluid mb-4 search-bar" style="">
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
                <img src="{{ asset('Images/Logo-LSP-3.png') }}" alt="logo LSP">
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
                            <th scope="row">Posisi LAS</th>
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
            <div class="row mx-auto" style="" id="acc-sertif">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        @foreach ($skemaSertifikasis as $skemaSertifikasi )
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-accordion" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="fw-semibold fs-5">{{ $skemaSertifikasi->name }}</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show bg-accordion"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="text-align: justify;">
                                    {!! $skemaSertifikasi->deskripsi !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endsection
        @push('scripts')
            <script>
                feather.replace();
            </script>
        @endpush
