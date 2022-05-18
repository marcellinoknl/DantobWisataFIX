@include('admin.templateadmin.header')


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>

                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class=" ti-user color-primary border-primary"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Pengguna Terdaftar</div>
                                    <div class="stat-digit">{{$users}}</div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                </div>
                                <div class="stat-content dib">

                                    <div class="stat-text">Total Atraksi</div>
                                    <div class="stat-digit">{{$atraksi}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Objek Wisata </div>
                                    <div class="stat-digit">{{$objek}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Fasilitas</div>
                                    <div class="stat-digit">{{$fasilitas}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-facebook">
                                    <i class="ti-facebook"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">8,268</div>
                                    <div class="stat-text">Likes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-youtube">
                                    <i class="ti-youtube"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">12,545</div>
                                    <div class="stat-text">Subscribes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-twitter">
                                    <i class="ti-twitter"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">7,982</div>
                                    <div class="stat-text">Tweets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-danger">
                                    <i class="ti-linkedin"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">9,658</div>
                                    <div class="stat-text">Followers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@include('admin/templateadmin/footer')