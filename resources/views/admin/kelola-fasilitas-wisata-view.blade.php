@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>DETAIL ATRAKSI WISATA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/daftar-fasilitas')}}">Kelola Daftar Fasilitas</a></li>
                                <li class="breadcrumb-item active">Detail Fasilitas Wisata</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <section id="main-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <section id="main-content">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="col-lg-6">
                                                        <h1>{{$view->nama_fasilitas}}</h1>
                                                    </div>
                                                        <p class="text-muted text-justify">{!!$view->deskripsi!!}</p>
                                                    </div>
                                                    <center>
                                                    <div class="col-lg-6">
                                                        <button class="btn btn-warning" onclick="window.location.href='/ubah-fasilitas-wisata/{{$view->id_fasilitas}}'"><span class="ti-pencil-alt" style="color:black;">&nbspEdit</span></button>
                                                        </div>  
                                                        <center>                                                                                                                                  <!-- /# row -->
                    @include('admin.templateadmin.footer')
