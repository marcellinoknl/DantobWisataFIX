@include('template/header')

<div class="hero-wrap  " style="background-image: url(images/bgpa.jpeg); width: 100%; height:100%;">
    <div class="overlay" style="width:100%;height: 100%;"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 ftco-animate">
                <h1 class="mb-4" style="text-align: center;">CERITA WISATA SAYA</h1>
            </div>
        </div>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">

    <div class="container">
        <h1 class="title" style="font-weight: bold ; font-size: 50px; color:black;">
            PENGALAMAN WISATA SAYA
        </h1>

        <hr class="mt-2 mb-3" style="border:solid 0.5px" />
        <br>
        <script>
            function myAuthFunc() {
              alert("Anda harus Login terlebih dahulu");
             
            }
            </script>
        <div class="container p-md-2 p-2">

            @if(empty($pengalamansaya) || count($pengalamansaya) == 0)
            <br><br>
            <div class="row justify-content-md-center">
            <div class="col-12 col-md-8 py-4">
             <div class="card">
                 <div class="card-body text-center" style="font-size:30px; color:black; text-weight:bold;">
                Anda Belum Menambahkan Pengalaman Wisata Anda
             <center>  <a href="{{url('/tambah-pengalamanwisata')}}"><button type="button" class="btn btn-outline-success float-lg-right" data-mdb-ripple-color="dark"  >Tambahkan Pengalaman</button></a></center>
                 </div>
               </div>
            
            </div>
            </div>
             @else

            <div class="row g-2 g-md-4 py-4">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Pengalaman</th>
                        <th scope="col">Tanggal Pembuatan</th>
                        <th scope="col">Tanggal Perubahan Terakhir</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                      </tr> 
                      <?php $number = 1; ?>
                    </thead>

                    <tbody>
                        @foreach ($pengalamansaya    as $pengalamans)
                      <tr>
                        <th style="text-align:center" scope="row"><?php echo $number++; ?></th>
                        <td style="text-align:center">{{$pengalamans->judul}}</td>
                        <td style="text-align:center">
                            <?php
									$date=date_create($pengalamans->created_at);
									echo date_format($date,"d M Y");
									?>
                        </td>
                        <td style="text-align:center">
                        <?php
                            $date=date_create($pengalamans->updated_at);
                            echo date_format($date,"d M Y");
                            ?>
                        </td>
                        <td style="text-align:center;"><span style="color:black;" class="badge {{($pengalamans->status == "pending")? 'bg-warning': 'bg-success'}}">{{$pengalamans->status}}</span></td>
                        <td>
                            <button class="btn btn-warning" onclick="window.location.href='/ubah-pengalamansaya/{{$pengalamans->id_pengalaman}}'"><i class="fa-fa-pen"></i>Edit</button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
            @endif
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

@include('template/footer')
