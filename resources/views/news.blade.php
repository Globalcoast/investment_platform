<!doctype html>
<!--
Website By Miradontsoa / MiVFX
http://twitter.com/miradontsoa
http://miradontsoa.com
-->

<html class="no-js" lang="en">


<!-- Mirrored from highhay.com/demos/simpleux/item-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 18:01:37 GMT -->
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>Globalcoast | FAQs</title>

  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description" content="A beautiful and creative portfolio template. It is mobile friend (responsive) and comes with smooth animations">

  <!-- Disable screen scaling-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <meta name="twitter:site" content="@miradontsoa">
  <meta name="twitter:creator" content="@miradontsoa">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Page Title">
  <meta name="twitter:description" content="Description of the page">
  <meta name="twitter:image" content="http://highhay.com/img/bg-default.jpg">

  <!-- Facebook Meta -->
  <meta property="og:url" content="your website url here">
  <meta property="og:title" content="Page Title">
  <meta property="og:description" content="Description of the page">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://highhay.com/img/bg-default.jpg">
  <meta property="og:image:secure_url" content="http://highhay.com/img/bg-default.jpg">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="fonts/opensans/stylesheet.css">
  <link rel="stylesheet" href="fonts/bebas/stylesheet.css">
  <link rel="stylesheet" href="fonts/ionicons.min.css">
  <link rel="stylesheet" href="fonts/font-awesome.min.css">

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/vendor/swiper.min.css">
  <link rel="stylesheet" href="js/vendor/jquery.fullpage.min.css">
  <link rel="stylesheet" href="js/vegas/vegas.min.css">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="css/main.css">

  <!-- add alt layout here -->
  <link rel="stylesheet" href="css/style-color1.css">

  <script src="js/vendor/modernizr-2.7.1.min.js"></script>
</head>

<body id="menu" class="body-item">
  <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <!-- Page Loader : just comment these lines to remove it -->
  <div class="page-loader" id="page-loader">
    <div>
      <div class="icon ion-spin"></div>
      <p>loading</p>
    </div>
  </div>

  <!-- BEGIN OF site header Menu -->
  <header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">

    <!-- Begin of menu icon toggler -->
    <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
      <!-- Available class : menu-icon-dot / menu-icon-thick /menu-icon-random -->
      <span class="menu-icon menu-icon-random">
        <span class="bars">
          <span class="bar1"></span>
          <span class="bar2"></span>
          <span class="bar3"></span>
        </span>
      </span>
    </button>
    <!-- End of menu icon toggler -->

    <!-- Begin of logo/brand -->
    <a class="navbar-brand" href="index.html#">
      <span class="logo">
        <img class="light-logo" src="img/logo.png" alt="Logo">
      </span>
      <span class="text">
        <span class="line">Globalcoast</span>
        <span class="line sub">Online investment platform</span>
      </span>
    </a>
    <!-- End of logo/brand -->

    <!-- begin of menu wrapper -->
    <div class="all-menu-wrapper" id="navbarMenu">
      <!-- Begin of top menu -->
      <nav class="navbar-topmenu">
        <!-- Begin of CTA Actions, & Icons menu -->
        <ul class="navbar-nav navbar-nav-actions">
          <li class="nav-item">
            <a class="btn btn-outline-white btn-round" target="_blank" href="{{URL::to('/login')}}">
             Login
            </a>
          </li>
        </ul>
        <!-- End of CTA & Icons menu -->
      </nav>
      <!-- End of top menu -->

      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{URL::to('/register')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/about')}}">About</a>
          </li>
          
        </ul>
      </nav>
      <!-- End of hamburger mainmenu menu -->

      <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
     
      <!-- End of sidebar nav menu -->
    </div>
    <!-- end of menu wrapper -->

  </header>
  <!-- END OF site header Menu-->

  <!-- BEGIN OF page main content -->
  <main class="page-main page-fullpage main-anim" id="itempage">

    <!-- Begin of list two side 1 section -->
    <div class="section section-twoside fp-auto-height-responsive section-item" data-section="item-alpha">
      <div class="section-cover-tier mask-black" style="background-image:url('img/items/img-sample2.jpg')">
        <div class="cover-content">
          <div class="title-desc">
            <h2 class="display-4 display-title">Latest News</h2>
          </div>
        </div>
      </div>
      <!-- Begin of section wrapper -->
      <div class="section-wrapper largewidth">

        <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->


        <!-- begin of item -->
        <div class="item row">
          <!-- margi reservation -->
          <div class="col-12 col-md-4">
          </div>

          <!-- begin of text content -->
          <div class="col-12 col-md-8 center-vh">
            <!-- content -->
            <div class="section-content anim scrollable">

              <article class="article article-light">
                
                <div class="article-content">
                  <div class="wrapper">
                   




<ol>

    @foreach($NewsList as $News)

                        
                        <li>
              <h3 style="text-transform:;">{{$News->title}}</h3>
              <p><a href="{{URL::to('/news/view/'.$News->id)}}" class="btn btn-outline-white btn-round btn-sm">Continue</a></p>
            </li>

            @endforeach






                       
                      </ol>

                    
                   

                  </div>
                </div>
               
              </article>

             
            </div>
          </div>
          <!-- end of text content -->
        </div>
        <!-- end of item -->

      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of list two side 1 section -->
  </main>
  <!-- END OF page main content -->



  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script src="js/vendor/all.js"></script>
  <script src="js/particlejs/particles.min.js"></script>

  <!-- Countdown script -->
  <script src="js/jquery.downCount.js"></script>

  <!-- Form script -->
  <script src="js/form_script.js"></script>

  <!-- Javascript main files -->
  <script src="js/main.js"></script>


</body>


<!-- Mirrored from highhay.com/demos/simpleux/item-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 18:01:37 GMT -->
</html>