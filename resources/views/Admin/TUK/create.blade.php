@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Upload TUK</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="\admin\tuk" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">TUK </label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nama TUK.."
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="3"
                                placeholder="Alamat..">{{ old('address') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input id="image" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror">
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
