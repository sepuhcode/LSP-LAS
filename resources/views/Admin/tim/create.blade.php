@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Upload Foto Karyawan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/tim" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Karyawan </label>
                            <input name="name" type="text" class="form-control" id="name"
                                placeholder="Nama Karyawan.." value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="department">Jabatan </label>
                            <input name="department" type="text" class="form-control" id="department"
                                placeholder="Jabatan.." value="{{ old('department') }}" required>
                            @error('department')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input id="image" name="image" type="file"
                                        class="custom-file-input @error('image') is-invalid @enderror" required>
                                    <label class="custom-file-label" for="image">Pilih File</label>
                                </div>
                                {{-- <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                  </div> --}}
                            </div>
                            @error('image')
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
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@endpush