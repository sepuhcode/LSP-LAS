@extends('Admin.layout')

@push('style')
    <!-- summernote -->
    <link rel="stylesheet" href={{ asset('admin_template/plugins//summernote/summernote-bs4.min.css') }}>
@endpush

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-9 col-sm">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Skema Sertifikasi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/skema-sertifikasi" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Skema Sertifikasi</label>
                            <input name="name" type="text" class="form-control" id="name"
                                placeholder="Nama Skema Sertifikasi..." value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_skema">Nomor Skema</label>
                            <input name="no_skema" type="text" class="form-control" id="no_skema"
                                placeholder="Nomor Skema Sertifikasi..." value="{{ old('no_skema') }}" required>
                            @error('no_skema')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="summernote">Deskripsi</label>
                            <textarea name="deskripsi" id="summernote" class="form-control @error('deskripsi') is-invalid @enderror" rows="3"
                                placeholder="Enter deskripsi...">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
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
    <!-- Summernote -->
    <script src={{ asset('admin_template/plugins/summernote/summernote-bs4.min.js') }}></script>
    <script>
        // Summernote
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen']],
            ],
        })
    </script>
@endpush
