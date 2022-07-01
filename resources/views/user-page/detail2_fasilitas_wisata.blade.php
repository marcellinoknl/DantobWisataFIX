@include('template/header')

<div class="hero-wrap  "
    style="background-image:url({{ asset('images/fasilitas/' . $fasilitas_wisata_detail->file_foto) }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
        </div>
    </div>
</div>


<br>
<div class="bg0 m-t-23 p-b-140">

    <div class="container">

        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">
            {{ $fasilitas_wisata_detail->nama_fasilitas }}</h1>
            
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />

        <div class="postcard__subtitle small">
            {{-- <i class="fa fa-calendar" aria-hidden="true"></i>
            <?php
            $date=date_create($fasilitas_wisata_detail->updated_at);
            echo date_format($date,"d M Y"); ?> 
            @foreach ($fasilitias_wisata_detail_user as $fasilitias_wisata_detail_users )
            <i class="fa fa-user" aria-hidden="true"></i> {{$fasilitias_wisata_detail_users->name}}      
            @endforeach --}}
            <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $fasilitas_wisata_detail->lokasi }}                           
        </div>
        <br>
        <a href="/fasilitas-wisata/detail2/like/{{$fasilitas_wisata_detail->id_fasilitas}}"class ="text-danger"><i class="fa fa-heart"></i> {{$like}} Suka</a>
        <i class="fa fa-eye" style="color: black; font-weight: bold;">  {{$fasilitas_wisata_detail->views}} kali dikunjungi</i>
        <div class="container p-md-2 p-2">
            <p class="caption text-justify" style=" color:black;">
                {!! $fasilitas_wisata_detail->deskripsi !!}
            </p>

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
