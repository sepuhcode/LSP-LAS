<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Carousel</title>
</head>
<body>
    <form action="\admin\carousel" method="POST" enctype="multipart/form-data">
        @csrf
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