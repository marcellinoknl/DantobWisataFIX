@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> TAMBAH OBJEK WISATA </h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Objek Wisata</li>
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
                                <form action="{{route('formobjekwisata.store')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Wisata</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="namawisata" name="nama_wisata" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kabupaten</label>
                                            <div class="col-sm-9">

                                                <select   required="required" id="id_obj_wisata_kabupaten" name="id_obj_wisata_kabupaten" class="form-control" >
                                                    <option selected>Pilih Kabupaten</option>
                                                    @foreach($kabupaten as $kabupaten)
                                                    <option value="{{$kabupaten->id_obj_wisata_kabupaten}}">{{$kabupaten->nama_kab}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kategori</label>
                                            <div class="col-sm-9">

                                                <select   required="required" id="id_kat_wisata" name="id_kat_wisata" class="form-control" >
                                                    <option selected>Pilih Kategori</option>
                                                    @foreach($kategori as $kat)
                                                    <option value="{{$kat->id_kategori}}">{{$kat->nama_kategori}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Gambar Objek Wisata</label>
                                            <div class="col-sm-9">
                                                <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambarwisata" onchange="previewImage()"name="file_foto">
                                                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                                  </div>
                                            </div>
                                        </div>  
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Deskripsi Wisata</label>
                                        </div>
                                        <div class ="mb-3 row">
                                            <textarea type="text" required="required" id="deskripsiwisata" name="deskripsi" height="300px" class="form-control" ></textarea>
                                        </div>
                                        <br><br>    
                                        <button type="button" class="btn btn-danger" onclick="window.location.href='/editproduk'"><i class="ti-close"></i> Batal</button>
                                        <button type="submit" class="btn btn-success"><i class="ti-check"></i> Tambah</button>
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
@include('admin.templateadmin.footer')