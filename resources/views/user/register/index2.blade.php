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
/* 
        .h-custom {
            height: calc(100% - 73px);
        } */

        /* .form-input {
            width: 92%;
        } */
        /* .img-register{
            margin-left: 50%;
        } */

        .card-login-daftar{
        width: 92%;
        margin-top: 10px; 
        }

        @media (max-width: 768px) {
            .card-login-daftar{
            width: 100%;
            margin-top: -600px 0 0 0;
            }
        }

        @media (max-width: 450px) {
            /* .h-custom {
                height: 100%;
            } */

            /* .form-input {
                width: 100%;
            } */
            .card-login-daftar{
            width: 100%;
            margin-top:-240px;
            }

            .img-register{
                visibility: hidden;
                margin: 0 0 0 0;
            }
        }
    </style>
@endpush

@section('content')
    <section class="">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid img-register" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mb-4">
                    <div class="card card-login-daftar">
                        <div class="card-body">
                            <form action="/register" method="POST" class="form-input">
                                @csrf
                                <div class="mb-3 ">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name')}}" id="name" name="name" required>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">No. Handphone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3" required>
                                        @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </textarea>
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
