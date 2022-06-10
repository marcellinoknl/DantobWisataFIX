@include('template/header')

<div class="hero-wrap  "
    style="background-image:url({{ asset('images/paketwisata/' . $paketwisatadetails->file_foto) }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">

        </div>
    </div>
</div>
<!-- Product -->
<br>
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">
            {{ $paketwisatadetails->nama_paket }}
        </h1>
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br>
        <div class="container p-md-2 p-2">
            <p  class="caption text-justify" style=" color:black; ">
                {!! $paketwisatadetails->deskripsi !!}
            </p>

            <div class="row g-2 g-md-4">

            </div>
        </div>
    </div>
</div>


@include('template/footer')
