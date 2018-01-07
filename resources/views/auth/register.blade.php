
@extends('layouts.main')

@section('content')

<main class="page-main page-fullpage main-anim" id="mainpage">

    <!-- Begin of home section -->
    <div class="section section-home fullscreen-md fp-auto-height-responsive main-home"
    data-section="home">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper">
        <!-- content -->
        <div class="section-content anim">
          <div class="row">

            <div class="container">
               <h2 class="display-4 display-title home-title bordered anim-1">Globalcoast</h2>

            </div>

           
            
          </div>
          <div class="row">
            <div class="col-12 col-md-6 text-left">
              <!-- title and description -->
              <div class="title-desc">
                
                <h4 class="anim-2">Smart investment platform that returns daily ROI ranging from 3%-5% on invested capital</h4>
              </div>

              <!-- Action button -->
              <div class="btns-action anim-3">
                <a class="btn btn-outline-white btn-round" href="{{ route('register')}}#registers">
                  Register
                </a>

                <a class="btn btn-outline-white btn-round" href="#calculator">
                  Invetment calculator
                </a>
              </div>
            </div>

            <!-- begin of right content -->
            <div class="col-12 col-md-6 right-content hidden-sm center-vh">



<video poster="/path/to/poster.jpg" autoplay controls style="width:100%;" data-plyr='{ "autoplay": "true"}'>
  <source src="{{asset('vid/vid_ad1.mp4')}}" type="video/mp4">
  <!-- Captions are optional -->
  
</video>

              <!--
              <div class="section-content">
                  <iframe  src="{{asset('vid/vid_ad1.mp4')}}" frameborder="0" allowfullscreen></iframe>
              </div>-->
            </div>
            <!-- end of right content -->
          </div>
        </div>


        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of home section -->





    <!-- Begin of description section -->
    <div class="section section-description fp-auto-height-responsive " data-section="about">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper center-vh dir-col anim">
        <!-- title -->
        <div class="section-title text-center">
          <h5 class="title-bg">About</h5>
          <h2 class="display-4 display-title anim-2">About Globalcoast</h2>
        </div>

        <!-- content -->
        <div class="section-content reduced anim text-center">
          <!-- title and description -->
          <div class="title-desc anim-3">
            <p>GlobalCoast is a registered company founded in 1887 which ventured into agriculture as its major offline investment. However, the organization expanded its scope of service to cryptocurrency marketing in 2008 understanding the time to time electronic cycling of the world and also the innovations of smart cities.</p>

              <a href="{{URL::to('/about')}}" class="btn btn-outline-white btn-round btn-sm">More</a>
          </div>

        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of description section -->






<!---video section-->

<div class="section section-description fp-auto-height-responsive " data-section="video">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper center-vh dir-col anim">
        <!-- title -->
        <div class="section-title text-center">
          <h5 class="title-bg">Video</h5>
        </div>

        <!-- content -->
        <div class="section-content reduced anim text-center">
          <!-- title and description -->
          <div class="title-desc anim-3">
           

            <video style="width:100%;" controls>
    <source src="{{asset('vid/vid_ad1.mp4')}}" type="video/mp4">
</video>


         


           
          </div>

        </div>

       <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>

<!--video section-->





    <!-- Begin of list feature section -->
    <div class="section section-list-feature fp-auto-height-responsive " data-section="services">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper twoside anim">
        <!-- title -->
        <div class="section-title text-center">
           <h5 class="title-bg">Values</h5>
          <h2 class="display-4 display-title anim-2">Our Core Values</h2>
        </div>

        <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
        <!-- begin of item -->
        <div class="item row justify-content-between fade-1">
          <!-- begin of column content -->
          <div class="col-12 col-md-6 col-lg-6">
            <!-- content -->
            <div class="section-content">
              <!-- a media object -->
              <div class="media">
                <div class="img d-flex mr-3">
                  <i class="icon ion-lock-combination"></i>
                </div>
                <div class="media-body">
                  <h4>Security</h4>
                  <p>At Global Coast, Our service delivery system includes improved electronic security systems and secure servers installed to ensure that information with us are fully classified.</p>
                </div>
              </div>
              <!-- a media object -->
              <div class="media">
                <div class="img d-flex mr-3">
                  <i class="icon ion-ios-cog-outline"></i>
                </div>
                <div class="media-body">
                  <h4>Assurance</h4>
                  <p>Global Coast has $11.2 million indemnity insurance  to cater for unforeseen contingencies which may spring up in the cause of transactions.</p>
                </div>
              </div>
              <!-- a media object -->
              
            </div>
          </div>
          <!-- end of column content -->

          <!-- begin of column content -->
          <div class="col-12 col-md-6 col-lg-6">
            <!-- content -->
            <div class="section-content">
              <!-- a media object -->
              
              <!-- a media object -->
              <div class="media">
                <div class="img d-flex mr-3">
                  <i class="icon ion-ios-lightbulb-outline"></i>
                </div>
                <div class="media-body">
                  <h4>Privacy Value</h4>
                  <p>Globalcoast offers 100% assurance of the confidentiality of data you share with us.</p>
                </div>
              </div>
              <!-- a media object -->
              <div class="media">
                <div class="img d-flex mr-3">
                  <i class="icon ion-ios-analytics-outline""></i>
                </div>
                <div class="media-body">
                  <h4>Consistency</h4>
                  <p>Over the years, Global Coast has persistently offered services with fixed terms. Our terms and policies are designed to flexibly adapt to changes in the market thus ensuring that our mode of operations are not on changing terms with time.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end of column content -->
        </div>
        <!-- end of item -->

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of list feature section -->








    <!-- Begin of investment offer section -->
    <div class="section section-twoside fp-auto-height-responsive " data-section="offers">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper twoside">

        <!-- title -->
        <div class="section-title text-center ">
          <h5 class="title-bg">Offers</h5>
          <div class="title-abs">
            <h2 class="display-4 display-title">Offer</h2>
            <!--<p></p>-->
          </div>
        </div>

        <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
        <!-- begin of item -->
        <div class="item row justify-content-between">
          <!-- img-frame-normal demo -->
          <div class="col-12 col-sm-6 col-md-6 center-vh">
            <div class="section-content anim translateUp">
              <div class="images text-center">
                <div class="img-frame-normal">
                  <div class="img-1 shadow">
                    <a href="index-2.html">
                      <img class="img" src="{{asset('img/2.jpeg')}}" alt="Image">
                    </a>
                  </div>
                  <div class="legend text-left pos-abs">
                    <h5>$20 and above</h5>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- img-frame-normal demo -->
         
          
        </div>
        <!-- end of item -->


        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of investment offer section -->












    <!-- Begin of investment calculator section -->
    <div class="section section-register fp-auto-height-responsive " data-section="calculator">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper">
        <!-- title -->
        <div class="section-title text-center">
          <h5 class="title-bg">Calculator</h5>
        </div>

        <!-- content -->
        <div class="section-content anim text-center">

          <div class="row align-items-center justify-content-center">

            <div class="col-12 col-md-12 col-lg-12">
              <!-- Registration form container-->
              <form id="demo-form" data-parsley-validate="" class="form-container form-container-transparent form-container-white">
                <div class="form-desc">
                  <h3 class="display-4 display-title  anim-2">Investment Calculator</h3>
                  <p class="invite  anim-3"><b>Simulate your potential profit</b></p>
                  <p> <small>
                    @if(isset($Config))
                 
                  ROI Value :<span id="roi_value">{{$Config->roi_value}}</span> % | ROI Period : <span id="roi_period">{{$Config->roi_period}}</span> Days

                  @endif
                </small></p>
                </div>
                <br>


                <div class="row">

                  <div class="col-md-6">
                    
                    <div class="form-input  anim-4">


                    <div class="form-group">
                    <label for="reg-capital">Currency</label>
                    
                      
                    <select class="form-control-line form-control-white" name="currency" id="calc_currency_type">
                    <option value="btc">Bitcoin</option>
                      <option value="eth">Etherun</option>
                      <option value="ltc">Litecoin</option>
                  </select>
                    
                  </div>

                  <div class="form-group">
                    <label for="reg-capital">Your deposit ($)</label>
                    <input id="calc_capital" required="" data-parsley-trigger="keyup" data-parsley-min="20" data-parsley-type="number" class="form-control" placeholder="Capital" name="capital" class="form-control-line form-control-white"
                    />
                  </div>


                   


                 




                </div>


                  </div>


                  <div class="col-md-6">
                    
                    <div class="form-input  anim-4">


                   <div class="form-group form-success-gone">
                    <label for="reg-roi">Potential profit : </label>
                    <span id="calc_income" style="color:green; "></span>
                  </div>


                <br>


                  <div class="form-group mb-0">
                    <button  class="btn btn-white btn-round btn-full"
                     type="submit" value="validate">Invest now</button>
                  </div>


                </div>

                  </div>
                  

                </div>

                

              </form>


            </div>
          </div>
        </div>


        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of investment calculator section -->









  


    <!-- Begin of latest paid section -->
    <div class="section section-twoside fp-auto-height-responsive " data-section="payroll">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper twoside">

        <!-- title -->
        <div class="section-title text-center ">
          <h5 class="title-bg">Payroll</h5>
          <div class="title-abs">
            <h2 class="display-4 display-title">Payroll</h2>
            <br><br>
            <!--<p></p>-->
          </div>
        </div>



        <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
        <!-- begin of item -->
        <div class="item row justify-content-between">


          <div class="col-md-2"></div>
         
          <div class="table-responsive col-md-8">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Timestamp</th>
                                            <th>Username</th>
                                            <th>Amount</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php $i=1;?>
                                            @foreach($Profits as $Profit)

                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link">{{$i}}</a></td>
                                            <td>{{date('d-m-y h:i', strtotime($Profit->created_at))}} </td>
                                            <td>{{$Profit->user->name}}</td>
                                            <td>{{number_format($Profit->amount)." ".$Profit->user->currency_type}}</td>
                                            
                                        </tr>

                                        <?php $i++; ?>

                                        @endforeach

                                        

                                      
                                    </tbody>
                                </table>
                            </div>




                            <div class="col-md-2"></div>



        </div>
        <!-- end of item -->

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>

      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of latest paid section -->









    <!-- Begin of register/login/signin section -->
    <div class="section section-register fp-auto-height-responsive " data-section="registers">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper">
        <!-- title -->
        <div class="section-title text-center">
          <h5 class="title-bg">Register</h5>
        </div>

        <!-- content -->
        <div class="section-content anim text-center">

          <div class="row align-items-center justify-content-center">

            <div class="col-12 col-md-12 col-lg-12">
              <!-- Registration form container-->


              <form class="form-container form-container-transparent form-container-white"
              method="POST" action="{{ route('register') }}">
               {{ csrf_field() }}

                <div class="form-desc">
                  <h3 class="display-4 display-title  anim-2">Register</h3>
                  <p class="invite  anim-3">Complete the form below</p>
                </div>


                <div class="row">

                  <div class="col-md-6">
                    
                    <div class="form-input  anim-4">


                    @if(isset($ReferralDetails))

                    @if(!empty($ReferralDetails))

                  <div class="form-group{{ $errors->has('ref_name') ? ' has-error' : '' }}">


                    <label for="reg-ref_name">Referral name</label>
                    <input id="reg-ref_name" name="ref_name" class="form-control-line form-control-white" type="text" value="{{$ReferralDetails->name}}" />

                     @if ($errors->has('ref_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ref_name') }}</strong>
                                    </span>
                                @endif

                  </div>

                  @endif

                  @endif



                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                    <label for="reg-name">Username</label>
                    <input id="reg-name" name="name" class="form-control-line form-control-white" type="text" value="{{ old('name')}}" />

                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                  </div>


                   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input id="password" name="password" class="form-control-line form-control-white" type="password" placeholder="your password" 
                    />

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>


                  <div class="form-group">
                    <label for="reg-password">Confirm Password</label>
                    <input id="reg-password" name="password_confirmation" class="form-control-line form-control-white" type="password"
                    required placeholder="confirm your password"
                    />
                  </div>

<?php

    //getting user's location details

    $res=file_get_contents('http://jsonip.com');

    $resObject=json_decode($res);

    //api calls to get location details

    $url="http://freegeoip.net/json/".$resObject->ip;//$ip;
    $location =json_decode(file_get_contents($url));
    // $location_data=json_decode($location);

    //echo $location;

                      ?>


                  <div class="form-group">
                    <i>Your IP address : <b style="color: green;"> <?php echo $resObject->ip;?></b> </i>
                  </div>




                </div>


                  </div>


                  <div class="col-md-6">
                    
                    <div class="form-input  anim-4">


                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>
                    <input id="email" name="email" class="form-control-line form-control-white" type="email"
                    required placeholder="your@email.address" value="{{ old('email') }}" 
                    />
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>


                  <div class="form-group">
                    <label for="reg-email">Confirm Email</label>
                    <input id="reg-email" name="email_confirmation" class="form-control-line form-control-white" type="email"
                    required placeholder="your@email.address"
                    />
                  </div>

               
                      


                 

                      

                 




                  <div class="form-group mb-0">
                    <div>
                      
                     <!-- <p class="email-ok invisible form-text-feedback form-success-visible">Your email has been registred, thank you.</p>-->
                    </div>
                    <button id="" class="btn btn-white btn-round btn-full"
                    name="submit" type="submit">Create Account</button>
                  </div>


                </div>

                  </div>
                  

                </div>

                

              </form>


            </div>
          </div>
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of register/login/signin section -->














    <!-- Begin of testimony section -->
    <div class="section section-twoside fp-auto-height-responsive " data-section="testimony">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper twoside">

        <!-- title -->
        <div class="section-title text-center ">
          <h5 class="title-bg">Testimonies</h5>
          <div class="title-abs">
            <h2 class="display-4 display-title">Testimonies</h2>
            <p><a href="{{URL::to('/testimony/view')}}" class="btn btn-outline-white btn-round btn-sm">View all</a></p>
          </div>
        </div>

        <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
        <!-- begin of item -->
        <div class="item row justify-content-between">
          <!-- img-frame-normal demo -->

          @foreach($Testimonies as $Testimony)

          <div class="col-12 col-sm-6 col-md-4 center-vh">
            <div class="section-content anim translateUp">
              <div class="images text-center">
                <div class="img-frame-normal">
                  <div class="img-1 shadow">
                    <a href="">


                      @if($Testimony->video_link != null)

<?php

     $rawLink=$Testimony->video_link;
     $explodedLink=explode('watch?v=', $rawLink);
     $implodedLink=implode('embed/', $explodedLink);
?>
   

   

          <iframe style="width:100%;" src="{{$implodedLink}}" frameborder="0" allowfullscreen></iframe>

           

       <!--<video controls poster="" width="350">
          <source src="{{$Testimony->video_link}}" type="video/mp4">
            Your browser does not support HTML5 video.
    </video>-->
        @else

        <img src="{{asset('vid/placeholderImage.png')}}" style="width:100%;height: 140px">

        @endif


                    </a>


                  </div>
                  <div class="legend text-left pos-abs">
                    <h5>{{$Testimony->user->name}}</h5>
                    <p class="small">{{substr($Testimony->message, 0, 59)}}
                   @if(strlen($Testimony->message)<=59)
                   {{'.'}}
                   @else
                   {{'...'}}
                   @endif</p>

                   @if(strlen($Testimony->message)<=59)
                   {{null}}
                   @else
                    <a href="{{URL::to('/testimony/view')}}" class="btn btn-outline-white btn-round btn-sm">Continue</a>
                   @endif

                  

                  </div>
                </div>
              </div>
            </div>
          </div>

          @endforeach

         

        </div>
        <!-- end of item -->

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>

      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of testimony section -->













    





    <!-- Begin of contact section -->
    <div class="section section-contact fp-auto-height-responsive no-slide-arrows " data-section="contact">

      <!-- begin of information slide -->
      <div class="slide" id="information" data-anchor="information">
        <!-- Begin of slide section wrapper -->
        <div class="section-wrapper">
          <!-- title -->
          <div class="section-title text-center">
            <h5 class="title-bg">Contact</h5>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <!-- content -->
              <div class="section-content anim text-left">
                <!-- title and description -->
                <div class="title-desc">
                  <div>
                    <h5>Customer Service</h5>
                    <h2 class="display-4 display-title">Email Us</h2>
                    <p>info@globalcoast.net</p>
                  </div>
                </div>

                <!-- Action button -->
                <div class="btns-action anim-4">
                  <a class="btn btn-outline-white btn-round" href="#contact/message">
                    <span class="txt">Information</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">

              <!-- content -->
              <div class="section-content anim text-left">
                <!-- title and description -->
                <div class="">
                  <div class="form-container form-container-card">
                    <!-- Message form container -->
                    <form class="form" method="POST" action="{{URL::to('/inbox/create')}}" role="form">

                      {{ csrf_field() }}


                      <div class="form-group name">
                        <label for="mes-name">Name :</label>
                        <input id="mes-name" name="name" type="text" placeholder="" class="form-control-line{{ $errors->has('name') ? ' has-error' : '' }}"
                        required value="{{old('name')}}"> 
                        <br>

                        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                      </div>


                      <div class="form-group email">
                        <label for="mes-email">Email :</label>
                        <input id="mes-email" type="email" placeholder="" name="email" class="form-control-line{{ $errors->has('email') ? ' has-error' : '' }}"
                        required value="{{old('email')}}">
                        <br>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      </div>

                      <div class="form-group no-border">
                        <label for="mes-text">Message</label>
                        <textarea id="mes-text" placeholder="..." name="message" class="form-control form-control-outline thick{{ $errors->has('message') ? ' has-error' : '' }}"
                        required>
                          {{old('message')}}
                        </textarea>

                         <br>
                        @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif

                        
                      </div>

                      <div class="btns">
                        <button class="btn btn-normal btn-white btn-round btn-full"
                        name="submit_message" type="submit">
                          <span class="txt">Send</span>
                          <span class="arrow-icon"></span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>
        <!-- End of slide section wrapper -->
      </div>
      <!-- end of information slide -->

      <!-- begin of message slide -->
      <div class="slide" id="message" data-anchor="message">
        <!-- Begin of slide section wrapper -->
        <div class="section-wrapper">
          <div class="row justify-content-between">
            <div class="col-12 col-md-6 center-vh">
              <!-- content -->
              <div class="section-content anim text-left">


                <!-- title and description -->

                <div class="title-desc">
                  <div class="anim-2">
                    <h5>Customer Service</h5>
                    <h2 class="display-4 display-title">Contact</h2>
                    <p>
                     11020 N State Highway 49, Martell,<br> CA 95654,<br> United States
                    </p>
                  </div>
                  <div class="address-container anim-3">

                   
                  </div>
                </div>
                <!-- Action button -->
                <div class="btns-action">
                  <a class="btn btn-outline-white btn-round" href="#contact/information">
                    <span class="txt">Send Message</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5">
              
            </div>

          </div>
        </div>
        <!-- End of slide section wrapper -->
      </div>
      <!-- end of message slide -->
<!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
          
          </a>
        </footer>
    </div>
    <!-- End of contact section -->








    <!-- Begin of list feature section -->
    <div class="section section-list-feature fp-auto-height-responsive " data-section="security">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper twoside anim">
        <!-- title -->
        <div class="section-title text-center">
           <h5 class="title-bg">.</h5>
        </div>

        <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
        <!-- begin of item -->

        <div class="container">
          
        

        <div class="item row  fade-1">
          <span>
            <img src="{{asset('img/bc.png')}}" width="50px" style="float: left;">
          </span>
          &nbsp; &nbsp; &nbsp;
           <span><img src="{{asset('img/ec.png')}}" width="50px" style="float: left;"></span>
            &nbsp; &nbsp; &nbsp;
            <span><img src="{{asset('img/lc.png')}}" width=" 50px" style="float: left;"></span>
            &nbsp; &nbsp; &nbsp;
            <span><img src="{{asset('img/ssl.png')}}" width="65px" style="float: left; margin-top: -10px;"></span>
             &nbsp; &nbsp; &nbsp;
           <span><img src="{{asset('img/mac1.png')}}" width="50px" style="float: left;"></span>
            &nbsp; &nbsp; &nbsp;
            

            <!--<span><img src="{{asset('img/sl.png')}}" width=" 100px" style="float: left;"></span>-->

          
        </div>

        <hr>

        <!-- end of item -->

        <!-- begin of item -->
        <div class="item row justify-content-between fade-1">
          <div class="title">
          <h6>YOUR PRIVACY MATTERS</h6>
          <p style="font-size: 10px;">Under no circumstances, Globalcoast Investment LLC. will disclose personal information of its users or send it to any third parties. Also, we send zero bytes of information regarding your profile (Secure Area), profits or purchased digital funds, to local fiscal authority’s of your country even having the official request from them (we can do it only if the user himself decides to provide such a disclosure). The only information that is displayed openly is platform's live-deposit statistics (direct blockchain link attached if invested via Bitcoin), which includes deposit's time and date, amount, payment method and username of the investor. Investor's real name or address is never shown publicly and is never displayed on the website (Besides his own personal profile, aka. "Secure Area"). The investor is allowed to pick any username except for restricted or used ones. If you want to get an ultimate level of confidentiality, we recommend you using cryptocurrencies as the main payment method and trusted VPN provider for loggingyour personal account. </p>
        </div>
        </div>
        <!-- end of item -->
        <!-- begin of item -->
        <div class="item row justify-content-between fade-1">
           <div class="title">
          <h6>RISK DISCLOSURE</h6>
          <p style="font-size: 10px;">Area of high profit investments always implies having certain risks involved. In most cases laser based product buyers are not responsible for actions of their sellers. It is important to understand that purchasing any digital funds equivalent at Laser Online Platform involves reasonable risks. Your deposit refund is not guaranteed and in some rare cases may even be not returned or lost. Cryptocurrency Trading partially implemented at L.O.P’s Crypto-Capital instrument involves financial risk and may not be appropriate for all investors. The information presented here is for information and educational purposes only and should not be considered an offer or solicitation to buy or sell any financial instrument on Laser Online Platform or elsewhere. Any digital funds purchasing decisions that you make are solely your responsibility. Laser Online Platform instruments include Funds Management Area (Secure Area), Internal Transactions, Bitcoin exchange futures, and economic events. Laser Online Platform R.O.I can be volatile and investors risk losing their investment on any given transaction. However, Laser Online has developed a unique multi-level insuring system where 12% of all deposited funds are transferred to Globalcoast Investment LLC fully operated and controlled Bitcoin Security Fund. This amount is deducted automatically from our profits and does not affect profits of our investors. The only type of risk that should be taken into account is force major that is not linked with bitcoin’ currency rate, namely natural disasters (flood, fire, hurricane etc.). Users involved in harmful activity against Laser Online Platform can get their accounts blocked with no prior notification. Invested money is to be returned to their owners with exception of charges for compensation of damage caused to L.O.P. </p>

           <p>
            <small>
            &copy; 2017, Globalcoast LLC. All Rights Reserved. <a href="{{URL::to('register')}}" style="color: white;">Home</a> | <a href="{{URL::to('about')}}" style="color: white;">About</a> | <a href="{{URL::to('faqs')}}" style="color: white;">FAQs</a> | <a href="{{URL::to('register#contact')}}" style="color: white;">Contact </a>| <a href="{{URL::to('register#registers')}}" style="color: white;">Sign up</a> |<a href="{{URL::to('login')}}" style="color: white;"> Login</a>
        <a href="http://highhay.com/">
          <span class="marked"></span>
        </a>
      </small>
      </p>
        </div>
        </div>
       
        <!-- end of item -->

        </div>

        <!-- Arrows scroll down/up -->
       
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of list feature section -->




  </main>

  @endsection