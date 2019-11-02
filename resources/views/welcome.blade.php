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
                    <li><a href="#" class="nav-link">Home</a></li>
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
            <h2 class="heading">Macam-macam Buku</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, harum repudiandae provident neque voluptas odio nostrum officiis debitis et vitae, dolorem placeat fugiat recusandae aperiam aspernatur expedita alias, officia. Suscipit!</p>
          </div>        
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="service h-100">
                <a href="{{ url('/hujan')}}"><img src="{{asset('assetss/images/hujan.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/ayat')}}"><img src="{{asset('assetss/images/ayat.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/beijing')}}"><img src="{{asset('assetss/images/beijing.png')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/hujan2')}}"><img src="{{asset('assetss/images/hujan2.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
              <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/manusia')}}"><img src="{{asset('assetss/images/manusia.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a> 
                <div class="reviews-star float-left">   
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/surga')}}"><img src="{{asset('assetss/images/surga.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>          
                <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/danur')}}"><img src="{{asset('assetss/images/gb.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
                  <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/danur2')}}"><img src="{{asset('assetss/images/danur.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
            <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service h-100">
              <a href="{{ url('/danur3')}}"><img src="{{asset('assetss/images/sny.jpg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
               <div class="reviews-star float-left">   
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7">
            <h2 class="heading">Book Screenshot</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, harum repudiandae provident neque voluptas odio nostrum officiis debitis et vitae, dolorem placeat fugiat recusandae aperiam aspernatur expedita alias, officia. Suscipit!</p>
            <p class="mb-3">
              <a href="#" class="customNextBtn">Prev</a>
              <span class="mx-2">/</span>
              <a href="#" class="customPrevBtn">Next</a>
            </p>
          </div>
        </div>
        
        <div class="owl-carousel slide-one-item">
          <img src="{{asset('assets/booke/booke/images/img_1.jpg')}}" alt="Image" class="img-fluid">
          <img src="{{asset('assets/booke/booke/images/img_2.jpg')}}" alt="Image" class="img-fluid">
          <img src="{{asset('assets/booke/booke/images/img_3.jpg')}}" alt="Image" class="img-fluid">
          <img src="{{asset('assets/booke/booke/images/img_4.jpg')}}" alt="Image" class="img-fluid">
          <img src="{{asset('assets/booke/booke/images/img_5.jpg')}}" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>

    <div class="author  d-lg-flex" id="about-section">
      <div class="bg-img" style="background-image: url('assets/booke/booke/gambar/buku.jpeg');"></div>
      <div class="text">
        <h3>Hello It's Jane</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis qui voluptates illum harum minima accusantium praesentium eos aut ab. Voluptate nulla illum ullam maxime consequuntur labore qui delectus, omnis saepe.</p>
        <p>Eos ratione repellat ea dignissimos iure ipsam sed dolore, excepturi id recusandae cumque sit, fugiat obcaecati necessitatibus nisi voluptate similique? Sed quae itaque nisi magnam amet aut maiores debitis temporibus.</p>
        <p>Iste repellendus libero cumque facilis sint quas quis temporibus quia veritatis reiciendis obcaecati, magni, dolorum aspernatur laborum, est, sequi rerum! Perspiciatis facilis commodi libero ipsa minima reiciendis rerum, facere quaerat.</p>

        div.social_

        <div class="mt-5">
          <span class="d-block text-black mb-4">Jane Smith, <span class="text-muted">Book Author &amp; Publisher</span></span>
          <img src="{{asset('assets/booke/booke/images/signature.png')}}" alt="Image" class="img-fluid w-25">
        </div>
        
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam blanditiis, vero voluptatum distinctio qui. Nostrum quibusdam, dolor unde sunt fugiat.</p>
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto">
           
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Book Author</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#" >Team</a></li>
                </ul>
              </div>
              
            </div>
            
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0" id="contact-section">

            <div class="mb-5">
              <h3 class="footer-heading mb-4">Quick Contact</h3>
              <form method="post" class="form-subscribe">
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Name" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <textarea name="" class="form-control" id="" cols="30" rows="4" placeholder="Your message"></textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Send Message</button>
                </div>
              </form>

            </div>

            


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
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