@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> TAMBAH DESA WISATA </h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin-wisata') }}">Dashboard</a></li>
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
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('formdesawisata.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Desa</label>
                                        <div class="col-sm-9">
                                            <input type="text"   id="namadesa" name="nama_desa"
                                                class="form-control @error('nama_desa') is-invalid @enderror" value="{{old('nama_desa')}}" >

                                            @error('nama_desa')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Kabupaten</label>
                                        <div class="col-sm-9">

                                            <select id="id_obj_wisata_kabupaten" name="nama_kabupaten"
                                                class="form-control @error('nama_kabupaten') is-invalid @enderror">
                                                <option selected disabled>Pilih Kabupaten</option>
                                                @foreach ($kabupaten as $kabupaten)
                                                    <!-- <option value="{{ $kabupaten->id_obj_wisata_kabupaten }}">
                                                        {{ $kabupaten->nama_kab }}</option> -->
                                                        <option value="{{  $kabupaten->id_obj_wisata_kabupaten }}"{{old('nama_kab')== $kabupaten->id_obj_wisata_kabupaten ? 'selected': null }}>
                                                        {{$kabupaten->nama_kab }}</option>
                                                @endforeach
                                            </select>
                                            @error('nama_kabupaten')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Gambar Desa Wisata</label>
                                        <div class="col-sm-9">
                                            <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('file_foto') is-invalid @enderror"
                                                    id="gambarwisata" onchange="previewImage()" name="file_foto">
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
                                        <label class="col-sm-3 col-form-label">Deskripsi Desa Wisata</label>
                                    </div>
                                    <div class="mb-3 row" >
                                    <div class="col-md-12" >
                                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror ckeditor" id="ckedtor" cols="200px" rows="100px" ></textarea>
                                       

                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
</div>
                                        @enderror
                                    </div>
                                    <br><br>
                                    <button type="button" class="btn btn-danger"
                                        onclick="window.location.href='/keloladesawisata'"><i class="ti-close"></i>
                                        Batal</button>&nbsp;
                                    <button type="submit" class="btn btn-success"><i class="ti-check"></i>
                                        Tambah</button>
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
        <script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>



        @include('admin.templateadmin.footer')
