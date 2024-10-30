@extends('admin.layout')

@section('page')
    Posisi Las
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">Posisi Las</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.posisi-las.create') }}" class="btn btn-tool btn-outline-info text-white">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Posisi Las</th>
                                <th>Skema</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posisis->count() > 0)
                                @foreach ($posisis as $posisi)
                                    <tr>
                                        <td class="td-center text-center">{{ $posisi->id }}</td>
                                        <td class="td-center text-left">{{ $posisi->name }}</td>
                                        <td class="td-center text-left">{{ $posisi->skema->name }}</td>
                                        <td class="td-center text-center">
                                            <a class="btn btn-outline-success"
                                                href="/admin/posisi-las/{{ $posisi->id }}/edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-outline-danger delete-posisi-las"
                                                data-posisiLasId="{{ $posisi->id }}"
                                                data-posisiLasName="{{ $posisi->name }}">
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
