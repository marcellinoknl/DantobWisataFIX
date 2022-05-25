@include('template/header')

<div class="hero-wrap  "
    style="background-image: url({{ asset('images/objekwisata/' . $objwisatakabupaten->file_foto) }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
                <!-- <h1 class="mb-4" style="text-align: center;">{{ $objwisatakabupaten->nama_kab }}</h1> -->
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">Jelajahi {{$objwisatakabupaten->nama_kab}}</h1>
        <p class="caption" style=" color:black;">Indahnya pesona Alam {{$objwisatakabupaten->nama_kab}} yang tidak ada duanya, akan memanjakan mata anda ketika mengunjunginya. Temukan Informasi mengenai Wisata Alam {{$objwisatakabupaten->nama_kab}} di bawah ini!
        </p>
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />

        <br>

        <div class="container p-md-2 p-2">
            <h4 class="heading" style="font-weight: bold ; color:black;">Pilih Destinasi Wisata di {{$objwisatakabupaten->nama_kab}} yang Ingin Kamu Tinjau!
            </h4>
            <br>
            <p style="color:black; text-decoration: underline;">Filter Berdasarkan Kategori Wisata</p>
     
            <select class="selectpicker" multiple data-live-search="true" style="border: 1px solid">
                @foreach ($kategori as $kategories)
                <option>{{$kategories->nama_kategori}}</option>
                @endforeach
              </select>
              <br>
            @if(empty($objek_wisata) || count($objek_wisata) == 0)
           <br><br>
           <div class="row justify-content-md-center">
           <div class="col-12 col-md-8 py-4">
            <div class="card">
                <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                  Objek Wisata Belum Ditambahkan
                </div>
              </div>
           </div>
           </div>
            @else
            <div class="row g-2 g-md-4">
                @foreach ($objek_wisata as $objek_wisatas)
                    <div class="col-6 col-md-3 py-4">
                        <div class="mycard">
                            <a href="{{ url('/objek-wisata/detail2/' . $objek_wisatas->id_obj_wisata) }}">
                                <img src="{{ url('images/objekwisata/' . $objek_wisatas->file_foto) }}" alt=""
                                    class="mycard-image">
                            </a>
                            <h3 class="mycard-title" >{{ $objek_wisatas->nama_wisata }}</h3>
                        </div>
                    </div>
                @endforeach
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
<script src="{{ asset('assets/js/main.js') }}"></script>

@include('template/footer')
