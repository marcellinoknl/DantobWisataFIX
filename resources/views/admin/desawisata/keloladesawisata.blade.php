@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>KELOLA DESA WISATA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Desa Wisata</li>
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
                             <section id="main-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        
                                        <section id="main-content">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                
                                                        <div class="container">
                                                            <a href="{{ url('/tambah-desa-wisata')}}">
                                                                <button class="btn btn-success"style="color:black; font-family: arial;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Desa Wisata</button>
                                                            </a>
                                                            <div class="col-lg-12"></div>
                                                            <div class="row">
                                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center" >Nomor</th>
                                                                        <th class="text-center" width="50%">Nama Desa</th>
                                                                        <th class="text-center" width="30%">Kabupaten</th>                                                                   
                                                                        <th class="text-center" width="20%">Aksi</th>
                                                                    </tr>
                                                                    <?php $number = 1; ?>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($desawisatas as $desawisata)
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $number++; ?> </td>
                                                                        <td class="text-center">{{$desawisata->nama_desa}}</td>
                                                                        <td class="text-center">{{$desawisata->nama_kab}}</td>
                                                                        <td>
                                                                        <center> 
                                                                        <button class="btn btn-info" onclick="window.location.href='/lihat-desawisata/{{$desawisata->id}}'"><span class="ti-eye" style="color:black;"></span></button>
                                                                            <button class="btn btn-warning" onclick="window.location.href='/ubah-desa-wisata/{{$desawisata->id}}'"><span class="ti-pencil-alt" style="color:black;"></span></button>
                                                                            <button class="btn btn-danger"data-toggle="modal"data-target="#myModal{{ $desawisata->id }}"><span class="ti-trash" style="color:black;"></span></button></center> 
                                                                            </td>
                                                        </div>
                                                        </tr>
                                                        <!-- gedein gambar -->
                                                        <div id="myModalgambar{{ $desawisata->id  }}"
                                                            class="modal fade" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <img src="{{ url('images/desawisata/'.$desawisata->file_foto) }}"
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- modal pop up hapus --}}
                                                        <div class="modal fade"
                                                            id="myModal{{$desawisata->id}}"
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
                                                                        <h4 class="modal-title">Hapus Desa Wisata
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"><i
                                                                                class="ti-close"></i></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Apakah Anda yakin ingin menghapus
                                                                            Desa Wisata
                                                                            <b>{{ $desawisata->nama_desa }}</b> ?
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Batal</button>
                                                                        <button class="btn btn-danger"
                                                                            onclick="window.location.href='/desawisata/hapus/{{$desawisata->id}}'"
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
                                                                        <th class="text-center" >Nomor</th>
                                                                        <th class="text-center" width="25%">Nama Wisata</th>
                                                                        <th class="text-center" width="25%">Kabupaten</th>                                                                     
                                                                        <th class="text-center" width="25%">Aksi</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                   
                                </div>
                                <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>

                    <!-- /# row -->
                    @include('admin.templateadmin.footer')
