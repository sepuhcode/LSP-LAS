<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Skema Sertifikasi</title>
</head>
<body>
    <form action="/admin/skema-sertifikasi/{{ $skema->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <label for="name">Skema Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Input Name"
            class="@error('name') is-invalid @enderror" value="{{ old('name', $tuk->name) }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>