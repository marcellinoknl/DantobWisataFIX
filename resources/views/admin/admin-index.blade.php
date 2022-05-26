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
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-direction-alt color-success border-success"></i>
                                </div>
                                <div class="stat-content dib">

                                    <div class="stat-text">Total Atraksi</div>
                                    <div class="stat-digit">{{$atraksi}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout color-green border-green"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Objek Wisata </div>
                                    <div class="stat-digit">{{$objek}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-car color-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Fasilitas</div>
                                    <div class="stat-digit">{{$fasilitas}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-agenda color-warning border-warning"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Event</div>
                                    <div class="stat-digit">{{$event}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-id-badge color-info border-info"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Pengalaman</div>
                                    <div class="stat-digit">{{$pengalaman}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>

                    </div>
                </div>


                <!-- /# row -->
                <div class="row">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


                </div>



@include('admin/templateadmin/footer')