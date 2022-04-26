@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>KELOLA KATEGORI WISATA</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Kategori Wisata</li>
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
                                        <a href="{{ url('/tambah-kat')}}" <button class="btn btn-success"><span class="ti-plus" style="color:black;"> Tambah Kategori Wisata</span></button>
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
                                                                            <th class="text-center" width="60%">Nama Kategori</th>
                                                                            <th class="text-center" width="30%">Aksi</th>
                                                                        </tr>
                                                                        <?php $number = 1; ?>
                                                                    </thead>

                                                                    <tbody>
                                                                        @foreach($kategori as $kat)
                                                                        <tr>
                                                                            <td class="text-center">{{$kat->id_kategori}}</td>
                                                                            <td class="text-center">{{$kat->nama_kategori}}</td>
                                                                            <td>
                                                                                <button class="btn btn-warning" onclick="window.location.href='/ubah-galeri-wisata/{{$kat->id_kategori}}'"><span class="ti-pencil-alt" style="color:black;"> Ubah</span></button>
                                                                                <button class="btn btn-danger"><span class="ti-trash" style="color:black;" onclick="window.location.href='/kategoriwisata/hapus/{{$kat->id_kategori}}'"> Hapus</span></button>
                                                                            </td>
                                                                            </div>
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