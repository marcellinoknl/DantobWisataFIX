@include('template/header')

@foreach ($berita as $beritas)
<div class="hero-wrap  " style="background-image: url({{asset('images/beritaheader/'. $beritas->file_foto)}}); width: 100%; height:75%; ">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">{{$beritas->tagline}}</h1>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        {{-- @guest
        @foreach ($deskripsi as $dep )
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">
            {{$dep->judul}}
        </h1>
        <p class="caption" style=" color:black;">
            {!!$dep->deskripsi!!}
        </p>
        @endforeach
        @else
        @foreach ($deskripsi as $dep )
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">
            {{$dep->judul}}
        </h1>
        @if( auth()->user()->role ==3) 
        <a href='/ubah-berita/{{$dep->id}}'><button type="button" class="btn btn-outline-success float-lg-right" data-mdb-ripple-color="dark" >Ubah Deskripsi</button></a>
        @else
        @endif
        <p class="caption" style=" color:black;">
            {!!$dep->deskripsi!!}
        </p>

       
        @endforeach
        @endguest
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br> --}}
        <div class="row">
            <div class="col-lg-12 card-margin">
                <div class="card search-form">
                    <div class="card-body p-0">
                        <form id="search-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                            {{-- <form method="GET" action ="{{url('/beritawisata' . $berita_wisata->id_obj_wisata_kabupaten)}}"> --}}
                                            <input type="text" placeholder="Cari..." class="form-control" id="search" name="keyword" value="{{$keyword}}">
                                        </div>
                                        <div class="col-lg-4 col-md-2 col-sm-12 p-0">
                                            <button type="submit" class="btn btn-base">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                            </button>
                                        {{-- </form> --}}
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

        <div class="container p-md-2 p-2">
            @if(empty($berita_wisata) || count($berita_wisata) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                Berita Wisata Belum Ditambahkan
                 </div>
               </div>
            </div>
            </div>
             @else
             <div class="row g-2 g-md-4">
                    @foreach ($berita_wisata as $beritas)
                    <div class="col-6 col-md-4 py-4">
                        <div class="card" style="width: 350px; height:600px; border-radius: 5%;">
                            <a href="{{ url('/berita-wisata/detail/' . $beritas->id_berita) }}">
                            <img class="card-img-top" src="{{ url('images/berita/' . $beritas->file_foto) }}"
                                alt="Card image cap" style="height: 200px ; border-radius: 15px 15px 0px 0px; ">
                            </a>
                            <div class="card-body" style="height: 200px ;  ">
                                
                                    <?php   
                                    $isi_berita = substr($beritas->isi_berita,0,100);
                                    ?>
                                    
                                   <a href="{{ url('/berita-wisata/detail/' . $beritas->id_berita) }}" onMouseOver="this.style='color:#1877F2'"
                                    onMouseOut="this.style='color:black'" style="color:black; ">
                                    <div class="title" style="text-weight:bold;">
                                        {{ $beritas->judul_berita }}
                                    </div>
                                </a>
                                <hr class="mt-2 mb-3" style="border:solid 0.5px" />
                                        <div class="caption" style=" color:black; text-align: justify;"> {!! $isi_berita!!}... 
                                    </div>
                                    <a href="{{ url('/berita-wisata/detail/' . $beritas->id_berita) }}" onMouseOver="this.style='text-decoration:underline'"
                                        onMouseOut="this.style='color:rgb(40, 116, 196)'" style="color:rgb(40, 116, 196);">Baca Selengkapnya</a>
                                
                            </div>

                            <div class=" card-footer">
                                <small class="text-muted"><i class="fa fa-user" aria-hidden="true"></i> {{$beritas->name}} &nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i> <?php
									$date=date_create($beritas->updated_at);
									echo date_format($date,"d M Y");
									?> </small>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            {{$berita_wisata->links()}}
            @endif
        </div>
    </div>
</div>




@include('template/footer')
