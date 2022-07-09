<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-color:#FFFF; border-top:0.5px ">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <a class="navbar-brand" href="{{ url('/') }}" style="color:black">Toba Journey<span>Danau Toba</span></a> 
                </div>
            </div>
            <div class="col-md pt-5 ">
                <div class="ftco-footer-widget pt-md-5 mb-4">
            
                    @foreach ($sosial as $sosials )
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft" >
                        <li class="ftco-animate" ><a href=" {{ url($sosials->twitter) }}" style="background-color:#00acee"><span class="fa fa-twitter" ></span></a></li>
                        <li class="ftco-animate"><a href="{{ url($sosials->facebook) }}"style="background-color:#3b5998 "><span class="fa fa-facebook" ></span></a></li>
                        <li class="ftco-animate"><a href="{{ url($sosials->instagram) }}"style="background-color:#3f729b "><span class="fa fa-instagram" ></span></a></li>
                        <li class="ftco-animate"><a href="{{ url($sosials->youtube) }}"style="background-color:#FF0000 "><span class="fa fa-youtube" ></span></a></li>
                    </ul>
                    @endforeach
                    <script type="text/javascript">var _Hasync= _Hasync|| [];
                        _Hasync.push(['Histats.start', '1,4676617,4,429,112,75,00011011']);
                        _Hasync.push(['Histats.fasi', '1']);
                        _Hasync.push(['Histats.track_hits', '']);
                        (function() {
                        var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                        hs.src = ('//s10.histats.com/js15_as.js');
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                        })();</script>
                        <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4676617&101" alt="counter create hit" border="0"></a></noscript>
                        <!-- Histats.com  END  -->            <!-- Histats.com  START  (aync)-->
                    <br>
                    <div class="ftco-footer-widget pt-md-5 mb-4">
 <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                    </div>
                                     
                </div>
           
            </div>

            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-2">
                    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                        <input type="text" placeholder="Cari..." name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                </div>
            </div>

        </div>
        
        <div class="row">
            <div class="col-md-12 text-center">

                <p style="color:black">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | TOBA JOURNEY
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
    
    form.example input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
    }
    
    form.example button {
      float: left;
      width: 20%;
      padding: 10px;
      background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
    }
    
    form.example button:hover {
      background: #0b7dda;
    }
    
    form.example::after {
      content: "";
      clear: both;
      display: table;
    }
    </style>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
<script>
    @if (Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif
 </script>
</html>