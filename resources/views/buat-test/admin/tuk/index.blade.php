<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | TUK</title>
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
    <a href="/admin/tuk/create">Upload TUK</a>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Image</th>
            {{-- <th>Visibility</th> --}}
            <th colspan="2">Actions</th>
        </tr>
        @if ($tuks->count() > 0 )
        @foreach ($tuks as $tuk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tuk->name }}</td>
            <td>{{ $tuk->address }}</td>
            <td><img src={{ asset('Images/tukImg/'.$tuk->image) }} alt="" width="150px"></td>
        <td> 
            {{-- <form action="/admin/tuk/{{ $tuk->id }}/edit" method="post">
            @method('put')
            @csrf
            <input type="submit" value="Update">
            </form> --}}
            <button><a href="/admin/tuk/{{$tuk->id}}/edit" style="text-decoration: none; color:black;">Update</a></button>
        </td>
            <td>
                <form action="/admin/tuk/{{ $tuk->id }}" method="post">
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
