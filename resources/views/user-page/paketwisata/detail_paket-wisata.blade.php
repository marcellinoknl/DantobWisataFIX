@include('template/header')

<div class="hero-wrap  "
    style="background-image:url({{ asset('images/paketwisata/' . $paketwisatadetails->file_foto) }}); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
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
        <a href="/paket-wisata/detail/like/{{$paketwisatadetails->id}}"class ="text-danger"style="font-weight: bold;"><i class="fa fa-heart"></i> {{$like}} Suka</a>
        &nbsp;&nbsp;&nbsp;
        <a href="#" style="color: black; font-weight: bold; "><i class="fa fa-eye"></i>  {{$paketwisatadetails->views}} Kali dikunjungi</a>
        {{-- <i class="fa fa-eye" style="color: black; font-weight: bold;">  {{$paketwisatadetails->views}} kali dikunjungi</i> --}}
        <div class="container p-md-2 p-2">
            <p  class="caption text-justify" style=" color:black; ">
                {!! $paketwisatadetails->deskripsi !!}
            </p>

            <div class="row g-2 g-md-4">
                <a href="https://wa.me/62{{$paketwisatadetails->nohp}}"target="_blank">
                <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                  </svg>&nbsp;&nbsp;Pesan Sekarang</button>
                </a>
            </div>
        </div>
    </div>
</div>


@include('template/footer')
