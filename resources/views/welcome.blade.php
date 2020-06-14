<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MemeGen</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    h2 {
      text-align: center;
      padding: 20px;
    }

    /* Slider */

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-slider {
      position: relative;
      display: block;
      box-sizing: border-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-touch-callout: none;
      -khtml-user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }

    .slick-list:focus {
      outline: none;
    }

    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .slick-track {
      position: relative;
      top: 0;
      left: 0;
      display: block;
    }

    .slick-track:before,
    .slick-track:after {
      display: table;
      content: '';
    }

    .slick-track:after {
      clear: both;
    }

    .slick-loading .slick-track {
      visibility: hidden;
    }

    .slick-slide {
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
      float: right;
    }

    .slick-slide img {
      display: block;
    }

    .slick-slide.slick-loading img {
      display: none;
    }

    .slick-slide.dragging img {
      pointer-events: none;
    }

    .slick-initialized .slick-slide {
      display: block;
    }

    .slick-loading .slick-slide {
      visibility: hidden;
    }

    .slick-vertical .slick-slide {
      display: block;
      height: auto;
      border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
      display: none;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}"><span>MemeGen</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#createnow">Create now!</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#recentcreated">Recently Created</a></li>

          @if (Auth::check())
          <li class="get-started"><a href="{{url('home')}}">Dashboard</a></li>
          @else
          <li class="get-started"><a href="login">Login</a></li>
          <li class="get-started"><a href="register">Register</a></li>
          @endif

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Initial Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Create your memes with MemeGen</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">A meme generator where users create their own personalize images
            easily. </h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{url('home')}}" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/memesinicio.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- Initial Section -->

  <main id="main">
    
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

   

        </div>

      </div>
    </section>


    <!-- ======= Create Now Section ======= -->
    <section id="createnow" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Create Now!</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Create your memes in a few clicks. Register and start making them. Follow the instructions
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Upload a image directly to Meme Generator.</li>
              <li><i class="ri-check-double-line"></i> Create your meme by adding text to the correct category of your
                image. </li>
              <li><i class="ri-check-double-line"></i> Just select choose file or files and click on upload, enter name
                for your final meme will be produced.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              Meme Generator is a website made by a group of people that are awesome !!!
            </p>
            <a href="{{ route('register') }}" class="btn-learn-more">Sign Up!</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Create Now Section -->

   
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

   

        </div>

      </div>
    </section>


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
          <p>Here you can see frequently asked questions!</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>What is a Meme Generator?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              It's a free online image maker that allows you to add custom resizable text to images. It operates in
              HTML5 canvas, so your images are created instantly on your own device. Most commonly, people use the
              generator to add text captions to established memes, so technically it's more of a meme "captioner" than a
              meme maker. However, you can also upload your own images as templates.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Can I use the generator for more than just memes?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Yes! The Meme Generator is a flexible tool for many purposes. By uploading custom images and using all the
              customizations, you can design many creative works including posters, banners, advertisements, and other
              custom graphics.
            </p>
          </div>
        </div>
        
      </div>
    </section>
    <!-- End F.A.Q Section -->

    
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

   

        </div>

      </div>
    </section>



    <!-- ======= Recently Created Section ======= -->

    <section id="recentcreated" class="recentcreated">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Recently Created</h2>
          <p>Here you can see the most recent memes created by our community!</p>
        </div>
        @php
        $pictures = App\Models\Pictures::where('type', 1)->orderBy('id','desc')->limit(10)->get();
        @endphp
        <section class="customer-logos slider">
          @foreach($pictures as $picture)
          <div class="slide" style="width:200px"><img src="{{$picture->path}}"></div>
          @endforeach
        </section>
      </div>
    </section>

    <!-- End Recently Created Section -->



  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->

  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            <strong> Made by <a href="#">andreM-coder</a>&copy;</strong>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function(){
      $('.customer-logos').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [{
              breakpoint: 768,
              settings: {
                  slidesToShow: 4
              }
          }, {
              breakpoint: 520,
              settings: {
                  slidesToShow: 3
              }
          }]
      });
  });
  </script>
</body>

</html>