<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wisata Kawasan Danau Toba</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('images/simanjarunjubg.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    {{-- card style --}}
    <link href="{{ asset('css/cardStyle.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="{{ asset('text/css" href="css/about.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template2/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template2/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template2/vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template2/vendor/MagnificPopup/magnific-popup.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template2/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template2/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template2/css/main.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card_fasil_detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/searchstyle.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js%22%3E"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    
    <!-- SELECT DATA -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.js"></script>


<!--============FASILITAS CARD================-->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fasilitas.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Pariwisata<span>Danau Toba</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item {{Request::segment(1) === '' ? 'active' : null }}"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                    <li class="nav-item {{Request::segment(1) === 'objek-wisata' ? 'active' : null }}"><a href="{{ url('/objek-wisata') }}" class="nav-link">Destinasi
                            Wisata</a></li>
                    <div class="navbar-nav ml-auto dropdown show">
                        <li class="nav-item {{Request::segment(1) === 'atraksi'||Request::segment(1) === 'eventwisata'||Request::segment(1) === 'beritawisata' ? 'active' : null }}" type="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a href="/blog" class="nav-link">Eksplorasi</a>
                        </li>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                            <a href="{{ url('/atraksi') }}"><button class="dropdown-item"
                                    type="button">Atraksi</button></a>
                            <a href="{{ url('/eventwisata') }}"><button class="dropdown-item"
                                    type="button">Event</button></a>
                            <a href="{{ url('/beritawisata') }}"><button class="dropdown-item"
                                    type="button">Berita</button></a>
                        </div>
                    </div>
                    <li class="nav-item {{Request::segment(1) === 'fasilitaswisata' ? 'active' : null }}"><a href="{{ url('/fasilitaswisata') }}"
                            class="nav-link">Fasilitas</a></li>
                    <li class="nav-item {{Request::segment(1) === 'galeriwisata' ? 'active' : null }}"><a href="{{ url('/galeriwisata') }}" class="nav-link">Galeri</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) === 'pengalaman-wisata' ? 'active' : null }}"><a href="{{ url('/pengalaman-wisata') }}" class="nav-link">Pengalaman Wisata</a>
                    </li>
                    
                    
                        @if (Route::has('login'))
                            <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link"><i
                                        class="fa fa-sign-in" aria-hidden="true"></i> Masuk</a></li>
                        @endif
                    @else
                    <li class="nav-item "><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                    <li class="nav-item  {{Request::segment(1) === 'objek-wisata' ? 'active' : null }}"><a href="{{ url('/objek-wisata') }}" class="nav-link">Destinasi
                            Wisata</a></li>
                    <div class="navbar-nav ml-auto dropdown show">
                        <li class="nav-item {{Request::segment(1) === 'atraksi'||Request::segment(1) === 'eventwisata'||Request::segment(1) === 'beritawisata' ? 'active' : null }}" type="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a href="/blog" class="nav-link">Eksplorasi</a>
                        </li>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                            <a href="{{ url('/atraksi') }}"><button class="dropdown-item"
                                    type="button">Atraksi</button></a>
                            <a href="{{ url('/eventwisata') }}"><button class="dropdown-item"
                                    type="button">Event</button></a>
                            <a href="{{ url('/beritawisata') }}"><button class="dropdown-item"
                                    type="button">Berita</button></a>
                           <a href="{{ url('/desawisata') }}"><button class="dropdown-item"
                                    type="button">Desa Wisata</button></a>         
                        </div>
                    </div>
                    <li class="nav-item {{Request::segment(1) === 'fasilitaswisata' ? 'active' : null }}"><a href="{{ url('/fasilitaswisata') }}"
                            class="nav-link">Fasilitas</a></li>
                    <li class="nav-item {{Request::segment(1) === 'galeriwisata' ? 'active' : null }}"><a href="{{ url('/galeriwisata') }}" class="nav-link">Galeri</a>
                    </li>

                    <div class="navbar-nav ml-auto dropdown show">
                        <li class="nav-item {{Request::segment(1) === 'pengalaman-wisata'||Request::segment(1) === 'pengalamanwisata-saya' ? 'active' : null }}" type="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a href="/blog" class="nav-link">Artikel</a>
                        </li>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                            <a href="{{ url('/pengalaman-wisata') }}"><button class="dropdown-item"
                                    type="button">Pengalaman Wisata</button></a>
                            <a href="{{ url('/pengalamanwisata-saya') }}"><button class="dropdown-item"
                                    type="button">Pengalaman Wisata Saya</button></a>
                        </div>
                    </div>
                        <div class="navbar-nav ml-auto dropdown show">
                            <li class="nav-item" type="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <a href="/blog" class="nav-link">{{ Auth::user()->name }}</a>
                            </li>


                            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                @if ( auth()->user()->role !=1)
                                <a class="dropdown-item" href="{{ url('/admin-wisata') }}"><button class="dropdown-item"
                                    type="button">Admin</button></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><button
                   class="dropdown-item" type="button">{{ __('Logout') }}</button></a>
                                @else
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><button
               class="dropdown-item" type="button">{{ __('Logout') }}</button></a>
                                @endif
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        @endguest
    </nav>
</body>
<!-- END nav -->
