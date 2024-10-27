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

        .h-custom {
            height: calc(100% - 73px);
        }

        .form-input {
            width: 92%;
        }

        .card-login-daftar {
            width: 92%;
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }

            .card-login-daftar {
                width: 100%;
            }
        }
    </style>
@endpush

@section('content')
    <section class="">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                {{-- <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div> --}}
                <div class="col-6 col-md-8 col-lg-6 col-xl-4 offset-xl-1 my-3">
                    <div class="card card-login-daftar">
                        <div class="card-body">
                            <form action="/login" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input name="email" type="email" class="form-control form-control-lg"
                                        placeholder="Masukkan alamat email" />
                                    <label class="form-label">Alamat Email</label>
                                </div>
                                <div class="form-outline mb-3">
                                    <input name="password" type="password" class="form-control form-control-lg"
                                        placeholder="Masukkan password" />
                                    <label class="form-label">Password</label>
                                </div>
                                {{-- <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    {{-- <div class="form-check mb-0">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3" />
                                        <label class="form-check-label">
                                            Remember me
                                        </label>
                                    </div> --}}
                                {{-- <a href="#!" class="text-body">Forgot password?</a>
                                </div> --}}
                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun?<a href="/daftar"
                                            class="link-danger"> Register</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
