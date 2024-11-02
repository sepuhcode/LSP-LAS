@extends('layouts.app')
@push('style')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .card-login-daftar {
            width: 30%;
        }

        @media (max-width: 450px) {
            .card-login-daftar {
                width: 90%;
            }
        }
    </style>
@endpush

@section('content')
    <section class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-12">
            <div class="card card-login-daftar mx-auto">
                <div class="card-body">
                    <form action="/daftar/store" method="POST" class="form-input">
                        @csrf
                        <div class="text-center">
                            <h2 class="fw-bold mb-4">Daftar</h2>
                        </div>
                        <div class="mb-3 ">
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" id="name" name="name" placeholder="Masukkan nama"
                                required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="Masukkan alamat email" required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror" id="password"
                                name="password" placeholder="Masukkan password" required>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                id="phone" name="phone" placeholder="Masukkan nomor hp" required>
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control form-control-lg @error('address') is-invalid @enderror" id="address" name="address"
                                rows="3" placeholder="Masukkan alamat" required></textarea>
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center text-lg-start mt-4">
                            <button type="submit" class="btn btn-primary btn-md px-4">
                                Daftar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
