@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>DETAIL PENGALAMAN WISATA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            {{-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/persetujuanpengalamanwisata')}}">Persetujuan Pengalaman Wisata</a></li>
                                <li class="breadcrumb-item active">Detail Pengalaman Wisata</li>
                            </ol> --}}
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
                                                        <h1>{{$viewpersetujuan->judul}}</h1></div>
                                                       
                                                        <p class="text-muted text-justify">{!!$viewpersetujuan->deskripsi!!}</p>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row">
                                                    <div class="col-md-2">
                                                        <form action="{{ route('persetujuanpengalamanwisata.approved', $viewpersetujuan->id_pengalaman) }}" method="post"
                                                            enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <button class="btn btn-outline-info" type="submit"><span class="ti-check-box" style="color:black;"> Approve</span></button>
                                                       
                                                    </form>
                                                    </div>  
                                                    <div class="col-md-2">
                                                        <button class="btn btn-outline-warning" onclick="window.location.href='/ubah-persetujuanpengalaman-wisata/{{$viewpersetujuan->id_pengalaman}}'"><span class="ti-pencil-alt" style="color:black;"> Ubah</span></button>
                                                   
                                                        {{-- <button class="btn btn-danger"data-toggle="modal"data-target="#myModal{{ $viewpersetujuan->id_pengalaman }}"><span class="ti-trash" style="color:black;"></span></button></center>  --}}
                                                    </div>
                                                </div>
                                                </div>

                                                                                                                {{-- modal pop up hapus --}}
                                                                                                                <div class="modal fade"
                                                                                                                id="myModal{{$viewpersetujuan->id_pengalaman}}"
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
                                                                                                                                Pengalaman Wisata ini ?
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button"
                                                                                                                                class="btn btn-secondary"
                                                                                                                                data-dismiss="modal">Batal</button>
                                                                                                                            <button class="btn btn-danger"
                                                                                                                                onclick="window.location.href='/persetujuanpengalaman-wisata/hapus/{{$viewpersetujuan->id_pengalaman}}'"
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
