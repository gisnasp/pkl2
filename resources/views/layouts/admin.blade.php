
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/admin/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/DataTables/datatables.min.css')}}"/>
    <link href="{{asset('assets/select/select2/dist/css/select2.css')}}" rel="stylesheet"/>
    <title>Borrowing Books</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand">Books</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/admin/images/images.png')}}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"> {{ Auth::user()->name }} </h5>
                                    <span class="status"></span><span class="ml-2">Selamat Datang</span>
                                </div>
                                    <div>   
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title"><center>Dashboard Borrowing Books </center></h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        @yield('content')
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                {{-- <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                 Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                                
                            <ul class="nav flex-column">
                            @guest
                            @else
                            @role('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/peminjaman') }}">Peminjaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/penerbit') }}">Penerbit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/kategori') }}">Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/petugas') }}">Petugas</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/detail') }}">Detail</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/buku') }}">Buku</a>
                            </li>
                            @endrole 
                            @endguest 

                            @guest
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/peminjam') }}">Peminjam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/pendaftaran') }}">Pendaftaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/detail') }}">Detail</a>
                            </li>
                          
                            @endguest 
        
                            @guest
                            @else
                            @role('petugas')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('petugas/petugas') }}">Petugas</a>
                            </li>
                            @endrole
                            @endguest                             
                        </ul>
                           
                    </div>  
                </li>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('assets/admin/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('assets/admin/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/admin/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('assets/admin/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('assets/admin/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('assets/admin/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('assets/admin/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('assets/admin/libs/js/dashboard-ecommerce.js')}}"></script>
    <script src="{{asset('assets/select/select2/dist/js/select2.js')}}"></script>
    <script src="{{asset('assets/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script>
    $(document).ready(function() {
    $('#datatable').DataTable();
});
    </script>    
    <script type="text/javascript">
    function limit_checkbox(max,identifier)
    {
        var checkbox = $("input[name='detail_kembali']");
        var checked  = $("input[name='detail_kembali']:checked").length;
        checkbox.filter(':not(:checked)').prop('disabled', checked >= max);
        
    }
    </script>
    <script type="text/javascript">
    function limit_checkbox(max,identifier)
    {
        var checkbox = $("input[name='kartu_aktif']");
        var checked  = $("input[name='kartu_aktif']:checked").length;
        checkbox.filter(':not(:checked)').prop('disabled', checked >= max);
        
    }
    </script>
</body>
 
</html>
