@include('template/header')

<div class="hero-wrap  "
style="background-image: url(images/fasilitasbg.jpg); width: 100%; height:75%;">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
           
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">Cari Paket Wisata yang ingin Anda Tinjau</h1>
        <p class="caption" style=" color:black;">Beberapa Objek Wisata di Danau Toba mempunyai paket wisata yang beragam.
        </p>
        <hr class="mt-2 mb-3" style="border:solid 0.5px" />

        <br>

        <div class="container p-md-2 ">
          <center>
            <h4 class="heading" style="font-weight: bold ; color:black;">Pilih Paket Wisata yang Ingin Kamu Tinjau!
            </h4>
          </center>
            <br>



<!-- TEST -->
       
         
            @if(empty($paket) || count($paket) == 0)
           <br><br>

           <div class="row justify-content-md-center">
           <div class="col-12 col-md-8 py-4">
            <div class="card">
                <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                  Paket Wisata Belum Ditambahkan
                </div>
              </div>
           </div>
           </div>
            @else
<br>
            <div class="row g-2 g-md-4">

                @foreach ($paket as $pakets)
                    <div class="col-6 col-md-3 py-4 task-list-row">
                        <div class="mycard">
                            <a href="{{ url('/paket-wisata/detail/' . $pakets->id) }}">
                                <img src="{{ url('images/paketwisata/' . $pakets->file_foto) }}" alt=""
                                    class="mycard-image">
                            </a>
                            <h3 class="mycard-title"> >{{ $pakets->nama_paket }}</h3>
                        </div>
                    </div>
                @endforeach
                
            </div>
            @endif
      
        </div>
    </div>
</div>



@include('template/footer')
