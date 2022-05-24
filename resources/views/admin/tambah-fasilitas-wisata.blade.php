@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> TAMBAH FASILITAS WISATA </h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin-wisata')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Fasiltias Wisata</li>
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
                                <form action="{{route('formdaftarfasilitas.store')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Fasilitas</label>
                                            <div class="col-sm-9">

                                                <input type="text"  id="nama_fasilitas" name="nama_fasilitas" class="form-control @error('nama_fasilitas') is-invalid @enderror">
                                                @error('nama_fasilitas')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lokasi</label>
                                            <div class="col-sm-9">

                                                <input type="text"  id="lokasi" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" >
                                                @error('lokasi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kategori</label>
                                            <div class="col-sm-9">

                                                <select    id="id_sampul_fasilitas" name="id_sampul_fasilitas" class="form-control @error('id_sampul_fasilitas') is-invalid @enderror" >
                                                    <option selected disabled>Pilih Kategori</option>
                                                    @foreach($sampul_fasilitas as $sampul)
                                                    <!-- <option value="{{$sampul->id}}">{{$sampul->nama_sampul}}</option> -->
                                                    <option value="{{ $sampul->id }}"{{old('nama_sampul')== $sampul->id ? 'selected': null }}>
                                                        {{ $sampul->nama_sampul }}</option>
                                                    @endforeach
                                                </select>
                                                @error('id_sampul_fasilitas')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Gambar Fasilitas</label>
                                            <div class="col-sm-9">
                                                <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input @error('file_foto') is-invalid @enderror" id="gbr" onchange="previewImage()"name="file_foto">

                                                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                                    <br/><label style="color:red">Maks. Ukuran: 5MB <br/> Maks. Lebar: 1200 Pixel</label>

                                                  </div>
                                                  @error('file_foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>  
                                        <div class="mb-3 row">
                                         
                                            <label class="col-sm-3 col-form-label">Deskripsi Fasilitas</label>
                                        </div>
                                        <div class ="mb-3 row">
                                        <div class="col-md-12">
                                        <textarea class=" form-control @error('deskripsi') is-invalid @enderror ckeditor" id="ckedtor" name="deskripsi" height="300px" cols="200px" rows="20"></textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                        </div>
                                        <br><br>    
                                        <button type="button" class="btn btn-danger" onclick="window.location.href='/daftar-fasilitas'"><i class="ti-close"></i> Batal</button>
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

        const image = document.querySelector('#gbr')

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