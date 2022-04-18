@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome Here</span></h1>
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
                        <a href="{{ url('/tambah-atraksi-wisata')}}"
                        <button class="btn btn-success" ><span class="ti-plus"style="color:black;"> Tambah Atraksi Wisata</span></button>
                    </a>
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                                 <th class="text-center" width="15%">Nomor</th>
                                                <th class="text-center" width="15%">Judul Atraksi</th>
                                                <th class="text-center"width="30%">Deskripsi Atraksi</th>
                                                <th class="text-center"width="20%">Foto Atraksi</th>
                                                <th class="text-center" width="25%">Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($atraksi as $atraksiwisatas)
                                            <tr>
                                                <td class="text-center">{{$atraksiwisatas->atraksi_id}}</td>
                                                <td class="text-center">{{$atraksiwisatas->judul}}</td>
                                                <td class="text-center">{{$atraksiwisatas->deskripsi}}</td>
                                                <td><img src="{{'images/Atraksi/'.$atraksiwisatas->file_foto }}" style="width:200px; height: 130px; object-fit: cover;"/></td>
                                                <td >  
                                                <button class="btn btn-warning" onclick="window.location.href='/ubah-atraksi-wisata/{{$atraksiwisatas->atraksi_id}}'"><span class="ti-pencil-alt" style="color:black;"> Ubah</span></button>
                                                <button class="btn btn-danger"><span class="ti-trash"style="color:black;" onclick="window.location.href='/atraksiwisata/hapus/{{$atraksiwisatas->atraksi_id}}'"> Hapus</span></button>
                                                <!-- <button class="btn btn-danger"href='deleteatraksi/{atraksi_id}/{{$atraksiwisatas->atraksi_id}}'"><span class="ti-trash"style="color:black;"> Hapus</span></button> -->
                                                </div>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>    
                                </table>                                  
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
@include('admin.templateadmin.footer')