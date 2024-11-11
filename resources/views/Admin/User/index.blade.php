@extends('Admin.layout')

@section('page')
    User
@endsection

@push('style')
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">User</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.user.create') }}" class="btn btn-tool btn-outline-info text-white">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <select id="roleFilter" class="form-control">
                                <option value="">All Roles</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No.HP</th>
                                <th>Alamat</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count() > 0)
                                @foreach ($data as $user)
                                    <tr>
                                        <td class="td-center text-center">{{ $loop->iteration }}</td>
                                        <td class="td-center text-left">{{ $user->name }}</td>
                                        <td class="td-center text-left">{{ $user->email }}</td>
                                        <td class="td-center text-left">{{ $user->phone }}</td>
                                        <td class="td-center text-left">{{ $user->address }}</td>
                                        <td class="td-center text-left text-capitalize">{{ $user->getRoleNames()[0] }}</td>
                                        <td class="td-center text-left">{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
                                        <td class="td-center text-center">
                                            <a class="btn btn-outline-success" href="/admin/user/{{ $user->id }}/edit"
                                                title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-outline-danger delete-user"
                                                data-userId="{{ $user->id }}" data-userName="{{ $user->name }}"
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
            var table = $('#myTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            // Filter by role
            $('#roleFilter').on('change', function() {
                var selectedRole = $(this).val();
                table.column(5).search(selectedRole).draw(); // Adjust column index if needed
            });

            bsCustomFileInput.init();
        });
    </script>
    <script>
        $(function() {
            $('.delete-user').on('click', function() {
                var userId = $(this).attr('data-userId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-userName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/user/' + userId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
