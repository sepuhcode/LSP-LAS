@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Posisi Las</h3>
                    <div class="card-tools">
                        <button class="btn btn-tool btn-outline-info"><a
                                href="/admin/posisi-las/create" style="color: white">Tambah Posisi Las</a></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-without-search" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Posisi Las</th>
                                <th>Skema</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posisis->count() > 0)
                                @foreach ($posisis as $posisi)
                                    <tr>
                                        <td id="td-center">{{ $posisi->id }}</td>
                                        <td id="td-center">{{ $posisi->name }}</td>
                                        <td id="td-center">{{ $posisi->skema->name }}</td>
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/posisi-las/{{ $posisi->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-posisi-las"
                                                data-posisiLasId="{{ $posisi->id }}"
                                                data-posisiLasName="{{ $posisi->name }}">
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
            $('.delete-posisi-las').on('click', function() {
                var posisiLasId = $(this).attr('data-posisiLasId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-posisiLasName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/posisi-las/' + posisiLasId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
