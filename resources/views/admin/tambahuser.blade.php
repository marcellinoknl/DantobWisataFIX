@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> TAMBAH ATRAKSI WISATA </h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin-wisata') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Kelola Akun User</li>
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
                                <form action="{{ route('formuser.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama User</label>
                                        <div class="col-sm-9">

                                            <input type="text"  id="name" name="name"
                                                class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">

                                            <input type="email"  id="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Role</label>
                                        <div class="col-sm-9">

                                            <select  id="role" name="role"
                                                class="form-control  @error('role') is-invalid @enderror">
                                                <option selected disabled>Pilih Role</option>
                                                @foreach ($akunplus as $userpluses)
                                                    <option value="{{ $userpluses->role_id }}"{{old('nama_role')== $userpluses->role_id ? 'selected': null }}>
                                                        {{ $userpluses->nama_role }}</option>
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
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">

                                            <input type="password"  id="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-9">

                                            <input type="password"  id="password_confirmation" name="password_confirmation"
                                                class="form-control @error('password_confirmation') is-invalid @enderror" value="{{old('password_confirmation')}}">
                                                @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <br><br>
                                    <button type="button" class="btn btn-danger"
                                        onclick="window.location.href='/kelolauser'"><i class="ti-close"></i>
                                        Batal</button>
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

        @include('admin.templateadmin.footer')
