@extends('Admin.layout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/admin/user/{{ $user->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" value="{{ old('name',$user->name) }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ old('email',$user->email) }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input name="password" type="text"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Input Password..." value="{{ old('password') }}">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" placeholder="Input Phone Number..." value="{{ old('phone',$user->phone) }}">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="3"
                                placeholder="Input Address...">{{ old('address',$user->address) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="role">Choose a role:</label>
                            <select name="role" class="form-control @error('role') is-invalid @enderror">
                                <option value="user" {{ $user->hasRole('user')? 'selected' : '' }}>User</option>
                                <option value="asesor" {{ $user->hasRole('asesor')? 'selected' : ''  }}>Asesor</option>
                            </select>
                            @error('role')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status:</label>
                            <select name="is_active" class="form-control @error('is_active') is-invalid @enderror">
                                <option value=1 {{ $user->is_active ? 'selected' : '' }}>Active</option>
                                <option value=0 {{ !$user->is_active ? 'selected' : ''  }}>Inactive</option>
                            </select>
                            @error('is_active')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
@endsection
