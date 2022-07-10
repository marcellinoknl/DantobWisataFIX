@include('template/header')


@foreach ($galeriheaders as $galeriheader)
<div class="hero-wrap  " style="background-image: url({{asset('images/galeriheaders/'. $galeriheader->file_foto)}}); width: 100%; height:75%; ">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">{{$galeriheader->tagline}}</h1>
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
        <a href='/ubah-galeri/{{$dep->id}}'><button type="button" class="btn btn-outline-success float-lg-right" data-mdb-ripple-color="dark" >Ubah Deskripsi</button></a>
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
            @if(empty($galeriwisata) || count($galeriwisata) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                Konten Pada Merchandise Belum Ditambahkan
                 </div>
               </div>
            </div>
            </div>
             @else
            <div class="row g-2 g-md-4">
                @foreach ($galeriwisata as $galeriwisatas)
             
				<div class="col-3 col-md-3 py-4">
				<div class="mycard-galeri">
						<img src="{{ url('images/galeriwisata/' . $galeriwisatas->file_foto) }}" alt="{{ $galeriwisatas->judul }}" id="myImg{{ $galeriwisatas->id_galeri }}"
							class="mycard-image-galeri" data-toggle="modal"data-target="#myModalgambar{{$galeriwisatas->id_galeri }}">
				

				</div>
			</div>

				<!-- The Modal -->
				<div id="myModal" class="modal">
					<span class="close">&times;</span>
					<img class="modal-content" id="img01">
					<div id="caption"></div>
				</div>

                                 <!-- gedein gambar -->
                                 <div id="myModalgambar{{$galeriwisatas->id_galeri }}"
                                    class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                       <div class="modal-content"style="width:auto; height:auto">
                                          <div class="modal-body" style="width:auto; height:auto">
                                             <img src="{{ url('images/galeriwisata/'.$galeriwisatas->file_foto) }}"
                                                class="img-fluid"data-toggle="modal"data-target="#myModalgambar{{$galeriwisatas->id_galeri }}">
												<h3  style="color:black; text-decoration: bold; font-weight: bold; text-align: center;">-{{ $galeriwisatas->judul }}-</h3>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                @endforeach
            </div>
            @endif
        </div>
        </div>
            </div>
        

@include('template/footer')
