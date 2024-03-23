<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | registration</title>
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
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ($registrations as $registration)
            <tr>
                <td>{{ $registration->name }}</td>
                <td>{{ $registration->email }}</td>
                <td>{{ $registration->phone }}</td>
                <td>{{ $registration->address }}</td>
                {{-- <td><a href="/admin/registration/{{ $registration->id }}/edit">Update</a></td> --}}
                <td>
                    <form action="/admin/registration/{{ $registration->id }}" method="post">
                    @method('put')
                    @csrf
                    <button type="submit">Accept</button>
                    </form>
                    {{-- <a href="/admin/registration/{{ $registration->id }}/edit">Accept</a> --}}
                </td>
                <td>
                    <form action="/admin/registration/{{ $registration->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" onClick="return confirm('yakin mau ditolak?');">Reject</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
