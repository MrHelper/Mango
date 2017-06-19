<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="/img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminCP</title>

    <!-- Icons -->
    <link href="{{ asset('/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('/css/admin-style.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/summernote.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" />
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>

        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admincp.Menu')}}"><i class="fa fa-tachometer"></i> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admincp.Menu')}}"><i class="fa fa-chevron-right"></i> Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admincp.Product')}}"><i class="fa fa-chevron-right"></i> Sản phẩm</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">
            <div class="container-fluid">
            @yield('body.content')
            </div>
            <!-- /.conainer-fluid -->
        </main>


    </div>

    <footer class="app-footer">
        <p>© 2015-2017 <a href="/">mango-medical.com.vn</a> All rights reserved.</p>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>
    <script src="{{ asset('/js/stupidtable.min.js')}}"></script>
    <script src="{{ asset('/js/summernote.min.js')}}"></script>
    <script src="{{ asset('/js/summernote-vi-VN.min.js')}}"></script>
    


    <!-- GenesisUI main scripts -->

    <script src="{{ asset('/js/admin-app.js')}}"></script>
    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->

    @yield('body.script')
</body>

</html>