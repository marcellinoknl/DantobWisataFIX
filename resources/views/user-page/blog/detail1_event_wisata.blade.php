@include('template/header')

<div class="hero-wrap  "
    style="background-image: url({{ asset('images/eventwisata/' . $sampul_event->file_foto) }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">{{ $sampul_event->nama_sampul }}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        {{-- <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">Telusuri Event {{$sampul_event->nama_sampul}}</h1>
        <p class="caption" style=" color:black;">Event {{$sampul_event->nama_sampul}} menjadikan Keunikan tersendiri dimana masyarakat di sekitaran Danau Toba merayakannya.
        </p>
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br> --}}
        <div class="container p-md-2 p-2">
            {{-- <h4 class="heading" style="font-weight: bold ; color:black;">Pilih Event Wisata di {{$sampul_event->nama_sampul}} yang Ingin Kamu Tinjau!
            </h4> --}}
            @if(empty($event_wisata) || count($event_wisata) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                Event Wisata Belum Ditambahkan
                 </div>
               </div>
            </div>
            </div>
             @else
            <div class="row g-2 g-md-4">
                @foreach ($event_wisata as $event_wisatas)
                    <div class="col-6 col-md-3 py-4">
                        <div class="mycard">
                            <a href="{{ url('/event-wisata/detail2/' . $event_wisatas->id_event) }}">
                                <img src="{{ url('images/eventwisata/' . $event_wisatas->file_foto) }}" alt=""
                                    class="mycard-image">
                            </a>
                            <h3 class="mycard-title">{{ $event_wisatas->judul_event }}</h3>
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
<script>
    $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('template2/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/parallax100/parallax100.js') }}"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $('.js-addwish-b2, .js-addwish-detail').on('click', function(e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{ asset('template2/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="{{ asset('assets/js/main.js') }}"></script>

@include('template/footer')
