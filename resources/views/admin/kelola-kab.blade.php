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
               <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
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
            <a href="{{ url('/tambah-kab') }}">
            <button class="btn btn-success"style="color:white;; font-family: arial;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Kabupaten Wisata</button>
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
                                       <th class="text-center" >
                                          Nomor
                                       </th>
                                       <th class="text-center" width="50%">
                                          Nama Kabupaten
                                       </th>
                                      
                                       <th class="text-center" width="50%">
                                          Aksi
                                       </th>
                                    </tr>
                                    <?php $number = 1; ?>
                                 </thead>
                                 <tbody>
                                    @foreach ($kabupaten as $kabupatens)
                                    <tr>
                                       <td class="text-center">
                                          <?php echo $number++; ?> 
                                       </td>
                                       <td class="text-center">
                                          {{ $kabupatens->nama_kab }}
                                       </td>
                                       {{-- <td>
                                          <center><img
                                             src="{{ 'images/objekwisata/' . $kabupatens->file_foto }}"
                                             style="width:200px; height: 130px; object-fit: cover; border:1px solid black;"
                                             alt="" data-toggle="modal"
                                             data-target="#myModalgambar{{ $kabupatens->id_obj_wisata_kabupaten }}" />
                                          </center>
                                       </td> --}}
                                       <td>
                                          <center>
                                             <button class="btn btn-warning"
                                                onclick="window.location.href='/ubah-kab/{{ $kabupatens->id_obj_wisata_kabupaten }}'"><span
                                                class="ti-pencil-alt"
                                                style="color:black;">
                                             </span></button>
                                             <button class="btn btn-danger"
                                                data-toggle="modal"
                                                data-target="#myModal{{ $kabupatens->id_obj_wisata_kabupaten }}"><span
                                                class="ti-trash"
                                                style="color:black;">
                                             </span></button>
                                          </center>
                           </div>
                           </td>
                           </tr>
                           <!-- gedein gambar -->
                           <div id="myModalgambar{{ $kabupatens->id_obj_wisata_kabupaten }}"
                              class="modal fade" tabindex="-1" role="dialog">
                           <div class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                           <div class="modal-body">
                           <img src="{{ url('images/objekwisata/'.$kabupatens->file_foto) }}"
                              class="img-fluid">
                           </div>
                           </div>
                           </div>
                           </div>
                           {{-- modal pop up hapus --}}
                           <div class="modal fade"
                              id="myModal{{ $kabupatens->id_obj_wisata_kabupaten }}"
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
                           <h4 class="modal-title">Hapus Kabupaten
                           </h4>
                           <button type="button" class="close"
                              data-dismiss="modal"><i
                              class="ti-close"></i></button>
                           </div>
                           <div class="modal-body">
                           <p>Apakah Anda yakin ingin menghapus
                           Kabupaten
                           <b>{{ $kabupatens->nama_kab }}</b> ?
                           </p>
                           </div>
                           <div class="modal-footer">
                           <button type="button"
                              class="btn btn-secondary"
                              data-dismiss="modal">Batal</button>
                           <button class="btn btn-danger"
                              onclick="window.location.href='/kabupaten/hapus/{{ $kabupatens->id_obj_wisata_kabupaten }}'"
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
                                 <th class="text-center" >
                                    Nomor
                                 </th>
                                 <th class="text-center" width="50%">
                                    Nama Kabupaten
                                 </th>
                                
                                 <th class="text-center" width="50%">
                                    Aksi
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