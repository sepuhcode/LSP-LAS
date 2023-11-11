<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Skema Sertifikasi</title>
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
    <a href="/admin/tuk/create">Create Skema Sertifikasi</a>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            {{-- <th>Visibility</th> --}}
            <th colspan="2">Actions</th>
        </tr>
        @if ($skemas->count() > 0 )
        @foreach ($skemas as $skema)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $skema->name }}</td>
        <td> 
            <button><a href="/admin/skema-sertifikasi/{{$skema->id}}/edit" style="text-decoration: none; color:black;">Update</a></button>
        </td>
            <td>
                <form action="/admin/skema-sertifikasi/{{ $skema->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" onClick="return confirm('yakin mau dihapus?');">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
        @endif
       
    </table>
</body>

</html>
