@include('template/header')
@foreach ($search as $searches )
<div class="hero-wrap " style="background-image: url({{asset('images/search/'. $searches ->file_foto)}}); width: 100%; height:75%; ">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
               <h1 class="mb-4" style="text-align: center;">{{$searches->tagline}}</h1>
               @endforeach
            </div>
        </div>
    </div>
</div>
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <div class="container p-md-2 ">
  <!-- SEARCH-->
  <div class="row">
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0">
                <form id="search-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">

                                <div class="col-lg-8 col-md-6 col-sm-6 p-0">
                                  <form method="GET" action ="">
                                    <input type="text" placeholder="Cari..." class="form-control" id="search" name="search" value="{{request('search')}}" autocomplete="on">
                                </div>
                                <div class="col-lg-4 col-md-2 col-sm-12 p-0">
                                    <button type="submit" class="btn btn-base ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search float-right"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="col-12 col-md-12 py-4">
    <div class="card">
      <h5 class="card-header" style="font-weight: bold">Paket Wisata</h5>
      <div class="card-body">
      @if(isset($filters['search']))
          @foreach ($paket as $pakets)
          <?php   
          $text = substr($pakets->deskripsi,0,100);
          ?>
          <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="{{ url('/paket-wisata/detail/' . $pakets->id) }}">
                <img src="{{ url('images/paketwisata/' . $pakets->file_foto) }}" class="img-fluid rounded-start" alt="paketwisata" height="100px">
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{ url('/paket-wisata/detail/' . $pakets->id) }}">
                  <h5 class="card-title">{{$pakets->nama_paket}}</h5>
                  </a>
                  <p class="card-text" style="color:black;">{!!$text!!}</p>
    
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <p>Data Paket Wisata Tidak Ditemukan</p>
          @endif
      </div>
    </div>
  </div>

  <div class="col-12 col-md-12 py-4">
    <div class="card">
      <h5 class="card-header"style="font-weight: bold">Merchandise</h5>
      <div class="card-body">
        @foreach ($merchandise as $merchandises)
        <div class="card mb-3" style="max-width: auto;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="{{ url('/galeriwisata') }}">
              <img src="{{ url('images/galeriwisata/' . $merchandises->file_foto) }}" class="img-fluid rounded-start" alt="galeri" height="100px">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="{{ url('/galeriwisata') }}">
                <h5 class="card-title">{{$merchandises->judul}}</h5>
                </a>
                {{-- <p class="card-text" style="color:black;">{!!$text!!}</p> --}}
  
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>    
  </div>

<div class="col-12 col-md-12 py-4">
<div class="card">
    <h5 class="card-header"style="font-weight: bold">Destinasi Wisata</h5>
    <div class="card-body">
      @foreach ($destinasi as $destinasis)
          <?php   
          $text = substr($destinasis->deskripsi,0,100);
          ?>
          <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="{{ url('/objek-wisata/detail2/' . $destinasis->id_obj_wisata) }}">
                <img src="{{ url('images/objekwisata/' . $destinasis->file_foto) }}" class="img-fluid rounded-start" alt="destinasi" height="100px">
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{ url('/objek-wisata/detail2/' . $destinasis->id_obj_wisata) }}">
                  <h5 class="card-title">{{$destinasis->nama_wisata}}</h5>
                  </a>
                  <p class="card-text" style="color:black;">{!!$text!!}</p>
    
                </div>
              </div>
            </div>
          </div>
          @endforeach
    </div>
  </div>
</div>

<div class="col-12 col-md-12 py-4">
  <div class="card">
    <h5 class="card-header"style="font-weight: bold">Fasilitas</h5>
    <div class="card-body">
      @foreach ($fasil as $fasils)
          <?php   
          $text = substr($fasils->deskripsi,0,100);
          ?>
          <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="{{ url('/fasilitas-wisata/detail2/' . $fasils->id_fasilitas) }}">
                <img src="{{ url('images/fasilitas/' . $fasils->file_foto) }}" class="img-fluid rounded-start" alt="Fasilitas" height="100px">
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{ url('/fasilitas-wisata/detail2/' . $fasils->id_fasilitas) }}">
                  <h5 class="card-title">{{$fasils->nama_fasilitas}}</h5>
                  </a>
                  <p class="card-text" style="color:black;">{!!$text!!}</p>
    
                </div>
              </div>
            </div>
          </div>
          @endforeach
    </div>
  </div>    
</div>

<div class="col-12 col-md-12 py-4">
    <div class="card">
      <h5 class="card-header"style="font-weight: bold">Atraksi</h5>
      <div class="card-body">
        @foreach ($atraksi as $atraksis)
        <?php   
        $text = substr($atraksis->deskripsi,0,100);
        ?>
        <div class="card mb-3" style="max-width: auto;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="{{ url('/atraksi-wisata/detail2/' . $atraksis->atraksi_id) }}">
              <img src="{{ url('images/Atraksi/' . $atraksis->file_foto) }}" class="img-fluid rounded-start" alt="Atraksi" height="100px">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="{{ url('/atraksi-wisata/detail2/' . $atraksis->atraksi_id) }}">
                <h5 class="card-title">{{$atraksis->deskripsi}}</h5>
                </a>
                <p class="card-text" style="color:black;">{!!$text!!}</p>
  
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>    
  </div>

  <div class="col-12 col-md-12 py-4">
    <div class="card">
      <h5 class="card-header"style="font-weight: bold">Event</h5>
      <div class="card-body">
        @foreach ($event as $events)
        <?php   
        $text = substr($events->deskripsi_event,0,100);
        ?>
        <div class="card mb-3" style="max-width: auto;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="{{ url('/event-wisata/detail2/' . $events->id_event) }}">
              <img src="{{ url('images/eventwisata/' . $events->file_foto) }}" class="img-fluid rounded-start" alt="Event" height="100px">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="{{ url('/event-wisata/detail2/' . $events->id_event) }}">
                <h5 class="card-title">{{$events->judul_event}}</h5>
                </a>
                <p class="card-text" style="color:black;">{!!$text!!}</p>
  
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>    
  </div>

  <div class="col-12 col-md-12 py-4">
    <div class="card">
      <h5 class="card-header"style="font-weight: bold">Desa Wisata</h5>
      <div class="card-body">
        @foreach ($dewi as $dewis)
          <?php   
          $text = substr($dewis->deskripsi,0,100);
          ?>
          <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="{{ url('/desa-wisata/detail2/' . $dewis->id) }}">
                <img src="{{ url('images/desawisata/' . $dewis->file_foto) }}" class="img-fluid rounded-start" alt="destinasi" height="100px">
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{ url('/desa-wisata/detail2/' . $dewis->id) }}">
                  <h5 class="card-title">{{$dewis->nama_desa}}</h5>
                  </a>
                  <p class="card-text" style="color:black;">{!!$text!!}</p>
    
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>    
  </div>

  <div class="col-12 col-md-12 py-4">
    <div class="card">
      <h5 class="card-header"style="font-weight: bold">Berita Wisata</h5>
      <div class="card-body">
         @foreach ($berita as $beritas)
          <?php   
          $text = substr($beritas->isi_berita,0,100);
          ?>
           <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="{{ url('/berita-wisata/detail/' . $beritas->id_berita) }}">
                <img src="{{ url('images/berita/' . $beritas->file_foto) }}" class="img-fluid rounded-start" alt="Berita" height="100px">
                </a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="{{ url('/berita-wisata/detail/' . $beritas->id_berita) }}">
                  <h5 class="card-title">{{$beritas->judul_berita}}</h5>
                  </a>
                  <p class="card-text" style="color:black;">{!!$text!!}</p>
    
                </div>
              </div>
            </div>
          </div>
        @endforeach 
      </div>
    </div>    
  </div>



</div>
</div>
@include('template/footer')