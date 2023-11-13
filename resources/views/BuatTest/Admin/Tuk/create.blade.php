<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create TUK</title>
</head>
<body>
    <form action="\admin\tuk" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">TUK Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Input Name"
            class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="address">Address:</label><br>
        <textarea name="address" id="address" rows="3" cols="30" class="@error('image') is-invalid @enderror"> {{ old('address') }} </textarea>
        @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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