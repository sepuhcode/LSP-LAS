@extends('admin.layout')

@section('page')
    Tim
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">Tim</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.tim.create') }}" class="btn btn-tool btn-outline-info text-white">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($karyawans->count() > 0)
                                @foreach ($karyawans as $karyawan)
                                    <tr>
                                        <td class="td-center text-center">{{ $loop->iteration }}</td>
                                        <td class="td-center text-left">{{ $karyawan->name }}</td>
                                        <td class="td-center text-left">{{ $karyawan->department }}</td>
                                        <td class="td-center text-center">
                                            <img src={{ asset('Images/our-team/' . $karyawan->image) }} alt=""
                                                width="150px">
                                        </td>
                                        <td class="td-center text-center">
                                            <a class="btn btn-outline-success" href="/admin/tim/{{ $karyawan->id }}/edit"
                                                title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-outline-danger delete-karyawan"
                                                data-karyawanId="{{ $karyawan->id }}"
                                                data-karyawanName="{{ $karyawan->name }}" title="Hapus">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            $('#myTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            bsCustomFileInput.init();
        });
    </script>
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
                        $('#form-delete').attr('action', '/admin/tim/' + karyawanId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
