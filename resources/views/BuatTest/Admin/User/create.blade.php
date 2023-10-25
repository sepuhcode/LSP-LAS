<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Create User</title>
</head>

<body>
    <h3 style="text-align: center;">Create User</h3>
    <form action="/admin/user" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Input Name"
            class="@error('name') is-invalid @enderror">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Input Email"
            class="@error('email') is-invalid @enderror">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password" placeholder="Input Password"
            class="@error('password') is-invalid @enderror">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" placeholder="Input Phone Number"
            class="@error('phone') is-invalid @enderror">
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="address">Address:</label><br>
        <textarea name="address" id="address" rows="3" cols="30"> </textarea><br>

        <label for="role">Choose a role:</label>
        <select id="role" name="role" class="@error('role') is-invalid @enderror">
            <option value="user">User</option>
            <option value="asesor">Asesor</option>
        </select>
        @error('role')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror <br> <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
