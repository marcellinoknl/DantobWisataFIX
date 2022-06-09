@include('admin.templateadmin.header')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>DETAIL DESA WISATA</h1>
                        </div>
                    </div>
                </div>
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
                                                        <div class="col-lg-6">
                                                        <h1>{{$view->nama_desa}}</h1></div>
                                                        <p class="text-muted text-justify">{!!$view->deskripsi!!}</p>
                                                    </div>
                                                    <center>
                                                    <div class="col-lg-6">
                                                        <button class="btn btn-warning" onclick="window.location.href='/ubah-desa-wisata/{{$view->id}}'"><span class="ti-pencil-alt" style="color:black;">&nbspEdit</span></button>
                                                        </div>
                                                       </center>

                    @include('admin.templateadmin.footer')
