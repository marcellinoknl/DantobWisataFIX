@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>KELOLA GALERI WISATA</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Table-Export</li>
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
                                        <a href="{{ url('/tambah-galeri-wisata')}}" <button class="btn btn-success"><span class="ti-plus" style="color:black;"> Tambah Galeri Wisata</span></button>
                                        </a>

                                        <section id="main-content">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="bootstrap-data-table-panel">
                                                            <div class="table-responsive">
                                                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center" width="10%">No</th>
                                                                            <th class="text-center" width="20%">Judul</th>
                                                                            <th class="text-center" width="20%">Gambar</th>
                                                                            <th class="text-center" width="35%">Aksi</th>
                                                                        </tr>
                                                                        <?php $number = 1; ?>
                                                                    </thead>

                                                                    <tbody>
                                                                        @foreach($galeriwisata as $galeriwisatas)
                                                                        <tr>
                                                                            <td class="text-center"><?php echo $number++; ?></td>
                                                                            <td class="text-center">{{$galeriwisatas->judul}}</td>
                                                                            <td class="text-center"><img src="{{'images/galeriwisata/'.$galeriwisatas->file_foto }}" style="width:200px; height: 130px; object-fit: cover; border:1px solid black;"/></td>
                                                                            <td>
                                                                            <center> 
                                                                                <button class="btn btn-warning" onclick="window.location.href='/ubah-galeri-wisata/{{$galeriwisatas->id_galeri}}'"><span class="ti-pencil-alt" style="color:black;"></span></button>
                                                                                <button class="btn btn-danger"
                                                                                        data-toggle="modal"
                                                                                        data-target="#myModal{{ $galeriwisatas->id_galeri }}"><span
                                                                                            class="ti-trash"
                                                                                            style="color:black;">
                                                                                            </span></button></center> 
                                                                            </td>
                                                                            
                                                            </div>
                                                            </td>
                                                            </tr>
                                                            {{-- modal pop up hapus --}}
                                                            <div class="modal fade"
                                                                id="myModal{{$galeriwisatas->id_galeri}}"
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
                                                                            <h4 class="modal-title">Hapus  Galeri
                                                                            </h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"><i
                                                                                    class="ti-close"></i></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Apakah Anda yakin ingin menghapus Galeri
                                                                               
                                                                                <b>{{ $galeriwisatas->judul}}</b> ?
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Batal</button>
                                                                            <button class="btn btn-danger"
                                                                                onclick="window.location.href='/galeri/hapus/{{$galeriwisatas->id_galeri}}'"
                                                                                data-toggle="modal"
                                                                                data-target="#myModal"><span
                                                                                    class="ti-trash"
                                                                                    style="color:black;">
                                                                                    Hapus</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            </tbody>
                                                            </table>
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