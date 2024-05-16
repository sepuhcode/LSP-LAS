@extends('layouts.app')
@section('content')
    <div class="row p-0 m-0">
         <img src="{{ asset('Images/Bg-pendaftaran.png') }}" />
    </div>
    <div>
        <div class="daftar">
            <ul class="ul-daftar1">
                <li class="li-daftar-1a"><img src="{{ asset('Images/man standing with laptop and coffee.png') }}" alt=""></li>
                <li class="li-daftar-1b"><img src="{{ asset('Images/1 daftar.png') }}" alt=""></li>
            </ul>
            <ul class="ul-daftar1">
                <li class="li-daftar-1c">
                    <p class="p-daftar">Buat Akun</p>
                    <p class="">Klik pada menu login, lalu pilih daftar untuk membuat akun baru
                    selanjutnya ikuti persyaratan untuk membuat akun baru</p>
                </li>
            </ul>
        </div>
        <div class="daftar">
            <ul class="ul-daftar1">
              
                <li class="li-daftar-1b"><img src="{{ asset('Images/1 daftar.png') }}" alt=""></li>
            </ul>
            <ul class="ul-daftar1">
                <li class="li-daftar-1c">
                    <p class="p-daftar">Buat Akun</p>
                    <p class="">Klik pada menu login, lalu pilih daftar untuk membuat akun baru
                    selanjutnya ikuti persyaratan untuk membuat akun baru</p>
                </li>
            </ul>
        </div>
    </div>
    
    
@endsection
@section('script')
    <script>
        feather.replace();
    </script>
    
    
    
@endsection
