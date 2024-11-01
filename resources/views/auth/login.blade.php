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
                    <form action="/login/authenticate" method="POST">
                        @csrf
                        <div class="text-center">
                            <h2 class="fw-bold mb-4">Login Atau Daftar</h2>
                        </div>
                        <div class="form-outline mb-3">
                            <input name="email" type="email" class="form-control form-control-lg"
                                placeholder="Masukkan alamat email" required />
                        </div>
                        <div class="form-outline mb-3">
                            <input name="password" type="password" class="form-control form-control-lg"
                                placeholder="Masukkan password" required />
                        </div>
                        <div class="text-center text-lg-start mt-4">
                            <button type="submit" class="btn btn-primary btn-md px-4">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun?
                                <a href="/daftar" class="link-danger">
                                    Daftar
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
