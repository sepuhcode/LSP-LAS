@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Skema Sertifikasi</h3>
                    <button class="btn btn-outline-info" style="position: absolute; right:20px; top:15px"><a
                            href="/admin/skema-sertifikasi/create" style="color: white">Tambah</a></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-without-search" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Skema Sertifikasi</th>
                                <th>Nomor Skema</th>
                                <th>Deskripsi</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($skemas->count() > 0)
                                @foreach ($skemas as $skema)
                                    <tr>
                                        <td id="td-center">{{ $skema->id }}</td>
                                        <td id="td-center">{{ $skema->name }}</td>
                                        <td id="td-center">{{ $skema->no_skema }}</td>
                                        <td id="td-center">{{ $skema->deskripsi }}</td>
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/skema-sertifikasi/{{ $skema->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-skema" data-skemaId="{{ $skema->id }}"
                                                data-skemaName="{{ $skema->name }}">
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
            $('.delete-skema').on('click', function() {
                var skemaId = $(this).attr('data-skemaId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-skemaName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/skema-sertifikasi/' + skemaId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endsection
