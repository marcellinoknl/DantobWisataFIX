@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>KELOLA ATRAKSI WISATA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Atraksi</li>
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
                                        <a href="{{ url('/tambah-atraksi-wisata') }}">
                                            <button class="btn btn-success"style="color:black; font-family: arial;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Atraksi Wisata</button>
                                        </a>
                                        <section id="main-content">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="bootstrap-data-table-panel">
                                                            <div class="table-responsive">
                                                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center" width="8%">Nomor
                                                                            </th>
                                                                            <th class="text-center" width="15%">Judul
                                                                                Atraksi</th>
                                                                            <th class="text-center" width="15%">
                                                                                Kategori</th>
                                                                            <!-- <th class="text-center" width="20%">
                                                                                Deskripsi Atraksi</th> -->
                                                                            <th class="text-center" width="20%">Foto
                                                                                Atraksi</th>
                                                                            <th class="text-center" width="25%">Aksi
                                                                            </th>
                                                                        </tr>
                                                                        <?php $number = 1; ?>
                                                                    </thead>

                                                                    <tbody>
                                                                        @foreach ($atraksi as $atraksiwisatas)
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    <?php echo $number++; ?></td>
                                                                                <td class="text-center">
                                                                                    {{ $atraksiwisatas->judul }}</td>
                                                                                <td class="text-center">
                                                                                    {{ $atraksiwisatas->nama_sampul }}
                                                                                </td>
                                                                                <!-- <td class="text-center">
                                                                                    {!! $atraksiwisatas->deskripsi !!}
                                                                                </td> -->
                                                                                <td>
                                                                            <img
                                                                                            src="{{ 'images/Atraksi/' . $atraksiwisatas->file_foto }}"
                                                                                            style="width:200px; height: 130px; object-fit: cover; border:1px solid black;"
                                                                                            alt="" data-toggle="modal"
                                                                                            data-target="#myModalgambar{{ $atraksiwisatas->atraksi_id  }}" /></td>
                                                                                
                                                                                <td>
                                                                                <center> 
                                                                                    <button class="btn btn-info"
                                                                                        onclick="window.location.href='/lihat-atraksiwisata/{{$atraksiwisatas->atraksi_id}}'"><span
                                                                                            class="ti-eye"
                                                                                            style="color:black;">
                                                                                            </span></button>
                                                                                    <button class="btn btn-warning"
                                                                                        onclick="window.location.href='/ubah-atraksi-wisata/{{ $atraksiwisatas->atraksi_id }}'"><span
                                                                                            class="ti-pencil-alt"
                                                                                            style="color:black;">
                                                                                            </span></button>
                                                                                            <button class="btn btn-danger"
                                                                                        data-toggle="modal"
                                                                                        data-target="#myModal{{$atraksiwisatas->atraksi_id}}"><span
                                                                                            class="ti-trash"
                                                                                            style="color:black;">
                                                                                            </span></button></center> 
                                                                                    <!-- <button class="btn btn-danger"href='deleteatraksi/{atraksi_id}/{{ $atraksiwisatas->atraksi_id }}'"><span class="ti-trash"style="color:black;"> Hapus</span></button> -->
                                                                                    </td>
                                                            </div>
                                                            </tr>
                                                            <div id="myModalgambar{{ $atraksiwisatas->atraksi_id  }}"
                                                                class="modal fade" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="{{ url('images/Atraksi/'.$atraksiwisatas->file_foto) }}"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- modal pop up hapus --}}
                                                            <div class="modal fade"
                                                                id="myModal{{ $atraksiwisatas->atraksi_id }}"
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
                                                                            <h4 class="modal-title">Hapus Atraksi Wisata
                                                                            </h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"><i
                                                                                    class="ti-close"></i></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Apakah Anda yakin ingin menghapus
                                                                                Atraksi Wisata
                                                                                <b>{{ $atraksiwisatas->judul }}</b> ?
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Batal</button>
                                                                            <button class="btn btn-danger"
                                                                                onclick="window.location.href='/atraksiwisata/hapus/{{ $atraksiwisatas->atraksi_id  }}'"
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
                                                            <tfoot>
                                                                <tr>
                                                                    <th class="text-center" width="8%">Nomor
                                                                    </th>
                                                                    <th class="text-center" width="15%">Judul
                                                                        Atraksi</th>
                                                                    <th class="text-center" width="15%">
                                                                        Kategori</th>
                                                                    <!-- <th class="text-center" width="20%">
                                                                        Deskripsi Atraksi</th> -->
                                                                    <th class="text-center" width="20%">Foto
                                                                        Atraksi</th>
                                                                    <th class="text-center" width="25%">Aksi
                                                                    </th>
                                                                </tr>
                                                            </tfoot>
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
