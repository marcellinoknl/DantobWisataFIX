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
      <title>Masuk</title>
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
      <div class="container-xxl">
         <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-basic">
               <!-- Register -->
               <div class="card">
                  <div class="card-body">
                     <!-- Logo -->
                     <div class="app-brand justify-content-center">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">

                           <span class="app-brand-text text-body fw-bolder" style="font-size:30px; ">Pariwisata Danau Toba</span>
                        </a>
                     </div>
                     <!-- /Logo -->
                     @if (session('login'))
<div class="dropdown">
                        <a class="dropdown">
                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <div>
                                    <strong>Warning</strong>,{{ session('login') }}
                                </div>
                            </div>
                        </a>
                    </div>
@endif
              </br></br>
                 
                     <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}"enctype="multipart/form-data">
                        @csrf
                        <div class=" mb-3">
                           <label for="email" class=" form-label ">{{ __('EMAIL ') }}</label>
                           <input id="email" placeholder="Masukkan Email Anda"type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                           @error('email')
    <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
@enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                           <div class="d-flex justify-content-between">
                              <label for="password" class=" col-form-label text-md-end">{{ __('Kata Sandi') }}</label>
                              <a href="{{ url('/password/reset') }}">
                              <small style="color: #1877F2">Lupa Kata Sandi?</small>
                              </a>
                           </div>
                           <div class="input-group input-group-merge">
                              <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                 aria-describedby="password"/>
                                 
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                              @error('password')
    <span class="invalid-feedback" role="alert">
                                                                                                     <strong>{{ $message }}</strong>
                                                                                                     </span>
@enderror
                           </div>
                        </div>
                        <div class=" mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="remember">{{ __('Ingat Saya') }}</label>
                           </div>
                        </div>
                        <div class="mb-3">
                           <button class="btn btn-primary d-grid w-100" style="background-color:#1877F2" type="submit">Masuk</button>
                        </div>
                        <!-- <div class=" mb-3">
                           <div class=" col-md-6 offset-md-4">
                               <button type="submit" class="btn btn-secondary d-grid w-100"style="background-color:green" type="submit">
                                   {{ __('Login') }}
                               </button> -->
                        <!-- @if (Route::has('password.request'))
<a class="btn btn-link" href="{{ route('password.request') }}">
                               {{ __('Forgot Your Password?') }}
                           </a>
@endif -->              
                           <h5 style="text-align: center;">Atau</h5>
                        <button class="btn btn-secondary d-grid w-100" style="background-color:white" type="submit"><a  href="{{route('google.login')}}"><img src="/images/google.jpg" width="25" height="25" border='0' alt="Submit this form" name="sub_but" /> Login Dengan Google</a></button>
                       
                           
                     </form>
                     <p class="text-center">
                        <span><b></b></span>
                        <a href="{{ url('/register') }}"><br>
                           <span style="color:#566A7F">Belum Mempunyai Akun? </span><span style="color:#1877F2">Daftar Sekarang</span><br>
                        </a>
                     </p>
                  </div>
               </div>
               <!-- /Register -->
            </div>
         </div>
      </div>
      <!-- / Content -->
      <div class="buy-now">
         <a href="{{ url('/') }}"target="_self"class="btn btn-danger btn-buy-now">Beranda</a>
      </div>
      <!-- Core JS -->
      <!-- build:js auth/assets/vendor/js/core.js -->
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
