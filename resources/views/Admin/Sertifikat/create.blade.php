@extends('admin.layout')
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
                    <h3 class="card-title">Tambah Sertifikat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/sertifikat" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nama..."
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_sertifikat">Nomor Sertifikat</label>
                            <input name="no_sertifikat" type="text" class="form-control" id="no_sertifikat"
                                placeholder="Nomor Sertifikat..." value="{{ old('no_sertifikat') }}" required>
                            @error('no_sertifikat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_reg_sertifikat">Nomor Registrasi Sertifikat</label>
                            <input name="no_reg_sertifikat" type="text" class="form-control" id="no_reg_sertifikat"
                                placeholder="Nomor Registrasi Sertifikat..." value="{{ old('no_reg_sertifikat') }}"
                                required>
                            @error('no_reg_sertifikat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="skema_sertifikasi_id">Skema Sertifikasi</label>
                            <select name="skema_sertifikasi_id"
                                class="form-control select2bs4 skema-sertifikasi @error('skema_sertifikasi_id') is-invalid @enderror"
                                required>
                                <option value="">"Pilih Skema Sertifikasi"</option>
                                @foreach ($skemas as $skema)
                                    <option value="{{ $skema->id }}">{{ $skema->name }}</option>
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
                            <input name="tuk" type="text" class="form-control" id="tuk" placeholder="TUK..."
                                value="{{ old('tuk') }}" required>
                            @error('tuk')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_blangko">Nomor Blangko</label>
                            <input name="no_blangko" type="text" class="form-control" id="no_blangko"
                                placeholder="Nomor Blangko..." value="{{ old('no_blangko') }}">
                            @error('no_blangko')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_uji">Tanggal Uji</label>
                            <input name="tgl_uji" type="text" class="form-control" id="tgl_uji"
                                placeholder="Tanggal Uji..." value="{{ old('tgl_uji') }}">
                            @error('tgl_uji')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_sertifikat">Tanggal Sertifikat </label>
                            <input name="tgl_sertifikat" type="date" class="form-control" id="tgl_sertifikat"
                                value="{{ old('tgl_sertifikat') }}" required>
                            @error('tgl_sertifikat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="asesor_id">Asesor 1</label>
                            <select name="asesor_id"
                                class="form-control select2bs4 @error('asesor_id') is-invalid @enderror" required>
                                @foreach ($asesors as $asesor)
                                    @if ($loop->iteration == 1)
                                        <option value="{{ $asesor->id }}" selected="selected">{{ $asesor->name }}
                                        </option>
                                    @else
                                        <option value="{{ $asesor->id }}">{{ $asesor->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('asesor_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="asesor2_id">Asesor 2</label>
                            <select name="asesor2_id"
                                class="form-control select2bs4 @error('asesor2_id') is-invalid @enderror" >
                                @foreach ($asesors as $asesor)
                                        <option value="{{ $asesor->id }}">{{ $asesor->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('asesor2_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="owner_id">Pemilik Sertifikat</label>
                            <select name="owner_id" class="form-control select2bs4 @error('owner_id') is-invalid @enderror"
                                >
                                @foreach ($owners as $owner)
                                    @if ($loop->iteration == 1)
                                        <option value="{{ $owner->id }}" selected="selected">{{ $owner->name }}
                                        </option>
                                    @else
                                        <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                                    @endif
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
                    <input id="signup-token" name="_token" type="hidden" value="{{ csrf_token() }}">
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

            $('.skema-sertifikasi').on('change', function() {
                var skemaId = this.value;
                $('.posisi-las').html('');

                if (skemaId) {
                    $.ajax({
                        url: "{{ url('admin/get-posisilas') }}",
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
