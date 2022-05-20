@include('template/header')
<div class="hero-wrap js-fullheight" style="background-image: url('images/bgpa.jpeg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                @if (session('error'))
                    <div class="dropdown">
                        <a class="dropdown">
                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <div>
                                    Hallo <strong>{{ Auth::user()->name }} </strong>,{{ session('error') }}
                                </div>

                            </div>
                        </a>
                    </div>
                @endif
                <span class="subheading">Selamat Datang Di Wisata Kawasan Danau Toba</span>
                <h1 class="mb-4">Kunjugi Tempat Favorit Anda</h1>
                <p class="caps">Kepingan Surga Toba</p>
            </div>

        </div>
    </div>
</div>


<section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                <div>
                    @foreach ($objekwisata as $objekwisatass )
                    <img src="{{ url('images/objekwisata/' . $objekwisatass->file_foto) }}" alt="" height="300px" cols="200px" rows="20">
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-12 d-flex align-self-stretch ftco-animate">

                        <div class="w-100">
                            <h1 class="mb-4"style="font-weight: bold">Pariwisata Danau Toba</h1>
                            <p style="color: black">Danau Toba terletak di Sumatera Utara, Indonesia. Danau Toba terbentuk dari letusan gunung api Toba yang sangat dahsyat yang terjadi sekitar 74.000 tahun yang lalu.
                                 Dengan luas lebih dari 1.145 kilometer persegi dan kedalaman 450 meter.</p>
                            <p style="color: black">Ingin tahu lebih tentang danau Toba? <br>
                                Yuk jelajahi website ini.
                            </p>
                            <p><a href="{{ url('/objek-wisata') }}" class="btn btn-primary py-3 px-4"style="background-color:#FF5959">Telusuri Destinasi Wisata</a></p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Destinasi Wisata</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="project-wrap">
                    @if(empty($objekwisataa) || count($objekwisataa) == 0)
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
                         @foreach ($objekwisataa as $objekwisatas)
                             <div class="col-6 col-md-3 py-4">
                                 <div class="mycard-detail-home">
                                     <a href="{{ url('/objek-wisata/detail2/' . $objekwisatas->id_obj_wisata) }}">
                                         <img src="{{ url('images/objekwisata/' . $objekwisatas->file_foto) }}" alt=""
                                             class="mycard-image-detail-home">
                                     </a>
                                     <h3 class="mycard-title-detail-home" >{{ $objekwisatas->nama_wisata }}</h3>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                     @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Destinasi Wisata</h2>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                            <!-- Block1 -->
                            <div class="block1 wrap-pic-w">
                                <img src="images/destination-1.jpg" alt="IMG-BANNER">

                                <a href="product.html"
                                    class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                    <div class="block1-txt-child1 flex-col-l">
                                        <span class="block1-name ltext-102 trans-04 p-b-8">
                                            Berita
                                        </span>

                                        <span class="block1-info stext-102 trans-04">
                                            Lake Toba's News
                                        </span>
                                    </div>

                                    <div class="block1-txt-child2 p-b-4 trans-05">
                                        <div class="block1-link stext-101 cl0 trans-09">
                                            Tinjau Sekarang
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

{{-- <section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100">
                    <span class="subheading">Welcome to Pacific</span>
                    <h2 class="mb-4">It's time to start your adventure</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.
                        A small river named Duden flows by their place and supplies it with the necessary regelialia.
                    </p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-1 d-block img"
                            style="background-image: url(images/services-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-paragliding"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Activities</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-2 d-block img"
                            style="background-image: url(images/services-2.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-route"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Travel Arrangements</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-3 d-block img"
                            style="background-image: url(images/services-3.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-tour-guide"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Private Guide</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-4 d-block img"
                            style="background-image: url(images/services-4.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-map"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Location Manager</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Pacific Provide Places</span>
                <h2 class="mb-4">Select Your Destination</h2>
            </div>
        </div>
    </div>
    <div class="container container-2">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-destination owl-carousel ftco-animate">
                    <div class="item">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-1.jpg);">
                                <div class="text">
                                    <h3>Philippines</h3>
                                    <span>8 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-2.jpg);">
                                <div class="text">
                                    <h3>Canada</h3>
                                    <span>2 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-3.jpg);">
                                <div class="text">
                                    <h3>Thailand</h3>
                                    <span>5 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-4.jpg);">
                                <div class="text">
                                    <h3>Autralia</h3>
                                    <span>5 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-destination">
                            <a href="#" class="img" style="background-image: url(images/place-5.jpg);">
                                <div class="text">
                                    <h3>Greece</h3>
                                    <span>7 Tours</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}



{{-- <section class="ftco-section ftco-about img" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container py-md-5">
        <div class="row py-md-5">
            <div class="col-md d-flex align-items-center justify-content-center">
                <a href="https://www.youtube.com/watch?v=ojw2VEkh42E"
                    class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="ftco-section ftco-about ftco-no-pt img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="img d-flex w-100 align-items-center justify-content-center"
                            style="background-image:url(images/about-1.jpg);">
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">About Us</span>
                                <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.</p>
                                <p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Tourist Feedback</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Our Blog</span>
						<h2 class="mb-4">Recent Post</h2>
					</div>
				</div>
				<div class="row d-flex">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
							</a>
							<div class="text">
								<div class="d-flex align-items-center mb-4 topp">
									<div class="one">
										<span class="day">11</span>
									</div>
									<div class="two">
										<span class="yr">2020</span>
										<span class="mos">September</span>
									</div>
								</div>
								<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
								<p><a href="#" class="btn btn-primary">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
							</a>
							<div class="text">
								<div class="d-flex align-items-center mb-4 topp">
									<div class="one">
										<span class="day">11</span>
									</div>
									<div class="two">
										<span class="yr">2020</span>
										<span class="mos">September</span>
									</div>
								</div>
								<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
								<p><a href="#" class="btn btn-primary">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
							</a>
							<div class="text">
								<div class="d-flex align-items-center mb-4 topp">
									<div class="one">
										<span class="day">11</span>
									</div>
									<div class="two">
										<span class="yr">2020</span>
										<span class="mos">September</span>
									</div>
								</div>
								<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
								<p><a href="#" class="btn btn-primary">Read more</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
{{-- <section class="ftco-intro ftco-section ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<div class="img"  style="background-image: url(images/bg_2.jpg);">
							<div class="overlay"></div>
							<h2>We Are Pacific A Travel Agency</h2>
							<p>We can manage your dream building A small river named Duden flows by their place</p>
							<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

@include('template/footer')
