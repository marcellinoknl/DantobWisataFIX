<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pariwisata Danau Toba</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->

     <link href="{{asset('assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script> --}}

    <!-- Data Table -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <style>
                table{
            width:100%;
        }
        #example_filter{
            float:right;
        }
        #example_paginate{
            float:right;
        }
        .labeltabel {
            display: inline-flex;
            margin-bottom: .5rem;
            margin-top: .5rem;
        
        }
    </style>

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{url('/admin-wisata')}}">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>Danau Toba Admin</span>
                        </a></div>
                    <li class="label">Halaman Utama</li>
                    <li><a href="{{url('/admin-wisata')}}"><i class="ti-dashboard"></i> Dashboard </a></li>

                    <li class="label">Kelola Data Wisata</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-direction"></i> Kelola Objek Wisata <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            @if ( auth()->user()->role ==3)
                            <li><a href="{{url('/kelolakat')}}">Kelola Kategori Wisata</a></li>
                            <li><a href="{{url('/kelolakab')}}">Kelola Kabupaten</a></li>
                            <li><a href="{{url('/kelolaobjek')}}">Kelola Per-Objek Wisata</a></li>
                            @else
                            <li><a href="{{url('/kelolaobjek')}}">Kelola Objek Wisata</a></li>
                            @endif
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-direction-alt"></i> Kelola Atraksi <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            @if ( auth()->user()->role ==3)
                            <li><a href="{{url('/sampul-atraksi')}}">Kelola Sampul Atraksi</a></li>
                            <li><a href="{{url('/kelolaatraksi')}}">Kelola Atraksi Wisata</a></li>
                            @else
                            <li><a href="{{url('/kelolaatraksi')}}">Kelola Atraksi Wisata</a></li>
                            @endif
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-layers"></i> Kelola Event <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        @if ( auth()->user()->role ==3)
                        <li><a href="{{url('/sampul-event')}}">Kelola Sampul Event</a></li>
                        <li><a href="{{url('/kelolaevent')}}">Kelola Event Wisata</a></li> 
                        @else
                        <li><a href="{{url('/kelolaevent')}}">Kelola Event Wisata</a></li>
                        @endif
                        </ul>
                    <li><a href="{{url('/kelolaberita')}}"><i class="ti-announcement"></i> Kelola Berita Wisata </a></li>
                    <li>
                        @if ( auth()->user()->role ==3)
                        <a href="{{url('/kelolagaleri')}}"><i class="ti-gallery"></i> Kelola Galeri Wisata </a>
                        @endif
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-settings"></i> Kelola Fasilitas <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            @if ( auth()->user()->role ==3)
                            <li><a href="{{url('/sampul-fasilitas')}}">Kelola Sampul Fasilitas</a></li>
                            <li><a href="{{url('/daftar-fasilitas')}}">Kelola Per-Fasilitas</a></li>
                            @else
                            <li><a href="{{url('/daftar-fasilitas')}}">Kelola Fasilitas</a></li>
                            @endif
                        </ul>
                    </li>
                    @if ( auth()->user()->role ==3)
                    <li><a class="sidebar-sub-toggle"><i class="ti-id-badge"></i>Pengalaman Wisata <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                           
                            <li><a href="{{url('/kelolapengalamanwisata')}}">Kelola Pengalaman Wisata</a></li>
                            <li><a href="{{url('/persetujuanpengalamanwisata')}}">Persetujuan Pengalaman</a></li>
                       
                        </ul>
                    </li>
                    @endif
                    @if ( auth()->user()->role ==3)
                    <li><a href="{{url('/kelolauser')}}"><i class="ti-user"></i> Kelola Akun User </a></li>
                    <li><a href="{{url('/')}}"><i class="ti-home"></i> Halaman Pengunjung </a></li>
                    @endif
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Notifikasi</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Marcel</div>
                                                        <div class="notification-text">user baru</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Samuel</div>
                                                        <div class="notification-text">Notif baru</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Noel</div>
                                                        <div class="notification-text">Pengalaman Baru
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="text-center">
                                                <a href="#" class="more-link">Lihat Selengkapnya</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{ Auth::user()->name }}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">{{ Auth::user()->name }}</span>
                                        <p class="trial-day"></p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>


                                            <li>
                                              
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>   </a> 
                                                </button>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>