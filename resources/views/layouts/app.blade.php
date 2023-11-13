<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP-WEB</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css " rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    {{-- @if (request()->session()->has('failed'))
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Data tidak ditemukan',
                icon: 'error',
                confirmButtonText: 'Close'
            })
            request()->session()->flush();
        </script>
    @endif --}}

    {{-- Script --}}
    <script src="https://unpkg.com/feather-icons"></script>
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="{{asset('js/jquery-3.7.1.js')}}"></script>
    @yield('script')
</body>

</html>
