@include('admin.templateadmin.header')
<div class="content-wrap">
<div class="main">
<div class="container-fluid">
<div class="row">
   <div class="col-lg-8 p-r-0 title-margin-right">
      <div class="page-header">
         <div class="page-title">
            <h1>KELOLA TAGLINE </span></h1>
         </div>
      </div>
   </div>
   <!-- /# column -->
   <div class="col-lg-4 p-l-0 title-margin-left">
      <div class="page-header">
         <div class="page-title">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{url('/admin-wisata')}}">Dashboard</a></li>
               <li class="breadcrumb-item active">Kelola Tagline</li>
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
                        {{-- <h1>Facebook</h1> --}}
                        <form action="{{route('tag.ubah',$update->id)}}" method="post" enctype="multipart/form-data">
                           {{ csrf_field() }}
                           <div class="mb-3 row">
                              <label class="col-sm-3 col-form-label">Tagline1</label>
                              <div class="col-sm-9">
                                  <input type="text" id="caption" name="tag1" class="form-control @error('tag1') is-invalid @enderror "value="{{$update->tagline1}}">
                                  @error('tag1')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>
                          <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Tagline2</label>
                           <div class="col-sm-9">
                               <input type="text" id="caption" name="tag2" class="form-control @error('tag2') is-invalid @enderror "value="{{$update->tagline2}}">
                               @error('tag2')
                                   <div class="invalid-feedback">
                                       {{ $message }}
                                   </div>
                               @enderror
                           </div>
                       </div>
                       <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Tagline3</label>
                        <div class="col-sm-9">
                            <input type="text" id="caption" name="tag3" class="form-control @error('tag3') is-invalid @enderror "value="{{$update->tagline3}}">
                            @error('tag3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                          <button type="button" class="btn btn-danger" onclick="window.location.href='/'"><i class="ti-close"></i> Batal</button>
                        <button type="submit" class="btn btn-success"><i class="ti-check"></i> Ubah</button>
                     </form>
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

      <script> 
         function previewImage() {
      const image = document.querySelector('#gambarwisata')
      const imgPreview = document.querySelector('.img-preview')

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0])

      oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
      }
      }
      </script>
<!-- /# row -->
@include('admin.templateadmin.footer')