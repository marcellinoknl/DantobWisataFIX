@include('template/header')

<div class="hero-wrap  " style="background-image: url({{ asset('images/bgpa.jpeg') }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
                <!-- <h1 class="mb-4" style="text-align: center;">DESTINASI WISATA</h1> -->
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">Jelajahi Desa Wisata yang ada di daerah Danau
            Toba</h1>
        <p class="caption" style=" color:black;">Desa Wisata di Danau Toba juga tak kalah menarik
            Berbagai macam Desa Wisata yang ada di daerah sekitaran Danau Toba serta budaya yang ada membuat kamu tidak akan melukapan keindahan Danau
            Toba.
        </p>
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br>
        <div class="container p-md-2 p-2">
            <h4 class="heading" style="font-weight: bold ; color:black;">Pilih Kabupaten yang Ingin Kamu Tinjau!
            </h4>
            @if(empty($objwisatakabupaten) || count($objwisatakabupaten) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                   Kabupaten Wisata Belum Ditambahkan
                 </div>
               </div>
            </div>
            </div>
            @else
            <div class="row g-2 g-md-4">
                @foreach ($objwisatakabupaten as $objekwisatas)
                <div class="col-6 col-md-3 py-4">
                        <div class="mycard">
                            <a href="{{ url('/desa-wisata/detail1/' . $objekwisatas->id_obj_wisata_kabupaten) }}">
                                <img src="{{ url('images/objekwisata/' . $objekwisatas->file_foto) }}" alt=""
                                    class="mycard-image">
                            </a>
                         
                            <h3 class="mycard-title">{{ $objekwisatas->nama_kab }}</h3>
      
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>



@include('template/footer')