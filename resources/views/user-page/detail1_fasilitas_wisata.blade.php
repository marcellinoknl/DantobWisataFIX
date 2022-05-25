@include('template/header')

<div class="hero-wrap  "
    style="background-image: url({{ asset('images/fasilitas/' . $sampul_fasilitas->file_foto) }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">{{ $sampul_fasilitas->nama_sampul }}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">Jelajahi Fasilitas {{$sampul_fasilitas->nama_sampul}}</h1>
        <p class="caption" style=" color:black;">Fasilitas {{$sampul_fasilitas->nama_sampul}} yang tersedia, antara lain
        </p>
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br>
        <div class="container p-md-2 p-2">
            <h4 class="heading" style="font-weight: bold ; color:black;">Pilih Fasilitas {{$sampul_fasilitas->nama_sampul}} yang Ingin Kamu Tinjau!
            </h4>
            <br>
            <p style="color:black; text-decoration:black;">Filter Berdasarkan Kabupaten</p>
     
            <select id="assigned-user-filter"class="selectpicker" multiple data="true" style="border: 1px solid;">
                @foreach ($kabupaten as $kategories)
                <option value="{{$kategories->nama_kab}}">{{$kategories->nama_kab}}</option>
                @endforeach
                <option value="Tampilkan Semua">Tampilkan Semua</option>
              </select>
              <br>
            <br>

            <div class="d-flex justify-content-end">
            <form method="GET" action ="{{url('/fasilitas-wisata/detail1/' . $sampul_fasilitas->id)}}">
            <div class="row">

          <div class="col-md-8">
              <input placeholder="   Cari {{$sampul_fasilitas->nama_sampul}}"  class="form-check-input" type="text" name="keyword" style="border: 1px solid black; " value="{{$keyword}}">
          </div>
              <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button> 

              </div>
            </div>
            </form>
        </div>
        <br>
            @if(empty($fasilitias_wisata) || count($fasilitias_wisata) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                Fasilitas Wisata Belum Ditambahkan
                 </div>
               </div>
            </div>
            </div>
             @else
            <div class="row g-2 g-md-4">
                @foreach ($fasilitias_wisata as $fasilitias_wisatas)
                    <div class="col-12 col-md-12 py-4 task-list-row" data-assigned-user="{{$fasilitias_wisatas->nama_kab}}">
                        <article class="postcard light red">
                            <a class="postcard__img_link" href="{{ url('/fasilitas-wisata/detail2/' . $fasilitias_wisatas->id_fasilitas) }}">
                                <img class="postcard__img" src="{{ url('images/fasilitas/' . $fasilitias_wisatas->file_foto) }}" alt="Image Title" width="200px" height="300px" />
                            </a>
                            
                            <div class="postcard__text t-dark">
                                <div class="col-md-1"></div>
                                <h1 class="postcard__title red"><a href="{{ url('/fasilitas-wisata/detail2/' . $fasilitias_wisatas->id_fasilitas) }}">{{$fasilitias_wisatas->nama_fasilitas}}</a></h1>
                                <?php   
                                $deskripsi = substr($fasilitias_wisatas->deskripsi,0,50);
                                ?> 
                                <div class="postcard__bar"></div>

                                    <li class="tag__item"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$fasilitias_wisatas->lokasi}}</li>
                                    <li class="tag__item"><i class="fa fa-home" aria-hidden="true"></i> {{$fasilitias_wisatas->nama_kab}}</li>
                           
                            </div>
                        </article>
                    </div>
                @endforeach
                <span>
                    {{$fasilitias_wisata->links()}}
                    </span>
            </div>
         
            @endif
        </div>
    </div>
</div>


{{-- <!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Lihat Selengkapnya
				</a>
			</div>
	
	</div> --}}

<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('template2/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/select2/select2.min.js') }}"></script>

<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('template2/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/parallax100/parallax100.js') }}"></script>

<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>

<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/sweetalert/sweetalert.min.js') }}"></script>

<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!--===============================================================================================-->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    $('#assigned-user-filter').on('change', function() {
      var assignedUser = this.value;
  
      if (assignedUser === 'Tampilkan Semua') {
        $('.task-list-row').hide().filter(function() {
          return $(this).data('assigned-user') != assignedUser;
        }).show();
      } else {
        $('.task-list-row').hide().filter(function() {
          return $(this).data('assigned-user') == assignedUser;
        }).show();
      }
    });
  </script>

@include('template/footer')
