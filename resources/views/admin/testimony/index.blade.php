@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')





<div class="container">
                  <!-- Row -->
                <div class="row">

                 
            



@foreach($Testimonies as $Testimony)

  <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color: ;">
   

    <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">{{date('F d, Y h:i', strtotime($Testimony->created_at))}}</div>
                                    <div class="ribbon-content">
                                        <div class="thumbnail">



      @if($Testimony->video_link != null)

<?php

     $rawLink=$Testimony->video_link;
     $explodedLink=explode('watch?v=', $rawLink);
     $implodedLink=implode('embed/', $explodedLink);
?>
   

          <iframe style="width:100%; height: 200px;" src="{{$implodedLink}}" frameborder="0" allowfullscreen></iframe>

           

       <!--<video controls poster="" width="350">
          <source src="{{$Testimony->video_link}}" type="video/mp4">
            Your browser does not support HTML5 video.
    </video>-->
        @else

        <img src="{{asset('vid/placeholderImage.png')}}" style="width:100%;height: 200px">

        @endif
        

  


     <hr>
      <div class="caption">
        <h3>{{$Testimony->user->name}}</h3>
        <p>
            {{substr($Testimony->message, 0, 250)}}
                   @if(strlen($Testimony->message)<=250)
                   {{'.'}}
                   @else
                   {{'...'}}
                   @endif
               </p>
        <p>

          <label  class="label label-info label-xs" style="text-transform: capitalize;">{{$Testimony->user->country}}</label>

            

           

        </p>

        <p>

          @if($Testimony->has_approved==1)

           <label  class="label label-info label-xs" style="text-transform: capitalize;">Approved</label>
          @else



          <a class="btn btn-sm btn-primary" href="{{URL::to('admin/testimony/approve/'.$Testimony->id)}}">Approve</a>
          @endif


        </p>
      </div>
    </div>
                                    </div>
                                    <!--<p>
                                    Payment mode : <a class="label label-sm label-success" style="color:white">BitPay</a>
                                </p>-->

                                    
                                </div>

    
  </div>

  @endforeach

  <center>
      {{$Testimonies->links()}}
  </center>






 


                    
                </div>
                <!-- Row -->

 </div>


 <br>







                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

@endsection
