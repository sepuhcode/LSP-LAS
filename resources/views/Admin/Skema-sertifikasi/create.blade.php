@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Skema Sertifikasi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="\admin\skema-sertifikasi" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Skema Sertifikasi</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nama Skema Sertifikasi..."
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_skema">Nomor Skema</label>
                            <input name="no_skema" type="text" class="form-control" id="no_skema" placeholder="Nomor Skema Sertifikasi..."
                                value="{{ old('no_skema') }}">
                            @error('no_skema')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3"
                                placeholder="Enter deskripsi...">{{ old('deskripsi') }}</textarea>
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
