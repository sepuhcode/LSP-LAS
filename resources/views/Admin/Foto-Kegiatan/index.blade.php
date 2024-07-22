@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Foto Kegiatan</h3>
                    <button class="btn btn-outline-info" style="position: absolute; right:20px; top:15px"><a
                            href="/admin/foto-kegiatan/create" style="color: white">Upload Foto</a></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($kegiatans->count() > 0)
                                @foreach ($kegiatans as $kegiatan)
                                    <tr>
                                        <td id="td-center">{{ $loop->iteration }}</td>
                                        <td id="td-center">{{ $kegiatan->name }}</td>
                                        <td id="td-center">{{ $kegiatan->date }}</td>
                                        <td id="td-center"><img src={{ asset('images/kegiatan/' . $kegiatan->image) }}
                                                alt="" width="150px"></td>
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/foto-kegiatan/{{ $kegiatan->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        {{-- <td>hehehe</td> --}}
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-kegiatan" data-kegiatanId="{{ $kegiatan->id }}"
                                                data-kegiatanName="{{ $kegiatan->name }}">
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

{{-- script sweetalert --}}
@section('optional_script')
    <script>
        $(function() {
            $('.delete-kegiatan').on('click', function() {
                var kegiatanId = $(this).attr('data-kegiatanId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-kegiatanName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/foto-kegiatan/' + kegiatanId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endsection
