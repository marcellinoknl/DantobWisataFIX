<div class="row">
    <div class="col-lg-12">
        <div class="footer">

            <p><?php echo date("Y"); ?> © Pariwisata Danau Toba Admin. - <a href="{{ url('/')}}">Pariwisata Danau Toba</a></p>
        </div>
    </div>
</div>
</section>
</div>
</div>
</div>

<!-- jquery vendor -->
<script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
<!-- nano scroller -->
<script src="{{asset('assets/js/lib/menubar/sidebar.js')}}"></script>
<script src="{{asset('assets/js/lib/preloader/pace.min.js')}}"></script>
<!-- sidebar -->

<script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<!-- bootstrap -->

<script src="{{asset('assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
<script src="{{asset('assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
<script src="{{asset('assets/js/lib/calendar-2/pignose.init.js')}}"></script>


<script src="{{asset('assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('assets/js/lib/weather/weather-init.js')}}"></script>
<script src="{{asset('assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>
<script src="{{asset('assets/js/lib/chartist/chartist.min.js')}}"></script>
<script src="{{asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/lib/sparklinechart/sparkline.init.js')}}"></script>
<script src="{{asset('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
<!-- scripit init-->
<script src="{{asset('assets/js/dashboard2.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
    
<script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>

    <!-- Data table-->
<script src="{{asset('tabelfolder/js/table.js')}}"></script>
    
<script>
            $(document).ready(function() {
            $('#example').DataTable(
                
                {     

            "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
            } 
                );
        } );


        function checkAll(bx) {
        var cbs = document.getElementsByTagName('input');
        for(var i=0; i < cbs.length; i++) {
            if(cbs[i].type == 'checkbox') {
            cbs[i].checked = bx.checked;
            }
        }
        }
</script>

</body>

</html>