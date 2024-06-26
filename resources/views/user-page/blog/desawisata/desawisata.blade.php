@include('template/header')
@foreach ($dewi as $dewi)
<div class="hero-wrap  " style="background-image: url({{asset('images/dewiheader/'. $dewi->file_foto)}}); width: 100%; height:75%; ">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">{{$dewi->tagline}}</h1>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Product -->

<div class="bg0 m-t-23 p-b-140">
s
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
        <a href='/ubah-dewi/{{$dep->id}}'><button type="button" class="btn btn-outline-success float-lg-right" data-mdb-ripple-color="dark" >Ubah Deskripsi</button></a>
        @else
        @endif
        <p class="caption" style=" color:black;">
            {!!$dep->deskripsi!!}
        </p>
        @endforeach
        @endguest
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br> --}}
        <div class="container p-md-2 p-2">
            {{-- <h4 class="heading" style="font-weight: bold ; color:black;">Pilih Kabupaten yang Ingin Kamu Tinjau!
            </h4> --}}
            @if(empty($objwisatakabupaten) || count($objwisatakabupaten) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                   Kabupaten Wisata Belum Ditambahkan
                 </div>
               </div>
            </div>
            </div>
            @else
            <div class="row g-2 g-md-4">
                @foreach ($objwisatakabupaten as $objekwisatas)
                <div class="col-6 col-md-3 py-4">
                        <div class="mycard">
                            <a href="{{ url('/desa-wisata/detail1/' . $objekwisatas->id_obj_wisata_kabupaten) }}">
                                <img src="{{ url('images/objekwisata/' . $objekwisatas->file_foto) }}" alt=""
                                    class="mycard-image">
                            </a>
                         
                            <h3 class="mycard-title">{{ $objekwisatas->nama_kab }}</h3>
      
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>



@include('template/footer')
