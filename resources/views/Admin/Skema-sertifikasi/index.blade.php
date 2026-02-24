@extends('admin.layout')

@section('page')
    Skema Sertifikasi
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">Skema Sertifikasi</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.skema-sertifikasi.create') }}"
                                class="btn btn-tool btn-outline-info text-white">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Skema Sertifikasi</th>
                                <th>Nomor Skema</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($skemas->count() > 0)
                                @foreach ($skemas as $skema)
                                    <tr>
                                        <td class="td-center text-center">{{ $skema->id }}</td>
                                        <td class="td-center text-left">{{ $skema->name }}</td>
                                        <td class="td-center text-left">{{ $skema->no_skema }}</td>
                                        <td class="td-center text-center">
                                            <a class="btn btn-outline-success"
                                                href="/admin/skema-sertifikasi/{{ $skema->id }}/edit" title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-outline-danger delete-skema"
                                                data-skemaId="{{ $skema->id }}" data-skemaName="{{ $skema->name }}"
                                                title="Hapus">
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
            $(document).on('click', '.delete-skema', function() {
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
@endpush
