<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | LSP Las</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href={{ asset('admin_template/plugins/fontawesome-free/css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin_template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin_template/dist/css/adminlte.css') }}>
    <link rel="stylesheet" href={{ asset('admin_template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet"
        href={{ asset('admin_template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin_template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href={{ asset('admin_template/plugins/sweetalert2/sweetalert2.min.css') }}>
    @stack('style')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"
                        title="Log Out">
                        <i class="fas fa-sign-out"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src={{ asset('Images/Logo-LSP-3.png') }} alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">LSP Las</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block test-alert">Your Name</a>
                    </div>
                </div>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item {{ request()->is('admin/user*') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fad fa-users"></i>
                                <p>
                                    Manajemen User
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/user/registration"
                                        class="nav-link {{ request()->is('admin/user/registration') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Verifikasi Akun</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/user-asesor"
                                        class="nav-link {{ request()->is('admin/user-asesor') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asesor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/user-tuk"
                                        class="nav-link {{ request()->is('admin/user-tuk') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User TUK</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/user-user"
                                        class="nav-link {{ request()->is('admin/user-user') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ request()->is('admin/gambar*') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fad fa-images"></i>
                                <p>
                                    Gambar
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="/admin/gambar-carousel"
                                        class="nav-link {{ request()->is('admin/gambar-carousel') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Carousel</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="/admin/gambar-karyawan"
                                        class="nav-link {{ request()->is('admin/gambar-karyawan') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Karyawan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/tuk" class="nav-link {{ request()->is('admin/tuk') ? 'active' : '' }}">
                                <p>
                                    TUK
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/skema-sertifikasi"
                                class="nav-link {{ request()->is('admin/skema-sertifikasi') ? 'active' : '' }}">
                                <p>
                                    Skema Sertifikasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/posisi-las"
                                class="nav-link {{ request()->is('admin/posisi-las') ? 'active' : '' }}">
                                <p>
                                    Posisi Las
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/sertifikat"
                                class="nav-link {{ request()->is('admin/sertifikat*') ? 'active' : '' }}">
                                <p>
                                    Sertifikat
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin | Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 Nterco.id</strong>
            All rights reserved.
        </footer>
    </div>
    <form style="display: none" method="post" action="" id="form-delete">
        @method('delete')
        @csrf
    </form>


    <script src={{ asset('admin_template/plugins/jquery/jquery.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <script src={{ asset('admin_template/dist/js/adminlte.js') }}></script>
    <script src={{ asset('admin_template/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}></script>
    <script src={{ asset('admin_template/plugins/raphael/raphael.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/jquery-mapael/jquery.mapael.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/jquery-mapael/maps/usa_states.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/chart.js/Chart.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/jszip/jszip.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/pdfmake/pdfmake.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/pdfmake/vfs_fonts.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-buttons/js/buttons.print.min.js') }}></script>
    <script src={{ asset('admin_template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>

    <script src={{ asset('admin_template/plugins/sweetalert2/sweetalert2.min.js') }}></script>

    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                // "pageLength": 25,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            $('#table-without-search').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            //bs custom file input
            bsCustomFileInput.init();
        });
    </script>
    <script src={{ asset('admin_template/dist/js/pages/dashboard2.js') }}></script>

    @if (session()->has('success'))
        // success message
        <script>
            Swal.fire({
                position: 'auto',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timerProgressBar: true,
                timer: 1500
            });
        </script>
    @endif

    @stack('script');
</body>

</html>
