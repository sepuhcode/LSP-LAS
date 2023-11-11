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
    </div>
@endsection
@section('script')
    <script>
        feather.replace();
    </script>
@endsection
