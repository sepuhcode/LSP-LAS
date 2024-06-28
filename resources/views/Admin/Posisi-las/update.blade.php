@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Posisi Las</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/posisi-las/{{ $posisiLas->id }}" method="POST" >
                    @method('put')
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Posisi Las </label>
                            <input name="name" type="text" class="form-control" id="name"
                                value="{{ old('name', $posisiLas->name) }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="skema_sertifikasi_id">Skema Sertifikasi</label>
                            <select name="skema_sertifikasi_id"
                                class="form-control @error('skema_sertifikasi_id') is-invalid @enderror">
                                @foreach ($skemas as $skema)
                                    <option value="{{ $skema->id }}" {{ $posisiLas->skema_sertifikasi_id == $skema->id ? 'selected':''}}>{{ $skema->name }}</option>
                                @endforeach
                            </select>
                            @error('skema_sertifikasi_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
@endsection
