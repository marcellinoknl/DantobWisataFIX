@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>DETAIL BERITA WISATA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                {{-- <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/kelolaberita')}}">Kelola Event</a></li>
                                <li class="breadcrumb-item active">Detail Berita Wisata</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div> --}}
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
                                                        <h4>{{$view->judul_berita}}</h4>
                                                    </div>
                                                        <p class="text-muted text-justify">{!!$view->isi_berita!!}</p>
                                                    </div>
                                                    <center>
                                                    <div class="col-lg-6">
                                                        <button class="btn btn-warning" onclick="window.location.href='/ubah-berita-wisata/{{$view->id_berita}}'"><span class="ti-pencil-alt" style="color:black;">&nbspEdit</span></button>
                                                        </div>  
                                                        <center>                                                                                                                                  <!-- /# row -->
                    @include('admin.templateadmin.footer')
