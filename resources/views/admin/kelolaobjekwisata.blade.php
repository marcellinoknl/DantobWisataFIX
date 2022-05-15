@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>KELOLA OBJEK WISATA</h1>
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
                                        <a href="{{ url('/tambah-objek-wisata')}}">
                                            <button class="btn btn-success"><span class="ti-plus" style="color:black;"> Tambah Objek Wisata</span></button>
                                        </a>
                                        <section id="main-content">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="bootstrap-data-table-panel">
                                                            <div class="table-responsive">
                                                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                                    <thead>
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center" width="10%">No</th>
                                                                                <th class="text-center" width="10%">Nama Wisata</th>
                                                                                <th class="text-center" width="20%">Deskripsi Wisata</th>
                                                                                <th class="text-center" width="10%">Kabupaten</th>
                                                                                <th class="text-center" width="10%">Kategori</th>
                                                                                <th class="text-center" width="25%">Foto Wisata</th>
                                                                                <th class="text-center" width="15%">Aksi</th>
                                                                            </tr>
                                                                            <?php $number = 1; ?>
                                                                        </thead>

                                                                    <tbody>
                                                                        @foreach($objekwisata as $objekwisatas)
                                                                        <tr>
                                                                            <td class="text-center"><?php echo $number++; ?> </td>
                                                                            <td class="text-center">{{$objekwisatas->nama_wisata}}</td>
                                                                            <td class="text-center">{!!$objekwisatas->deskripsi!!}</td>
                                                                            <td class="text-center">{{$objekwisatas->nama_kab}}</td>
                                                                            <td class="text-center">{{$objekwisatas->nama_kategori}}</td>
                                                                            
                                                                            {{-- <td class="text-center">{{$objekwisatas->nama_kategori}}</td> --}}
                                                                            <td class="text-center"><img src="{{'images/objekwisata/'.$objekwisatas->file_foto }}" style="width:200px; height: 130px; object-fit: cover; border:1px solid black;" /></td>
                                                                            <td>
                                                                            <center> 
                                                                            <button class="btn btn-info" onclick="window.location.href='/'"><span class="ti-eye" style="color:black;"></span></button>
                                                                                <button class="btn btn-warning" onclick="window.location.href='/ubah-objek-wisata/{{$objekwisatas->id_obj_wisata}}'"><span class="ti-pencil-alt" style="color:black;"></span></button>
                                                                                <button class="btn btn-danger"data-toggle="modal"data-target="#myModal{{ $objekwisatas->id_obj_wisata }}"><span class="ti-trash" style="color:black;"></span></button></center> 
                                                                                </td>
                                                            </div>
                                                            </tr>
                                                            {{-- modal pop up hapus --}}
                                                            <div class="modal fade"
                                                                id="myModal{{$objekwisatas->id_obj_wisata}}"
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
                                                                                <b>{{ $objekwisatas->nama_wisata }}</b> ?
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Batal</button>
                                                                            <button class="btn btn-danger"
                                                                                onclick="window.location.href='/objekwisata/hapus/{{$objekwisatas->id_obj_wisata}}'"
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
