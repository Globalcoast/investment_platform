
@extends('layouts.dashboard')

@section('dashboard_content')


<div class="container">
                  <!-- Row -->
                <div class="row">

                 
            



@foreach($NewsList as $News)

  <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color: ;">
   

    <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">{{date('F d, Y h:i', strtotime($News->created_at))}}</div>
                                    <div class="ribbon-content">
                                        <div class="thumbnail">
        

      <div class="caption">
        <h3>{{$News->title}}</h3>
        
        <p>

           
                    <a href="{{URL::to('/news/view/'.$News->id)}}" class="btn btn-primary" role="button">View</a>
               

           

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
      {{$NewsList->links()}}
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