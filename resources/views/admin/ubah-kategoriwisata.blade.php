@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> UBAH KATEGORI WISATA </h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin-wisata') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Ubah Kategori Wisata</li>
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
                                <form action="{{ route('kategori.ubah', $update->id_kategori) }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Kategori</label>
                                        <div class="col-sm-9">
                                            <input type="text"  id="nama_kategori"
                                                name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror"
                                                value="{{ $update->nama_kategori }}">
                                                @error('nama_kategori')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                    </div>
                                        <!-- </div>
                                    </div> -->

                                    <br><br>
                                    <button type="button" class="btn btn-danger"
                                        onclick="window.location.href='/kelolakat'"><i class="ti-close"></i>
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

        @include('admin.templateadmin.footer')
