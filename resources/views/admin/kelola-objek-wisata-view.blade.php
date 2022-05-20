@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>DETAIL OBJEK WISATA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/kelolaobjek')}}">Kelola Objek</a></li>
                                <li class="breadcrumb-item active">Detail Objek Wisata</li>
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
                                                        <h1>{{$view->nama_wisata}}</h1></div>
                                                        <p class="text-muted text-justify">{!!$view->deskripsi!!}</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button class="btn btn-warning" onclick="window.location.href='/ubah-objek-wisata/{{$view->id_obj_wisata}}'"><span class="ti-pencil-alt" style="color:black;"></span></button>
                                                        <button class="btn btn-danger"data-toggle="modal"data-target="#myModal{{ $view->id_obj_wisata }}"><span class="ti-trash" style="color:black;"></span></button></center> 
                                                    </div>

                                                                                                                {{-- modal pop up hapus --}}
                                                                                                                <div class="modal fade"
                                                                                                                id="myModal{{$view->id_obj_wisata}}"
                                                                                                                role="dialog">
                                                                                                                <div class="modal-dialog" style="
                                                                                                                   position: absolute;
                                                                                                                    top: auto;
                                                                                                                    right: 0;
                                                                                                                    bottom:6cm;
                                                                                                                    box-align: centered;
                                                                                                                    left: 0;
                                                                                                                    z-index: 10040;
                                                                                                                    overflow: auto;
                                                                                                                    overflow-y: auto;">
                                                                                                                    <!-- Modal content-->
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header">
                                                                                                                            <h4 class="modal-title">Hapus Objek Wisata
                                                                                                                            </h4>
                                                                                                                            <button type="button" class="close"
                                                                                                                                data-dismiss="modal"><i
                                                                                                                                    class="ti-close"></i></button>
                                                                                                                        </div>
                                                                                                                        <div class="modal-body">
                                                                                                                            <p>Apakah Anda yakin ingin menghapus
                                                                                                                                Wisata
                                                                                                                                <b>{{ $view->nama_wisata }}</b> ?
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button"
                                                                                                                                class="btn btn-secondary"
                                                                                                                                data-dismiss="modal">Batal</button>
                                                                                                                            <button class="btn btn-danger"
                                                                                                                                onclick="window.location.href='/objekwisata/hapus/{{$view->id_obj_wisata}}'"
                                                                                                                                data-toggle="modal"
                                                                                                                                data-target="#myModal"><span
                                                                                                                                    class="ti-trash"
                                                                                                                                    style="color:black;">
                                                                                                                                    Hapus</span></button>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>

                    <!-- /# row -->
                    @include('admin.templateadmin.footer')
