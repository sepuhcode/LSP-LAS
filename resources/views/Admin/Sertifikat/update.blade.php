@extends('Admin.layout')

@push('style')
    {{-- select2 --}}
    <link rel="stylesheet" href={{ asset('admin_template/plugins/select2/css/select2.css') }}>
    <link rel="stylesheet" href={{ asset('admin_template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>

    </style>
@endpush

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Sertifikat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/sertifikat/{{ $sertifikat->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input name="name" type="text" class="form-control" id="name"
                                value="{{ old('name', $sertifikat->name) }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_sertifikat">Nomor Sertifikat</label>
                            <input name="no_sertifikat" type="text" class="form-control" id="no_sertifikat"
                                value="{{ old('no_sertifikat', $sertifikat->no_sertifikat) }}" required>
                            @error('no_sertifikat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_reg_sertifikat">Nomor Registrasi Sertifikat</label>
                            <input name="no_reg_sertifikat" type="text" class="form-control" id="no_reg_sertifikat"
                                value="{{ old('no_reg_sertifikat', $sertifikat->no_reg_sertifikat) }}" required>
                            @error('no_reg_sertifikat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="skema_sertifikasi_id">Skema Sertifikasi</label>
                            <select name="skema_sertifikasi_id"
                                class="form-control select2bs4 skema-sertifikasi @error('skema_sertifikasi_id') is-invalid @enderror"
                                required>
                                @foreach ($skemas as $skema)
                                    <option value="{{ $skema->id }}"
                                        {{ $sertifikat->skema_sertifikasi_id == $skema->id ? 'selected' : '' }}>
                                        {{ $skema->name }}</option>
                                @endforeach
                            </select>
                            @error('skema_sertifikasi_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="posisi_las_id">Posisi Las</label>
                            <select name="posisi_las_id"
                                class="form-control select2bs4 posisi-las @error('posisi_las_id') is-invalid @enderror"
                                required>
                            </select>
                            @error('posisi_las_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tuk">TUK</label>
                            <input name="tuk" type="text" class="form-control" id="tuk"
                                value="{{ old('tuk', $sertifikat->tuk) }}" required>
                            @error('tuk')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_blangko">Nomor Blangko</label>
                            <input name="no_blangko" type="text" class="form-control" id="no_blangko"
                                value="{{ old('no_blangko', $sertifikat->no_blangko) }}">
                            @error('no_blangko')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_uji">Tanggal Uji</label>
                            <input name="tgl_uji" type="text" class="form-control" id="tgl_uji"
                                value="{{ old('tgl_uji', $sertifikat->tgl_uji) }}">
                            @error('tgl_uji')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_sertifikat">Tanggal Sertifikat </label>
                            <input name="tgl_sertifikat" type="date" class="form-control" id="tgl_sertifikat"
                                value="{{ old('tgl_sertifikat', $sertifikat->tgl_sertifikat) }}" required>
                            @error('tgl_sertifikat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="asesor_id">Asesor 1</label>
                            <select name="asesor_id"
                                class="form-control select2bs4 @error('asesor_id') is-invalid @enderror" required>
                                @foreach ($asesors as $asesor)
                                    <option value="{{ $asesor->id }}"
                                        {{ $sertifikat->asesor_id == $asesor->id ? 'selected' : '' }}>{{ $asesor->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('asesor_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="asesor2_id">Asesor 2</label>
                            <select name="asesor2_id"
                                class="form-control select2bs4 @error('asesor2_id') is-invalid @enderror">
                                @if ($sertifikat->asesor2 != null)
                                    @foreach ($asesors as $asesor)
                                        <option value="{{ $asesor->id }}"
                                            {{ $sertifikat->asesor2_id == $asesor->id ? 'selected' : '' }}>{{ $asesor->name }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="">Pilih Asesor 2</option>
                                    @foreach ($asesors as $asesor)
                                        <option value="{{ $asesor->id }}">{{ $asesor->name }}</option>
                                    @endforeach
                                @endif

                            </select>
                            @error('asesor2_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="owner_id">Pemilik Sertifikat</label>
                            <select name="owner_id" class="form-control select2bs4 @error('owner_id') is-invalid @enderror">
                                @foreach ($owners as $owner)
                                    <option value="{{ $owner->id }}"
                                        {{ $sertifikat->owner_id == $owner->id ? 'selected' : '' }}>{{ $owner->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('owner_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file_scan_sertifikat">File Scan Sertifikat</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input id="file_scan_sertifikat" name="file_scan_sertifikat" type="file"
                                        class="custom-file-input @error('file_scan_sertifikat') is-invalid @enderror"
                                        accept="application/pdf">
                                    <label class="custom-file-label" for="file_scan_sertifikat">Pilih File</label>
                                </div>

                            </div>
                            @error('file_scan_sertifikat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
@endsection

@push('script')
    <script src={{ asset('admin_template/plugins/select2/js/select2.full.min.js') }}></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var posisis = @json($posisis);
            var sertifikat = @json($sertifikat);
            $.each(posisis, function(i, value) {
                if (value.id == sertifikat.posisi_las_id) {
                    $('.posisi-las').append('<option selected value="' + value.id + '">' + value.name +
                        '</option>');
                } else {
                    $('.posisi-las').append('<option value="' + value.id + '">' + value.name + '</option>');
                }
            });


            $('.skema-sertifikasi').on('change', function() {
                var skemaId = this.value;
                $('.posisi-las').html('');

                if (skemaId) {
                    $.ajax({
                        url: "{{ url('admin/get-posisi-las') }}",
                        type: "POST",
                        data: {
                            _token: $('#signup-token').val(),
                            skema_id: skemaId,
                        },
                        dataType: 'json',
                        success: function(result) {
                            $('.posisi-las').empty();
                            $.each(result.posisiLas, function(index, value) {
                                $('.posisi-las').append('<option value="' + value.id +
                                    '">' + value
                                    .name + '</option>');
                            });
                        }
                    });
                } else {
                    $('.posisi-las').empty();
                }

            });

        });
    </script>
@endpush
