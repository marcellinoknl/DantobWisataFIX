@include('template/header')

<div class="hero-wrap  " style="background-image: url(images/bgpa.jpeg); width: 100%; height:100%;">
    <div class="overlay" style="width:100%;height: 100%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">BERITA</h1>
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">
            Berita
        </h1>
        <p class="caption" style=" color:black;">
            Beberapa Berita Terkait Danau Toba
        </p>
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br>
        <div class="container p-md-2 p-2">

             <div class="row g-2 g-md-4">
            
                    @foreach ($berita_wisata as $beritas)
                    <div class="col-6 col-md-4 py-4">
                        <div class="card" style="width: 300px; border-radius: 5%;">
                            <a href="{{ url('/beita-wisata/detail/' . $beritas->id_berita) }}">
                            <img class="card-img-top" src="{{ url('images/berita/' . $beritas->file_foto) }}"
                                alt="Card image cap" style="height: 200px ; border-radius: 15px 15px 0px 0px; ">
                            </a>
                            <div class="card-body" style="height: 200px ;  ">
                                
                                    <?php   
                                    $isi_berita = substr($beritas->isi_berita,0,100);
                                    ?>
                                    
                                   <a href="{{ url('/beita-wisata/detail/' . $beritas->id_berita) }}" onMouseOver="this.style='text-decoration:underline'"
                                    onMouseOut="this.style='color:black'" style="color:black; ">
                                    <div class="title" style="text-weight:bold;">
                                        {{ $beritas->judul_berita }}
                                    </div>
                                </a>
                                <hr class="mt-2 mb-3" style="border:solid 0.5px" />
                                        <div class="caption" style=" color:black; text-align: justify;"> {!! $isi_berita!!} 
                                    </div>
                                    <a href="{{ url('/beita-wisata/detail/' . $beritas->id_berita) }}" onMouseOver="this.style='text-decoration:underline'"
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
<script src="template2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="template2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="template2/vendor/bootstrap/js/popper.js"></script>
<script src="template2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="template2/vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="template2/vendor/daterangepicker/moment.min.js"></script>
<script src="template2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="template2/vendor/slick/slick.min.js"></script>
<script src="assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="template2/vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="template2/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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
<script src="template2/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="template2/vendor/sweetalert/sweetalert.min.js"></script>
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
<script src="template2/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
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
<script src="assets/js/main.js"></script>


@include('template/footer')
