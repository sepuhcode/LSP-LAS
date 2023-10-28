<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update TUK</title>
</head>
<body>
    <form action="/admin/tuk/{{ $tuk->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <label for="name">TUK Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Input Name"
            class="@error('name') is-invalid @enderror" value="{{ old('name', $tuk->name) }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="address">Address:</label><br>
        <textarea name="address" id="address" rows="3" cols="30"> {{ old('address', $tuk->address) }} </textarea>
        <br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image" placeholder="Upload image"
            class="@error('image') is-invalid @enderror">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>