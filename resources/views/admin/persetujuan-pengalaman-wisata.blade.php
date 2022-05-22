@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>PERSETUJUAN PENGALAMAN WISATA</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Persetujuan Pengalaman Wisata</li>
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
                                                        <div class="bootstrap-data-table-panel">
                                                            <div class="table-responsive">
                                                                <table id="bootstrap-data-table-export"
                                                                    class="table table-striped table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center" width="20%">Tanggal 
                                                                            </th>
                                                                            <th class="text-center" width="25%">Judul</th>
                                                                            <th class="text-center" width="25%">Penulis
                                                                            </th>
                                                                            <th class="text-center" width="30%">Aksi
                                                                            </th>
                                                                        </tr>
                                                                        <?php $number = 1; ?>
                                                                    </thead>
                                                                    <tbody>
                                                                   @foreach ($persetujuan  as $pengalaman)
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $date=date_create($pengalaman->updated_at);
                                                                                    echo date_format($date,"d M Y");
                                                                                    ?>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    {{$pengalaman->judul }}
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    {{$pengalaman->name}}
                                                                                </td>
                                                                                <td>
                                                                                    <center>
                                                                                        <button class="btn btn-info" onclick="window.location.href='/lihat-persetujuan/{{$pengalaman->id_pengalaman}}'"><span class="ti-eye" style="color:black;"></span></button>
                                                                                    <button class="btn btn-warning"
                                                                                        onclick="window.location.href='/ubah-persetujuanpengalaman-wisata/{{ $pengalaman->id_pengalaman }}'"><span
                                                                                            class="ti-pencil-alt"
                                                                                            style="color:black;">
                                                                                            </span></button>
                                                                                    <button class="btn btn-danger"
                                                                                        data-toggle="modal"
                                                                                        data-target="#myModal{{ $pengalaman->id_pengalaman }}"><span
                                                                                            class="ti-trash"
                                                                                            style="color:black;">
                                                                                            </span></button></center>
                                                                                </td>
                                                            </div>
                                                            </tr>
                                                            {{-- modal pop up hapus --}}
                                                             <div class="modal fade"
                                                                id="myModal{{ $pengalaman->id_pengalaman }}"
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
                                                                            <h4 class="modal-title">Hapus Kategori Wisata
                                                                            </h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"><i
                                                                                    class="ti-close"></i></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Apakah Anda yakin ingin menghapus
                                                                                Wisata
                                                                                <b>{{ $pengalaman->judul }}</b> ?
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Batal</button>
                                                                            <button class="btn btn-danger"
                                                                                onclick="window.location.href='/persetujuanpengalaman-wisata/hapus/{{ $pengalaman->id_pengalaman }}'"
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
