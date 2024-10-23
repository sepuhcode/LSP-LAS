@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Foto Karyawan</h3>
                    <div class="card-tools">
                        <button class="btn btn-tool btn-outline-info"><a
                                href="/admin/gambar-karyawan/create" style="color: white">Upload Foto</a></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($karyawans->count() > 0)
                                @foreach ($karyawans as $karyawan)
                                    <tr>
                                        <td id="td-center">{{ $loop->iteration }}</td>
                                        <td id="td-center">{{ $karyawan->name }}</td>
                                        <td id="td-center">{{ $karyawan->department }}</td>
                                        <td id="td-center"><img src={{ asset('Images/our-team/' . $karyawan->image) }}
                                                alt="" width="150px"></td>
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/gambar-karyawan/{{ $karyawan->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        {{-- <td>hehehe</td> --}}
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-karyawan"
                                                data-karyawanId="{{ $karyawan->id }}"
                                                data-karyawanName="{{ $karyawan->name }}">
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
            $('.delete-karyawan').on('click', function() {
                var karyawanId = $(this).attr('data-karyawanId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-karyawanName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/gambar-karyawan/' + karyawanId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
