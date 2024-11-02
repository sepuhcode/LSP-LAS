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
                        <thead class="text-center">
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
                                            @if ($registration->accepted === null)
                                                <button class="btn btn-outline-success accept-registration"
                                                    data-registration-id="{{ $registration->id }}"
                                                    data-registration-name="{{ $registration->name }}">
                                                    Terima
                                                </button>
                                                <button class="btn btn-outline-danger reject-registration"
                                                    data-registration-id="{{ $registration->id }}"
                                                    data-registration-name="{{ $registration->name }}">
                                                    Tolak
                                                </button>
                                            @endif
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

    <form id="form-action" method="POST" style="display: none;">
        @csrf
    </form>
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
            $('.accept-registration').on('click', function() {
                var registrationId = $(this).attr('data-registration-id');
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: "Terima Pendaftaran Akun " + $(this).attr('data-registration-name') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-action').attr('action', '/admin/verification/accept/' +
                            registrationId);
                        $('#form-action').submit();
                    }
                });
            });

            $('.reject-registration').on('click', function() {
                var registrationId = $(this).attr('data-registration-id');
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: "Tolak Pendaftaran Akun " + $(this).attr('data-registration-name') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-action').attr('action', '/admin/verification/reject/' +
                            registrationId);
                        $('#form-action').submit();
                    }
                });
            });
        });
    </script>
@endpush
