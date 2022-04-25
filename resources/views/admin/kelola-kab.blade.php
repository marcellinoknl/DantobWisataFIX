@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>KELOLA KABUPATEN WISATA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Kabupaten Wisata</li>
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
                                        <a href="{{ url('/tambah-kab')}}">
                                            <button class="btn btn-success"><span class="ti-plus" style="color:black;"> Tambah Kabupaten</span></button>
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
                                                                                <th class="text-center" width="15%">Nama Kabupaten</th>
                                                                                <th class="text-center" width="20%">Gambar</th>
                                                                                <th class="text-center" width="20%">Aksi</th>
                                                                            </tr>
                                                                            <?php $number = 1; ?>
                                                                        </thead>

                                                                    <tbody>
                                                                        @foreach($kabupaten as $kabupatens)
                                                                        <tr>
                                                                            <td class="text-center"><?php echo $number++; ?> </td>
                                                                            <td class="text-center">{{$kabupatens->nama_kab}}</td>
                                                                            <td><img src="{{'images/objekwisata/'.$kabupatens->file_foto }}" style="width:200px; height: 130px; object-fit: cover;" /></td>
                                                                            <td>
                                                                                <button class="btn btn-warning" onclick="window.location.href='/ubah-kab/{{$kabupatens->id_obj_wisata_kabupaten}}'"><span class="ti-pencil-alt" style="color:black;"> Ubah</span></button>
                                                                                <button class="btn btn-danger"><span class="ti-trash" style="color:black;" onclick="window.location.href='/kabupaten/hapus/{{$kabupatens->id_obj_wisata_kabupaten}}'"> Hapus</span></button>
                                                            </div>
                                                            </td>
                                                            </tr>
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