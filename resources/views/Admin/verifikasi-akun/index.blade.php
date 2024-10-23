@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Verifikasi Akun</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No.HP</th>
                                <th>Alamat</th>
                                <th>Terima</th>
                                <th>Tolak</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($registrations->count() > 0)
                                @foreach ($registrations as $registration)
                                    <tr>
                                        <td id="td-center">{{ $loop->iteration }}</td>
                                        <td id="td-center">{{ $registration->name }}</td>
                                        <td id="td-center">{{ $registration->email }}</td>
                                        <td id="td-center">{{ $registration->phone }}</td>
                                        <td id="td-center">{{ $registration->address }}</td>
                                        <td class="center">
                                            <form action="/admin/user/registration/{{ $registration->id }}" method="post">
                                                @method('put')
                                                @csrf
                                                <button class="btn btn-outline-success"><a
                                                    style="text-decoration: none; color:inherit;">Terima</a></button>
                                            </form>
                                        </td>
{{--
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/registration/{{ $registration->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td> --}}

                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-registration"
                                                data-registrationId="{{ $registration->id }}" data-registrationName="{{ $registration->name }}">
                                                Tolak</button>
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
                        $('#form-delete').attr('action', '/admin/user/registration/' + registrationId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
