@include('admin.templateadmin.header')
<div class="content-wrap">
<div class="main">
<div class="container-fluid">
<div class="row">
   <div class="col-lg-8 p-r-0 title-margin-right">
      <div class="page-header">
         <div class="page-title">
            <h1>KELOLA SAMPUL FASILITAS WISATA</h1>
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
         <a href="{{ url('/tambah-sampul-fasilitas')}}">
            <button class="btn btn-success"style="color:black; font-family: arial;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Sampul Fasilitas </button>
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
                                    <th class="text-center" width="15%">Nomor</th>
                                    <th class="text-center" width="20%">Nama Sampul</th>
                                    <th class="text-center" width="35%">Gambar</th>
                                    <th class="text-center" width="30%">Aksi</th>
                                 </tr>
                                 <?php $number = 1; ?>
                              </thead>
                              <tbody>
                                 @foreach($sampulfasilitas as $sampuls)
                                 <tr>
                                    <td class="text-center"><?php echo $number++; ?></td>
                                    <td class="text-center">{{$sampuls->nama_sampul}}</td>
                                    <td class="text-center"><img  src="{{'images/fasilitas/'.$sampuls->file_foto }}" style="width:200px; height: 130px; object-fit: cover; border:1px solid black;" data-toggle="modal"
                                       data-target="#myModalgambar{{ $sampuls->id }}"/></td>
                                    <td class="text-center">
                                       <center>                                                                              
                                          <button class="btn btn-warning" onclick="window.location.href='/ubah-sampulfasilitas-wisata/{{$sampuls->id}}'"><span class="ti-pencil-alt" style="color:black;"></span></button>
                                          <button class="btn btn-danger"
                                             data-toggle="modal"
                                             data-target="#myModal{{ $sampuls->id }}"><span
                                             class="ti-trash"
                                             style="color:black;">
                                          </span></button>
                                       </center>
                                    </td>
                                 </tr>
                                 <!-- gedein gambar -->
                                 <div id="myModalgambar{{ $sampuls->id }}"
                                    class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                       <div class="modal-content">
                                          <div class="modal-body">
                                             <img src="{{ url('images/fasilitas/'.$sampuls->file_foto) }}"
                                                class="img-fluid">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 {{-- modal pop up hapus --}}
                                 <div class="modal fade"
                                    id="myModal{{$sampuls->id}}"
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
                                             <h4 class="modal-title">Hapus  Sampul Fasilitas Wisata
                                             </h4>
                                             <button type="button" class="close"
                                                data-dismiss="modal"><i
                                                class="ti-close"></i></button>
                                          </div>
                                          <div class="modal-body">
                                             <p>Apakah Anda yakin ingin menghapus Sampul Fasilitas Wisata
                                                <b>{{ $sampuls->nama_sampul}}</b> ?
                                             </p>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button"
                                                class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                             <button class="btn btn-danger"
                                                onclick="window.location.href='/sampul-atraksi/hapus/{{$sampuls->id}}'"
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
                              <th class="text-center" width="15%">Nomor</th>
                              <th class="text-center" width="20%">Nama Sampul</th>
                              <th class="text-center" width="35%">Gambar</th>
                              <th class="text-center" width="30%">Aksi</th>
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