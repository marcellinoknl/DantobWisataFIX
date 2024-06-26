@include('template/header')

<div class="hero-wrap  " style="background-image: url(images/bgpa.jpeg); width: 100%; height:100%;">
    <div class="overlay" style="width:100%;height: 100%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">CERITA WISATAWAN</h1>
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">
            PENGALAMAN WISATA
        </h1>
        <div class="col-md-12" style="float: right;"> 
            @guest
        <a href="{{url('/tambah-pengalamanwisata')}}"><button type="button" class="btn btn-outline-success float-lg-right" data-mdb-ripple-color="dark" onclick="myAuthFunc()" >Tambahkan Pengalaman</button></a>
               @else
        <a href="{{url('/tambah-pengalamanwisata')}}"><button type="button" class="btn btn-outline-success float-lg-right" data-mdb-ripple-color="dark"  >Tambahkan Pengalaman</button></a>

            @endguest
        </div>
        <p class="caption" style=" color:black;">
            Berikut Pengalaman Wisatawan Danau Toba:
        </p>

        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br>
        <script>
            function myAuthFunc() {
              alert("Anda harus Login terlebih dahulu");
             
            }
            </script>
        <div class="container p-md-2 p-2">

            @if(empty($pengalaman) || count($pengalaman) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                Pengalaman Belum Ditambahkan
                 </div>
               </div>
            </div>
            </div>
             @else

            <div class="row g-2 g-md-4 py-4">
                @foreach ($pengalaman as $pengalamans)
         
                <div class="col-6 col-md-4 py-5">
                    <div class="card" style="width: 350px; height:600px; border-radius: 5%;">
                        <a href="{{ url('/pengalaman-wisata/detail/' . $pengalamans->id_pengalaman) }}">
                        <img class="card-img-top" src="{{ url('images/pengalaman/' . $pengalamans->file_foto) }}"
                            alt="Card image cap" style="height: 200px ; border-radius: 15px 15px 0px 0px; ">
                        </a>
                        <div class="card-body" style="height: 200px ;  ">
                            
                                <?php   
                                $deskripsi = substr($pengalamans->deskripsi,0,100);
                                ?>
                                
                               <a href="{{ url('/beita-wisata/detail/' . $pengalamans->id_pengalaman) }}" onMouseOver="this.style='text-decoration:underline'"
                                onMouseOut="this.style='color:black'" style="color:black; ">
                                <div class="title" style="text-weight:bold;">
                                    {{ $pengalamans->judul }}
                                </div>
                            </a>
                            <hr class="mt-2 mb-3" style="border:solid 0.5px" />
                                    <div class="caption" style=" color:black; text-align: justify;"> {!! $deskripsi!!} 
                                </div>
                                <a href="{{ url('/pengalaman-wisata/detail/' . $pengalamans->id_pengalaman) }}" onMouseOver="this.style='text-decoration:underline'"
                                    onMouseOut="this.style='color:rgb(40, 116, 196)'" style="color:rgb(40, 116, 196);">Baca Selengkapnya</a>
                            
                        </div>

                        <div class=" card-footer">
                            <small class="text-muted">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                {{ $pengalamans->name }}
                            &nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i> <?php
                                $date=date_create($pengalamans->updated_at);
                                echo date_format($date,"d M Y");
                                ?> </small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        </div>
            </div>
        


			<!-- Javascript modal -->
			<script>
				// Get the modals
				var modal = document.getElementById("myModal");
				
				// Get the image and insert it inside the modal - use its "alt" text as a caption
				var img = document.getElementById("myImg");
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				  modal.style.display = "block";
				  modalImg.src = this.src;
				  captionText.innerHTML = this.alt;
				}
				
				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];
				
				// When the user clicks on <span> (x), close the modal
				span.onclick = function() { 
				  modal.style.display = "none";
				}
				</script>

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
