@include('admin.templateadmin.header')
<div class="content-wrap">
<div class="main">
<div class="container-fluid">
<div class="row">
   <div class="col-lg-8 p-r-0 title-margin-right">
      <div class="page-header">
         <div class="page-title">
            <h1>KELOLA BERITA WISATA</span></h1>
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
            <a href="{{ url('/tambah-berita-wisata')}}" <button class="btn btn-success"><span class="ti-plus" style="color:black;"> Tambah Berita Wisata</span></button>
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
                                       <th class="text-center" width="10%">Nomor</th>
                                       <th class="text-center" width="20%">Judul Berita</th>
                                       <th class="text-center" width="30%">Isi Berita</th>
                                       <th class="text-center" width="20%">Foto</th>
                                       <th class="text-center" width="20%">Aksi</th>
                                    </tr>
                                    <?php $number = 1; ?>
                                 </thead>
                                 <tbody>
                                    @foreach($kelolaberita as $beritawisatas)
                                    <tr>
                                       <td class="text-center"><?php echo $number++; ?></td>
                                       <td class="text-center">{{$beritawisatas->judul_berita}}</td>

                                       <td class="text-center">{!!$beritawisatas->isi_berita !!}</td>
                                       <td class="text-center"><img  src="{{'images/beritawisata/'.$beritawisatas->file_foto }}" style="width:200px; height: 130px; object-fit: cover; border:1px solid black;" data-toggle="modal"data-target="#myModalgambar{{$beritawisatas->id_berita }}"/></td>

                                       <td>
                                          <center> 
                                             <button class="btn btn-info" onclick="window.location.href='/'"><span class="ti-eye" style="color:black;"></span></button>
                                             <button class="btn btn-warning" onclick="window.location.href='/ubah-berita-wisata/{{$beritawisatas->id_berita}}'"><span class="ti-pencil-alt" style="color:black;"></span></button>
                                             <button class="btn btn-danger"
                                                data-toggle="modal"
                                                data-target="#myModal{{ $beritawisatas->id_berita}}"><span
                                                class="ti-trash"
                                                style="color:black;">
                                             </span></button>
                                          </center>
                           </div>
                           </td>
                           </tr>
                           <!-- Zoom Image -->
                           <div id="myModalgambar{{$beritawisatas->id_berita }}"
                              class="modal fade" tabindex="-1" role="dialog">
                           <div class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                           <div class="modal-body">
                           <img src="{{ url('images/berita/'.$beritawisatas->file_foto) }}"
                              class="img-fluid">
                           </div>
                           </div>
                           </div>
                           </div>
                           {{-- modal pop up hapus --}}
                           <div class="modal fade"
                              id="myModal{{ $beritawisatas->id_berita }}"
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
                           <h4 class="modal-title">Hapus Berita Wisata
                           </h4>
                           <button type="button" class="close"
                              data-dismiss="modal"><i
                              class="ti-close"></i></button>
                           </div>
                           <div class="modal-body">
                           <p>Apakah Anda yakin ingin menghapus
                           Berita
                           <b>{{ $beritawisatas->judul_berita }}</b> ?
                           </p>
                           </div>
                           <div class="modal-footer">
                           <button type="button"
                              class="btn btn-secondary"
                              data-dismiss="modal">Batal</button>
                           <button class="btn btn-danger"
                              onclick="window.location.href='/berita/hapus/{{$beritawisatas->id_berita }}'"
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