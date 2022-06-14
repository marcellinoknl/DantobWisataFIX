@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> UBAH DESKRIPSI BERITA</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Deskripsi Berita</li>
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
                            <div class="card-body">
                                <form action="{{route('deskripsiatraksi.ubah',$update->id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Judul  </label>
                                        <div class="col-sm-9">

                                            <input type="text"  id="judul_berita" name="judul_berita" class="form-control @error('judul_berita') is-invalid @enderror"value="{{$update->judul}}">
                                            @error('judul_berita')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Gambar </label>
                                        <div class="col-sm-9">
                                            <img class="img-preview img-fluid mb-3 col-sm-5" alt="" src="{{url('images/berita/'.$update->file_foto)}}"value="{{$update->file_foto}}">

                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="gambaraberita" onchange="previewImage()" name="file_foto" value="{{$update->file_foto}}">

                                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                                <br/><label style="color:red">Maks. Ukuran: 5MB <br/> Maks. Lebar: 1200 Pixel</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Deskripsi Sekarang</label>
                                    </div>
                                    <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <textarea type="text" id="ckedtor" name="deskripsi_berita"  cols="200px" rows="20"class="form-control @error('deskripsi_berita') is-invalid @enderror ckeditor">{{$update->deskripsi}}</textarea>
                                        @error('deskripsi_berita')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                    </div>
                                </div>
                                    <br><br>
                                    <button type="button" class="btn btn-danger" onclick="window.location.href='/'"><i class="ti-close"></i> Batal</button>
                                    <button type="submit" class="btn btn-success"><i class="ti-check"></i> Ubah</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
        </div>
        <!-- /# row -->

        <script>
            function previewImage() {

                const image = document.querySelector('#gambaraberita')

                const imgPreview = document.querySelector('.img-preview')

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0])

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
        @include('admin.templateadmin.footer')