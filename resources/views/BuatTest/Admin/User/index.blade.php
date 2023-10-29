<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Kelola User</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <a href="/admin/user/create">Create User</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Role</th>
            <th>Status</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->getRoleNames()[0] }}</td>
                <td>{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
                <td><a href="/admin/user/{{ $user->id }}/edit">Update</a></td>
                {{-- <td><a href="">Delete</a></td> --}}

                <td>
                    <form action="/admin/user/{{ $user->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" onClick="return confirm('yakin mau dihapus?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
