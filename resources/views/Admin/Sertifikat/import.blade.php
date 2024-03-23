@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Import Sertifikat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('import-sertifikat') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="excelFile">Import File</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input id="excelFile" name="excelFile" type="file"
                                        class="custom-file-input @error('excelFile') is-invalid @enderror">
                                    <label class="custom-file-label" for="excelFile">Choose file</label>
                                </div>
                                {{-- <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                  </div> --}}
                            </div>
                            @error('excelFile')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
@endsection
