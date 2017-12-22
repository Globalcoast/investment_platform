
@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="container">
                  <!-- Row -->
                <div class="row">

                 
            



@foreach($NewsList as $News)

  <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color: ;">
   

    <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">{{date('F d, Y h:i', strtotime($News->created_at))}}</div>
                                    <div class="ribbon-content">
                                        <div class="thumbnail">
        

    <!-- <img alt="100%x200" data-src="holder.js/100%x200" style="height: 200px; width: 100%; display: block;" src="{{asset('uploads/'.$News->cover)}}" data-holder-rendered="true">
     <hr>-->
      <div class="caption">
        <h3>{{$News->title}}</h3>
        
        <p>

            
                    <a href="{{URL::to('admin/news/view/'.$News->id)}}" class="btn btn-primary" role="button">View</a>
                     <a href="{{URL::to('admin/news/delete/'.$News->id)}}" class="btn btn-danger" role="button">Delete</a>
                 

           

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