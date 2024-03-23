@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Posisi Las</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="\admin\posisi-las" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Posisi Las</label>
                            <input name="name" type="text" class="form-control" id="name"
                                placeholder="Nama Posisi Las..." value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="skema_sertifikasi_id">Skema Sertifikasi</label>
                            <select name="skema_sertifikasi_id"
                                class="form-control @error('skema_sertifikasi_id') is-invalid @enderror">
                                @foreach ($skemas as $skema)
                                    <option value="{{ $skema->id }}">{{ $skema->name }}</option>
                                @endforeach
                            </select>
                            @error('skema_sertifikasi_id')
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
