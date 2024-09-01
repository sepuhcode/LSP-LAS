@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Upload Foto Kegiatan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/gambar-kegiatan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Kegiatan </label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nama kegiatan.."
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date">Tanggal </label>
                            <input name="date" type="date" class="form-control" id="date" placeholder="Tanggal.."
                                value="{{ old('date') }}" required>
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input id="image" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" required>
                                    <label class="custom-file-label" for="image">Pilih File</label>
                                </div>
                               
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
