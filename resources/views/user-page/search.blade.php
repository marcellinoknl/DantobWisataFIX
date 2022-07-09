@include('template/header')
{{-- @foreach ($search as $searches )
<div class="hero-wrap " style="background-image: url({{asset('images/search/'. $searches ->file_foto)}}); width: 100%; height:75%; ">
    <div class="overlay" style="width:100%;height: 100%;"></div>
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">{{$searches->tagline}}</h1>
                @endforeach
   
            </div>
        </div>
    </div>
</div> --}}
@foreach ($search as $searches )
<div class="hero-wrap " style="background-image: url({{asset('images/search/'. $searches ->file_foto)}}); width: 100%; height:75%; ">
    <div class="overlay" style="width:100%;height: 75%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="sharethis-sticky-share-buttons"></div>
            <div class="col-md-12 ftco-animate">
               <h1 class="mb-4" style="text-align: center;">{{$searches->tagline}}</h1>
               @endforeach
            </div>
        </div>
    </div>
</div>
@include('template/footer')