<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title')</title>
    {{--  Icons  --}}
    <link href="{{ asset('vendors/coreui/vendors/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/coreui/vendors/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/coreui/vendors/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables/css/datatables.min.css')}}" rel="stylesheet">
    {{--   Main styles for this application  --}}
    <link href="{{ asset('vendors/coreui/css/style.css') }}" rel="stylesheet">
    <link href="vendors/css/pace.min.css" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            ADMIN
            <b>Kostan.com</b>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Admin
                    <img class="img-avatar" src="{{ asset('vendors/coreui/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-bell-o"></i> Updates
                        <span class="badge badge-info">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-envelope-o"></i> Messages
                        <span class="badge badge-success">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-tasks"></i> Tasks
                        <span class="badge badge-danger">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-comments"></i> Comments
                        <span class="badge badge-warning">42</span>
                    </a>
                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-usd"></i> Payments
                        <span class="badge badge-secondary">42</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-file"></i> Projects
                        <span class="badge badge-primary">42</span>
                    </a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Theme</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/">
                            <i class="nav-icon icon-speedometer"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nav-icon icon-user"></i> Data User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nav-icon icon-user-follow"></i> Data Pemilik</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                         <i class="nav-icon icon-home"></i> Data Kost</a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon icon-docs"></i> Lainnya </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/fasumum/">
                                    <i class="nav-icon icon-basket-loaded"></i> Fasilitas Umum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/faskamar/">
                                    <i class="nav-icon icon-briefcase"></i> Fasilitas Kamar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/faskamarmandi/">
                                    <i class="nav-icon icon-home"></i> Fasilitas Kamar Mandi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/lingkungan/">
                                    <i class="nav-icon icon-map"></i> Akses Lingkungan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/waktu/">
                                    <i class="nav-icon icon-clock"></i> Waktu Harga</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
            {{--  Breadcrumb  --}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
                <!-- Breadcrumb Menu-->
            </ol>
            {{--  <h3 class="mb-3">@yield('title')</h3>  --}}
            @yield('content')
             {{--  Body   --}}
        </main>
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://coreui.io">CoreUI</a>
            <span>&copy; 2018 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io">CoreUI</a>
        </div>
    </footer>
     {{--  Bootstrap and necessary plugins  --}}
    <script src="{{ asset('vendors/coreui/vendors/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/coreui/vendors/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/coreui/vendors/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/coreui/vendors/js/pace.min.js') }}"></script>
    <script src="{{ asset('vendors/coreui/vendors/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendors/coreui/vendors/js/coreui.min.js') }}"></script>
     {{--  Data tables   --}}
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/datatables.min.js') }}"></script>
     {{--  Plugins and scripts required by this view  --}}
    <script src = "{{ asset('vendors/coreui/vendors/js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/coreui/vendors/js/custom-tooltips.min.js') }}"></script>
    <script src="{{ asset('vendors/coreui/js/main.js') }}"></script>
     {{--  Costum JS   --}}
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>