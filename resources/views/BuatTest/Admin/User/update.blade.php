<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Update User</title>
</head>

<body>
    <h3 style="text-align: center;">Create User</h3>
    <form action="/admin/user/{{ $user->id }}" method="post">
        @method('put')
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Input Name"
            class="@error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Input Email"
            class="@error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password" placeholder="Input Password"
            class="@error('password') is-invalid @enderror" value="{{ old('password') }}">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" placeholder="Input Phone Number"
            class="@error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}">
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="address">Address:</label><br>
        <textarea name="address" id="address" rows="3" cols="30">{{ old('address', $user->address) }}</textarea><br>

        <label for="role">Choose a role:</label>
        <select id="role" name="role" class="@error('role') is-invalid @enderror">
            <option value="user" {{ $user->hasRole('user')? 'selected' : '' }}>User</option>
            <option value="asesor" {{ $user->hasRole('asesor')? 'selected' : ''  }}>Asesor</option>
        </select>
        @error('role')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror <br> <br>

        <label for="is_active">User Status:</label>
        <select id="is_active" name="is_active" {{-- class="@error('is_active') is-invalid @enderror" --}}>
            <option value=1 {{ $user->is_active ? 'selected' : '' }}>Active</option>
            <option value=0 {{ !$user->is_active ? 'selected' : ''  }}>Inactive</option>
        </select>
        @error('is_active')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror <br> <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
