@extends('admin.layout')

@section('page')
    Verifikasi
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Verifikasi</h3>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No.HP</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($registrations->count() > 0)
                                @foreach ($registrations as $registration)
                                    <tr>
                                        <td class="td-center text-center">{{ $loop->iteration }}</td>
                                        <td class="td-center text-left">{{ $registration->name }}</td>
                                        <td class="td-center text-left">{{ $registration->email }}</td>
                                        <td class="td-center text-left">{{ $registration->phone }}</td>
                                        <td class="td-center text-left">{{ $registration->address }}</td>
                                        <td class="td-center text-center">
                                            <form action="/admin/verification/{{ $registration->id }}" method="post">
                                                @method('put')
                                                @csrf
                                                <button class="btn btn-outline-success">
                                                    Terima
                                                </button>
                                            </form>
                                            <button class="btn btn-outline-danger delete-registration"
                                                data-registrationId="{{ $registration->id }}"
                                                data-registrationName="{{ $registration->name }}">
                                                Tolak
                                            </button>
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
            $('.delete-registration').on('click', function() {
                var registrationId = $(this).attr('data-registrationId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "Tolak Pendaftaran Akun " + $(this).attr('data-registrationName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/verification/' +
                            registrationId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
