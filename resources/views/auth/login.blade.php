
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Borrowing Books</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assetss/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/css/main.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('assets/booke/booke/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/booke/booke/css/style.css')}}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-lg-3">
              <h1 class="my-0 site-logo">Books</h1>
            </div>
            <div class="col-6 col-lg-9">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 "><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li><a href="welcome" class="nav-link">Home</a></li>
                    <li><a href="categori" class="nav-link">Categories</a></li>
                    <li><a href="about" class="nav-link">About Book</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
	</div> <!-- END .site-navbar-wrap -->

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
					<span class="login100-form-title p-b-34">
						Account Login
                    </span>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							password?
						</a>
					</div>

					{{-- <div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div> --}}
				</form>

				<div class="login100-more" style="background-image: url('assetss/images/buku.jpeg');"></div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assetss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('assetss/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/js/main.js')}}"></script>

</body>
</html>
