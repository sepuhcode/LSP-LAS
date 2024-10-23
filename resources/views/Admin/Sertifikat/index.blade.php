@extends('admin.layout')

@push('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sertifikat</h3>
                    <div class="card-tools">

                        <button class="btn btn-outline-info btn-tool" ><a
                            href="/admin/sertifikat/import" style="color: white">Import Excel</a></button>
                        <button class="btn btn-outline-info btn-tool" ><a
                            href="/admin/sertifikat/create" style="color: white">Tambah Sertifikat</a></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No.Sertifikat</th>
                                <th>No.Registrasi Sertifikat</th>
                                <th>Skema Sertifikasi</th>
                                <th>Posisi Las</th>
                                <th>TUK</th>
                                <th>No.Blangko</th>
                                <th>Tanggal Uji</th>
                                <th>Tanggal Sertifikat</th>
                                <th>Asesor 1</th>
                                <th>Asesor 2</th>
                                <th>Scan Sertifikat</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($sertifikats->count() > 0)
                                @foreach ($sertifikats as $sertifikat)
                                    <tr>
                                        <td id="td-center">{{ $loop->iteration }}</td>
                                        <td id="td-center">{{ $sertifikat->name }}</td>
                                        <td id="td-center">{{ $sertifikat->no_sertifikat }}</td>
                                        <td id="td-center">{{ $sertifikat->no_reg_sertifikat }}</td>
                                        <td id="td-center">{{ $sertifikat->skemaSertifikasi->name }}</td>
                                        <td id="td-center">{{ $sertifikat->posisiLas->name }}</td>
                                        <td id="td-center">{{ $sertifikat->tuk}}</td>
                                        <td id="td-center">{{ $sertifikat->no_blangko }}</td>
                                        <td id="td-center">{{ $sertifikat->tgl_uji }}</td>
                                        <td id="td-center">{{ strtotime('01-01-1970')==strtotime($sertifikat->tgl_sertifikat)?'': date('d-m-Y',strtotime($sertifikat->tgl_sertifikat)) }}</td>
                                        <td id="td-center">{{ $sertifikat->asesor->name }}</td>
                                        <td id="td-center">{{ $sertifikat->asesor2!=null?$sertifikat->asesor2->name:'' }}</td>
                                        <td id="td-center">
                                            @if ($sertifikat->file_scan_sertifikat != null)
                                            <button target="_blank" class="btn btn-view btn-outline-success"><a style="color: white" target="_blank" href="/admin/view-file/{{ $sertifikat->file_scan_sertifikat }}">view</a></button></td>
                                            @endif
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/sertifikat/{{ $sertifikat->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        {{-- <td>hehehe</td> --}}
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-sertifikat"
                                                data-sertifikatId="{{ $sertifikat->id }}" data-sertifikatName="{{ $sertifikat->name }}">
                                                <i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection

@push('script')
    <script>
        $(function() {


            $('.delete-sertifikat').on('click', function() {
                var sertifikatId = $(this).attr('data-sertifikatId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-sertifikatName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/sertifikat/' + sertifikatId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
