<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Carousel</title>
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
    <a href="/admin/carousel/create">Upload Carousel Image</a>
    <table>
        <tr>
            <th>No</th>
            <th>Image</th>
            {{-- <th>Visibility</th> --}}
            <th colspan="2">Actions</th>
        </tr>
        @if ($carousels->count() > 0)
            @foreach ($carousels as $carousel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src={{ asset('Images/carouselImg/' . $carousel->image) }} alt="" width="150px"></td>
                    <td>
                        <form action="/admin/carousel/{{ $carousel->id }}" method="post">
                            @method('put')
                            @csrf
                            <input type="submit" value="{{ $carousel->visibility ? 'Hide' : 'Show' }}">
                        </form>
                    </td>
                    <td>
                        <form action="/admin/carousel/{{ $carousel->id }}" method="post">
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
