@include('template/header')

<div class="hero-wrap  "
    style="background-image: url({{ asset('images/fasilitas/' . $sampul_fasilitas->file_foto) }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
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
  <div class="row">
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0">
                <form id="search-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select id="assigned-user-filter" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Tampilkan Semua">Tampilkan Semua</option>
                                      @foreach ($kabupaten as $kategories)
                                      <option value="{{$kategories->nama_kab}}">{{$kategories->nama_kab}}</option>
                                      @endforeach
                                     
                                    </select>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                  <form method="GET" action ="{{url('/fasilitas-wisata/detail1/' . $sampul_fasilitas->id)}}">
                                    <input type="text" placeholder="Cari..." class="form-control" id="search" name="keyword" value="{{$keyword}}">
                                </div>
                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                    <button type="submit" class="btn btn-base">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
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
                    <div class="col-6 col-md-4 py-4 task-list-row" data-assigned-user="{{$fasilitias_wisatas->nama_kab}}">
                        <div class="card"  style="width: 100%; height:auto; border-radius: 5%;">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <a href="{{ url('/fasilitas-wisata/detail2/' . $fasilitias_wisatas->id_fasilitas) }}">
                                        <img class="card-img" src="{{ url('images/fasilitas/' . $fasilitias_wisatas->file_foto) }}" alt="Image notfound" width="100%" height="100%"/>
                                    </a>
                                </div>
                                <?php   
                                $lokasi = substr($fasilitias_wisatas->lokasi,0,20);
                                ?>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$fasilitias_wisatas->nama_fasilitas}}</h5>

                                        <li class="tag__item"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$lokasi}}...</li>
                                        <li class="tag__item"><i class="fa fa-home" aria-hidden="true"></i> {{$fasilitias_wisatas->nama_kab}}</li>
                                        <a href="{{ url('/fasilitas-wisata/detail2/' . $fasilitias_wisatas->id_fasilitas) }}" class="btn btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <span>
  
                    </span>
            </div>
            {{$fasilitias_wisata->links()}}
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
