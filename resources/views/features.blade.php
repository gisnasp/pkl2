<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Borrowing Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
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
                    <li><a href="features" class="nav-link">Features</a></li>
                    <li><a href="about" class="nav-link">About Book</a></li>
                    <li><a href="login" class="nav-link">Contact List</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->

    <div class="site-section" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h1 class="text-white serif text-uppercase mb-4">Happy Borrowing</h1>
            <p class="text-white mb-5">Membaca merupakan suatu cara untuk mendapatkan informasi yang di tulis. Hal tersebut dapat menguntungkan untuk pendengar lain yang juga bisa membangun konsentrasi kita sendiri.</p>
            </div>
          </div>
  
          <div class="row justify-content-center">
            <div class="col-md-10">
              <img src="{{asset('assets/booke/booke/images/book_1.png')}}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

      <div class="site-section bg-light" id="features-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-7">
              <h2 class="heading">Macam-macam Novel</h2>
              <p>Novel adalah karangan prosa panjang yang mengandung rangkaian cerita kehidupan seseorang dengan orang yang berada di sekelilingnya dan menonjolkan watak (karakter) dan sifat setiap pelaku.</p>
            </div>        
          </div>
             
          <div class="row mb-5">
            <div class="col-md-12">
             <center><h2>Romantis</h2></center>   
            </div>
          </div>
           
          <div class="row">
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="service h-100">
                  <a href="{{ url('/empat')}}"><img src="{{asset('assetss/images/em.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
                <div class="reviews-star float-left">   
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="service h-100">
                <a href="{{ url('/kekasih')}}"><img src="{{asset('assetss/images/kk.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
                <div class="reviews-star float-left">   
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="service h-100">
                <a href="{{ url('/cintaa')}}"><img src="{{asset('assetss/images/cn.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
                <div class="reviews-star float-left">   
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="service h-100">
                <a href="{{ url('/dilan')}}"><img src="{{asset('assetss/images/dl.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
                <div class="reviews-star float-left">   
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="service h-100">
                <a href="{{ url('/asiyah')}}"><img src="{{asset('assetss/images/as.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
                <div class="reviews-star float-left">   
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="service h-100">
                <a href="{{ url('/ikhlas')}}"><img src="{{asset('assetss/images/ik.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
                <div class="reviews-star float-left">   
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

      <div class="site-section bg-light">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-12">
                  <center><h2>Horor</h2></center>   
              </div>        
            </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="service h-100">
                <a href="{{ url('/suramadu')}}"><img src="{{asset('assetss/images/sr.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/rumah')}}"><img src="{{asset('assetss/images/ht.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/misteri')}}"><img src="{{asset('assetss/images/mst.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/rasuk')}}"><img src="{{asset('assetss/images/rsk.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/lemari')}}"><img src="{{asset('assetss/images/lmr.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/peti')}}"><img src="{{asset('assetss/images/peti.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

      </div>
    </div>
</div>
      <script src="{{asset('assets/booke/booke/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/aos.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/jquery.sticky.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/stickyfill.min.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/jquery.easing.1.3.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/isotope.pkgd.min.js')}}"></script>
      
      <script src="{{asset('assets/booke/booke/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('assets/booke/booke/js/main.js')}}"></script>
    
         
      </body>
    </html>