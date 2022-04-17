@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome Here</span></h1>
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
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Gambar</th>                                            
                                                <th class="text-center" >Aksi</th>
                                            </tr>
                                            <?php $number=1;?>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach($galeriwisata as $galeriwisatas)
                                            <tr>
                                                <td class="text-center"><?php echo $number++; ?>    </td>
                                                <td><img src="{{'images/galeriwisata/'.$galeriwisatas->file_foto }}" style="width:200px; height: 130px; object-fit: cover;"/></td>
                                                <td><button class="btn btn-warning"><span class="ti-pencil-alt"style="color:black;"> Ubah</span></button>
                                                <button class="btn btn-danger"><span class="ti-trash"style="color:black;"> Hapus</span></button>
                                                </td>
                                                </div>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
@include('admin.templateadmin.footer')