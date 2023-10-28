@extends('layouts.app')
@section('content')
<div class="line-with-text">
    <hr>
    <div class="text">Cari Data Sertifikasi</div>
    <hr>
</div>
<div class="container-fluid mb-4" style="width: 40%;">
    <form class="d-flex">
        <input class="form-control me-2 search-box" type="search" placeholder="Cari nomor sertifikasi"
            aria-label="Search">
        <button class="btn btn-outline-danger" type="submit"><i data-feather="search"></i></button>
    </form>
</div>
<div>
    <div class="center">

        <div class="table-size">
            <img src="../assets/Images/Logo-LSP-3.png" alt="logo LSP">
            <table class="table table-bordered rounded">
                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>Suguru Geto</td>
                    </tr>
                    <tr>
                        <th scope="row">No. Sertifikasi</th>
                        <td>2017728361726</td>
                    </tr>
                    <tr>
                        <th scope="row">Asesor</th>
                        <td>Rahmat Megumi</td>
                    </tr>
                    <tr>
                        <th scope="row">Skema</th>
                        <td>Manipulasi Kutukan</td>
                    </tr>
                    <tr>
                        <th scope="row">Berlaku Sampai</th>
                        <td>20/09/2023</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
@section('script')
<script>feather.replace();</script>
@endsection
