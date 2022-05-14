@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> UBAH FASILITAS WISATA </h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin-wisata') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Fasilitas Wisata</li>
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
                                <form action="{{ route('fasilitaswisata.ubah', $update->id_fasilitas) }}"
                                    method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Fasilitas</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="nama_fasilitas" name="nama_fasilitas"
                                                class="form-control @error('nama_fasilitas') is-invalid @enderror"
                                                value="{{ $update->nama_fasilitas }}">
                                            @error('nama_fasilitas')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <img class="img-preview img-fluid mb-3 col-sm-5" alt=""
                                                src="{{ url('images/fasilitas/' . $update->file_foto) }}">

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambarwisata"
                                                    onchange="previewImage()" name="file_foto"
                                                    value="{{ $update->file_foto }}">
                                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Lokasi</label>
                                        <div class="col-sm-9">

                                            <input type="text" id="lokasi" name="lokasi"
                                                class="form-control @error('lokasi') is-invalid @enderror"
                                                value="{{ $update->lokasi }}">
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

                                            <select required="required" id="id_sampul_fasilitas" name="nama_sampul"
                                                class="form-control @error('nama_sampul') is-invalid @enderror">
                                                <option selected disabled>Pilih Kategori</option>
                                                @foreach ($sampul_fasilitas as $sampul)
                                                    <option value="{{ $sampul->id }}">{{ $sampul->nama_sampul }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('nama_sampul')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                                    </div>
                                    <div class="mb-3 row">
                                        <textarea type="text" id="deskripsi" name="deskripsi" height="300px" cols="200px" rows="20"
                                            class="form-control @error('deskripsi') is-invalid @enderror">{{ $update->deskripsi }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <br><br>
                                    <button type="button" class="btn btn-danger"
                                        onclick="window.location.href='/editproduk'"><i class="ti-close"></i>
                                        Batal</button>
                                    <button type="submit" class="btn btn-success"><i class="ti-check"></i>
                                        Ubah</button>
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