@extends('layouts.app')

@push('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
    <div class="row p-0 m-0">
        <img src="{{ asset('Images/bg-carisertifikat.png') }}" />
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
            <div class="row mx-auto" style="width: 50%;">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        @foreach ($skemaSertifikasis as $skemaSertifikasi)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $loop->iteration }}">
                                    <button class="accordion-button bg-accordion {{ $loop->iteration!=1?'collapsed':'' }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse{{ $loop->iteration }}">
                                        <span class="fw-semibold fs-5">{{ $skemaSertifikasi->name }}</span>
                                    </button>
                                </h2>
                                <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse {{ $loop->iteration==1?'show':'' }} bg-accordion"
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
                        key_word:keyword
                    },
                    dataType: 'json',
                    success: function(result) {
                        if (!$.isEmptyObject(result.sertifikat[0])) {
                            $('.name').html(result.sertifikat[0].name);
                            $('.no-sertifikat').html(result.sertifikat[0].no_sertifikat);
                        }
                        else{
                            $('.name').empty();
                            $('.no-sertifikat').empty();
                        }

                        if (!$.isEmptyObject(result.asesor)) {
                            $('.asesor').html(result.asesor);
                        }
                        else{
                            $('.asesor').empty();
                        }

                        if (!$.isEmptyObject(result.skemaSertifikasi)) {
                            $('.skema-sertifikasi').html(result.skemaSertifikasi);
                        }
                        else{
                            $('.skema-sertifikasi').empty();
                        }
                        if (!$.isEmptyObject(result.posisiLas)) {
                            $('.posisi-las').html(result.posisiLas);
                        }
                        else{
                            $('.posisi-las').empty();
                        }

                        if (!$.isEmptyObject(result.tglBerlaku)) {
                            $('.tgl-berlaku').html(result.tglBerlaku);
                        }
                        else{
                            $('.tgl-berlaku').empty();
                        }
                        // console.log(result);
                    },
                });

            });


        });
    </script>
@endpush
