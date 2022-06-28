<!DOCTYPE html>
<html
   lang="en"
   class="light-style customizer-hide"
   dir="ltr"
   data-theme="theme-default"
   data-assets-path="../auth/assets/"
   data-template="vertical-menu-template-free"
   >
   <head>
      <meta charset="utf-8" />
      <meta
         name="viewport"
         content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
         />
      <title>Daftar Akun</title>
      <meta name="description" content="" />
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="../auth/assets/img/favicon/favicon.ico" />
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
         rel="stylesheet"
         />
      <!-- Icons. Uncomment required icon fonts -->
      <link rel="stylesheet" href="../auth/assets/vendor/fonts/boxicons.css" />
      <!-- Core CSS -->
      <link rel="stylesheet" href="../auth/assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="../auth/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="../auth/assets/css/demo.css" />
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="../auth/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
      <!-- Page CSS -->
      <!-- Page -->
      <link rel="stylesheet" href="../auth/assets/vendor/css/pages/page-auth.css" />
      <!-- Helpers -->
      <script src="../auth/assets/vendor/js/helpers.js"></script>
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="../auth/assets/js/config.js"></script>
     
   </head>
   <body>
      <div class="container">
      <div class="row justify-content-center">
      <div class="container-xxl">
         <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-basic">
               <div class="card">
                  <!-- <div class="card-header">{{ __('Register') }}</div> -->
                  <div class="card-header"></div>
                  <div class="card-body">
                     <div class="app-brand justify-content-center">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                           <span class="app-brand-logo demo">

                           </span>
                           <span class="app-brand-text text-body fw-bolder" style="font-size:25px; ">Pariwisata Danau Toba</span>
                        </a>
                     </div>
                     <br>
                     <!-- /Logo -->
                     <h5 class="mb-2">Halo Wisatawan,</h5>
                     <p class="mb-4">Anda Harus Mempunyai Akun Agar Dapat Masuk!</p>
                     <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class=" mb-3">
                           <label for="name"  class=" form-label text-md-end">{{ __('Nama') }}</label>
                           <input id="name" type="text" placeholder="Masukkan Nama Anda" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                           @error('name')
    <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $message }}</strong>
                                                                   </span>
@enderror
                        </div>
                        <div class=" mb-3">
                           <label for="email" class="col-form-label text-md-end">{{ __('Alamat Email') }}</label>
                           <input id="email" type="email"placeholder="Masukkan Email Anda" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                           @error('email')
    <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $message }}</strong>
                                                                   </span>
@enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                           <div class="d-flex justify-content-between">
                           <label for="password" class=" col-form-label text-md-end">{{ __('Kata Sandi') }}</label>
                           </div>
                           <div class="input-group input-group-merge">
                           <input id="password" type="password" placeholder="Masukkan Password Anda"class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="password" required autocomplete="new-password">
                           <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                           @error('password')
    <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $message }}</strong>
                                                                   </span>
@enderror
                        </div>
                        </div>
                        <div class=" mb-3 form-password-toggle">
                           <div class="d-flex justify-content-between">
                           <label for="password-confirm" class=" col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label>
                           </div>
                           <div class="input-group input-group-merge">
                           <input id="password-confirm"placeholder="Konfirmasi Password Anda" type="password" class="form-control" name="password_confirmation" aria-describedby="password" required autocomplete="new-password"   aria-describedby="password">
                           <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                        </div>
                        <div class="mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                              <label class="form-check-label" for="terms-conditions">
                              Saya setuju terkait
                              <a href="javascript:void(0);">privacy policy & terms</a>
                              </label>
                           </div>
                        </div>
                        <button class="btn btn-secondary d-grid w-100" style="background-color:green">Daftarkan Sekarang</button>
                     </form>
                     <p class="text-center">
                        <span>Sudah Punya Akun?</span>
                        <a href="{{ url('/login') }}">
                        <span>Masuk</span>
                        </a>
                     </p>
                  </div>
               </div>
               <!-- Register Card -->
            </div>
         </div>
      </div>
      <!-- / Content -->
      <div class="buy-now">
         <a
            href="{{ url('/') }}"
            target="_self"
            class="btn btn-danger btn-buy-now"
            >Beranda</a
            >
      </div>
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="../auth/assets/vendor/libs/jquery/jquery.js"></script>
      <script src="../auth/assets/vendor/libs/popper/popper.js"></script>
      <script src="../auth/assets/vendor/js/bootstrap.js"></script>
      <script src="../auth/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
      <script src="../auth/assets/vendor/js/menu.js"></script>
      <!-- endbuild -->
      <!-- Vendors JS -->
      <!-- Main JS -->
      <script src="../auth/assets/js/main.js"></script>
      <!-- Page JS -->
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
   </body>

</html>
