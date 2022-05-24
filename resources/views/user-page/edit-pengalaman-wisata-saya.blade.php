@include('template/header')

<div class="hero-wrap  " style="background-image: url(images/bgpa.jpeg); width: 100%; height:100%;">
    <div class="overlay" style="width:100%;height: 100%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">EDIT PENGALAMAN WISATA ANDA</h1>
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title text-center" style="font-weight: bold ; font-size: 50px; color:black; ">
           EDIT PENGALAMAN WISATA
        </h1>

        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br>
        
        <div class="container p-md-2 p-2">
            <form action="{{route('pengalamansaya.ubah', $updates->id_pengalaman)}}" method="post" id="contact-form" enctype="multipart/form-data">	
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="inputAddress">Judul Pengalaman Wisata</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror"id="inputAddress" placeholder="Masukkan Judul" name="judul" value="{{$updates->judul}}">
                  @error('judul')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
                </div>
                <div class="form-group">
                    <label for="inputAddress">Foto Pengalaman Wisata</label>
                    <input type="file" class="form-control" id="inputAddress" name="file_foto" value="">{{$updates->file_foto}}
                    </div>
                    <label style="color:red">Maks. Ukuran: 5MB <br/> Maks. Lebar: 1200 Pixel</label>
                  <div class="form-group">
                    <label for="inputAddress">Deskripsi Pengalaman Wisata</label>
                    <textarea name="deskripsi"class="form-control @error('deskripsi') is-invalid @enderror" cols="30" rows="10" id="editor" height="300px" value="">{{$updates->deskripsi}}</textarea>
                    @error('deskripsi')
                     <div class="invalid-feedback">
                     {{ $message }}
                      </div>
                      @enderror
                    <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                    </script>
                  </div>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
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
