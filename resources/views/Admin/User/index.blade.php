@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User</h3>
                    <button class="btn btn-outline-info" style="position: absolute; right:20px; top:15px"><a
                            href="/admin/user/create" style="color: white">Add User</a></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users->count() > 0)
                                @foreach ($users as $user)
                                    <tr>
                                        <td id="td-center">{{ $loop->iteration }}</td>
                                        <td id="td-center">{{ $user->name }}</td>
                                        <td id="td-center">{{ $user->email }}</td>
                                        <td id="td-center">{{ $user->phone }}</td>
                                        <td id="td-center">{{ $user->address }}</td>
                                        <td id="td-center">{{ $user->getRoleNames()[0] }}</td>
                                        <td id="td-center">{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
                                        
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/user/{{ $user->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        {{-- <td>hehehe</td> --}}
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-user" data-userId="{{ $user->id }}"
                                                data-userName="{{ $user->name }}">
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
@endsection
