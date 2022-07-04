@include('template/header')

@foreach ($paketheaders as $paketheader)
<div class="hero-wrap  " style="background-image: url({{asset('images/paketheader/'. $paketheader->file_foto)}}); width: 100%; height:75%; ">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
               <h1 class="mb-4" style="text-align: center;">{{$paketheader->tagline}}</h1>
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
        <a href='/ubah-paket/{{$dep->id}}'><button type="button" class="btn btn-outline-success float-lg-right" data-mdb-ripple-color="dark" >Ubah Deskripsi</button></a>
        @else
        @endif
        <p class="caption" style=" color:black;">
            {!!$dep->deskripsi!!}
        </p>
        @endforeach
        @endguest
        <hr class="mt-2 mb-3" style="border:solid 0.5px" /> --}}
        <br>


<!-- TEST -->
<div class="container p-md-2 p-2">
         
            @if(empty($paket) || count($paket) == 0)
           <br><br>

           <div class="row justify-content-md-center">
           <div class="col-12 col-md-8 py-4">
            <div class="card">
                <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                  Paket Wisata Belum Ditambahkan
                </div>
              </div>
           </div>
           </div>
            @else
<br>
            <div class="row g-2 g-md-4">

                @foreach ($paket as $pakets)
                    <div class="col-6 col-md-3 py-4 task-list-row">
                        <div class="mycard">
                            <a href="{{ url('/paket-wisata/detail/' . $pakets->id) }}">
                                <img src="{{ url('images/paketwisata/' . $pakets->file_foto) }}" alt=""
                                    class="mycard-image">
                            </a>
                            <h3 class="mycard-title">{{ $pakets->nama_paket }}</h3>
                        </div>
                    </div>
                @endforeach
                
            </div>
            @endif
      
        </div>
    </div>
</div>



@include('template/footer')
