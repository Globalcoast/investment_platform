<!doctype html>


<html class="no-js" lang="en">



<head>

   <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description" content="An investment platform that returns daily ROI of 10% on invested capital">

  <!-- Disable screen scaling-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <meta name="twitter:site" content="@globalcoast">
  <meta name="twitter:creator" content="@globalcoast">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Globalcoast">
  <meta name="twitter:description" content="An investment platform that return daily ROI of 10% on invested capital">
  <meta name="twitter:image" content="">

  <!-- Facebook Meta -->
  <meta property="og:url" content="https://www.globalcoast.net">
  <meta property="og:title" content="globalcoast">
  <meta property="og:description" content="Description of the page">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">
  <meta property="og:image:secure_url" content="">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="{{asset('fonts/opensans/stylesheet.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/bebas/stylesheet.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('js/vendor/swiper.min.css')}}">
  <link rel="stylesheet" href="{{asset('js/vendor/jquery.fullpage.min.css')}}">
  <link rel="stylesheet" href="{{asset('js/vegas/vegas.min.css')}}">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">

  <!-- add alt layout here -->
  <link rel="stylesheet" href="{{asset('css/style-default.css')}}">

  <link href="{{asset('css/parsley.css')}}" id="theme" rel="stylesheet">

  <script src="{{asset('js/vendor/modernizr-2.7.1.min.js')}}"></script>

  <link rel="stylesheet" href="https://cdn.plyr.io/2.0.18/plyr.css">


</head>

<body id="menu" class="body-page" style="">
  <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <!-- Page Loader : just comment these lines to remove it -->
  

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
    <a class="navbar-brand" href="#">
      <span class="logo">
        <img class="light-logo" src="img/logo.png" alt="Logo">
      </span>
      <span class="text">
        <span class="line">Globalcoast</span>
        <span class="line sub">Investment per excellence</span>
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

            @guest

            
            




           
             
            <a class="btn btn-outline-white btn-round" href="{{ route('login')}}">
              Login
            </a>

            &nbsp; &nbsp;

             <span class="hidden-sm hidden-xs" style="font-size: 100%;">Current investors : 
             <label id="count-test-2" class="demo" style="color: green;"></label>
             </span> 



            @else
            {{null}}
            @endguest

          </li>
        </ul>

         &nbsp; &nbsp;

        <span class="hidden-sm hidden-xs" id="google_translate_element" style="float: right;"></span>

        <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,az,cs,de,el,en,es,fi,fr,hi,id,it,iw,ja,ka,kn,ko,la,ml,ms,nl,pt,ru,sl,so,sv,tr,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <!-- End of CTA & Icons menu -->
      </nav>
      <!-- End of top menu -->

      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{URL::to('/register')}}">
              
              Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/about')}}">
          About</a>
          </li>
         
        </ul>
      </nav>
      <!-- End of hamburger mainmenu menu -->

      <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
      <nav class="navbar-sidebar ">
        <ul class="navbar-nav" id="qmenu">
          <li class="nav-item" data-menuanchor="home">
            <a href="#home" class="hidden-sm hidden-xs">
              <i class="icon ion-ios-home-outline"></i>
              <span class="txt">Home</span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="about">
            <a href="#about" class="hidden-xs hidden-sm">
              <i class="icon ion-ios-information-outline"></i>
              <span class="txt">About</span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="services">
            <a href="#services">
              <i class="icon ion-ios-list-outline"></i>
              <span class="txt">Core Values</span>
            </a>
          </li>
         
          

          <li class="nav-item" data-menuanchor="offers">
            <a href="#offers">
              <i class="icon ion-arrow-right-a"></i>
              <span class="txt">Offer</span>
            </a>
          </li>

          <li class="nav-item" data-menuanchor="payroll">
            <a href="#payroll">
              <i class="icon ion-cash"></i>
              <span class="txt">Payroll</span>
            </a>
          </li>

           <li class="nav-item" data-menuanchor="registers">
            <a href="#registers">
              <i class="icon ion-log-in"></i>
              <span class="txt">Register</span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="news">
            <a href="{{URL::to('/new')}}">
              <i class="icon ion-ios-compose-outline"></i>
              <span class="txt">News</span>
            </a>
          </li>

          <li class="nav-item" data-menuanchor="faqs">
            <a href="{{URL::to('faqs')}}">
              <i class="icon ion-help-circled"></i>
              <span class="txt">FAQs</span>
            </a>
          </li>

           <li class="nav-item" data-menuanchor="testimony">
            <a href="#testimony">
              <i class="icon ion-ios-people"></i>
              <span class="txt">Testimonies</span>
            </a>
          </li>

         
          

          <li class="nav-item" data-menuanchor="contact">
            <a href="#contact">
              <i class="icon ion-ios-telephone-outline"></i>
              <span class="txt">Contact</span>
            </a>
          </li>

           <li class="nav-item" data-menuanchor="security">
            <a href="#security">
              <i class="icon ion-lock-combination"></i>
              <span class="txt">Security</span>
            </a>
          </li>

         
        </ul>
      </nav>
      <!-- End of sidebar nav menu -->
    </div>
    <!-- end of menu wrapper -->

  </header>
  <!-- END OF site header Menu-->

  <!-- BEGIN OF page cover -->
  <div class="page-cover">
    <!-- Cover Background -->
    <div class="cover-bg bg-img" data-image-src="{{asset('img/bg-default1.jpg')}}"></div>

    <!-- Transluscent mask as filter -->
    <div class="cover-bg-mask bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div>


  </div>
  <!--END OF page cover -->

  <!-- BEGIN OF page main content -->
  @yield('content')
  <!-- END OF page main content -->

  <!-- BEGIN OF page footer -->
  <footer id="site-footer" class="page-footer">
    <!-- Left content -->
    <div class="footer-left">



      <p class="hidden-xs hidden-sm">&copy; 2017, Globalcoast LLC. All Rights Reserved. <a href="{{URL::to('register')}}" style="color: white;">Home</a> | <a href="{{URL::to('about')}}" style="color: white;">About</a> | <a href="{{URL::to('faqs')}}" style="color: white;">FAQs</a> | <a href="{{URL::to('register#contact')}}" style="color: white;">Contact </a>| <a href="{{URL::to('register#registers')}}" style="color: white;">Sign up</a> |<a href="{{URL::to('login')}}" style="color: white;"> Login</a>
        <a href="http://highhay.com/">
          <span class="marked"></span>
        </a>
      </p>


    </div>

    <!-- Right content -->
    <div class="footer-right">
      <ul class="social">
        <li>
          <a href="https://www.facebook.com/globalcoast/">
            <i class="icon fa fa-facebook"></i>
          </a>
        </li>
        <!--<li>
          <a href="https://www.twitter.com/globalcoast/">
            <i class="icon fa fa-twitter"></i>
          </a>
        </li>
      
        <li>
          <a href="https://www.instagram.com/globalcoast/">
            <i class="icon fa fa-instagram"></i>
          </a>
        </li>-->
      </ul>
    </div>
  </footer>
  <!-- END OF site footer -->

  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

  <!--count up -->

   <!--<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>

  <script>plyr.setup();</script>-->


<script src="{{asset('js/jQuerySimpleCounter.js')}}"></script>

<script type="text/javascript">

  <?php

    $start=$TotalInvestorsToDisplay - 5000;
    $end=$TotalInvestorsToDisplay;
    $duration=50000;

  ?>

$('#count-test-2').jQuerySimpleCounter({
         start:  {{$start}},
          end:    {{$end}},
      duration: {{$duration}}
    });
  </script>



      <!--parsley script -->
    <script src="{{asset('js/parsley.min.js')}}"></script>

  <!-- All vendor scripts -->
  <script src="{{asset('js/vendor/all.js')}}"></script>
  <script src="{{asset('js/particlejs/particles.min.js')}}"></script>

  <!-- Countdown script -->
  <script src="{{asset('js/jquery.downCount.js')}}"></script>

  <!-- Form script -->
  <script src="{{asset('js/form_script.js')}}"></script>

  <!-- Javascript main files -->
  <script src="{{ asset('js/main.js') }}"></script>

  <script src="{{asset('js/glob.js')}}"></script>



   {!! NoCaptcha::renderJs() !!}


   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a3836a8bbdfe97b137fc35b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>


<!-- Mirrored from highhay.com/demos/simpleux/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 17:55:55 GMT -->
</html>