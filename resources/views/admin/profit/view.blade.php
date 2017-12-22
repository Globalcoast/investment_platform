@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')

  <!-- Row -->
                <div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Profit log for $ {{number_format($Capital->amount)}} 
                                    </div>


 
                                   
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>DAY</th>
                                                <th>Date</th>
                                                <th>Value ($)</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $count =1;?>
                                            @foreach ($Profits as $Profit)


                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{date('F d, Y h:i', strtotime($Profit->created_at))}}</td>
                                                <td>{{number_format($Profit->amount)}}</td>
                                                <td>
                                                    @if($Profit->has_requested==1)
                                                    <label href="" class="btn btn-sm btn-info">Requested</label>
                                                    @else
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->
                                                     
                                                    <label href="" class="btn btn-sm btn-success">Matured</label>
                                                  

                                                    @if($Profit->has_paid==1)
                                                    <label href="" class="btn btn-sm btn-success">Paid</label>
                                                    @endif

                                                    @endif

                                                    @if($Profit->automate==1)
                                                    <label href="" class="btn btn-sm btn-info">Automated</label>
                                                    @endif
                                                    
                                                </td>

                                                <td>
                                                   @if($Profit->has_requested==1 && $Profit->has_paid==0 && $Profit->automate==0)
                                                    <a href="{{URL::to('')}}" class="btn btn-sm btn-primary">Pay</a>

                                                    
                                                    <a href="{{URL::to('/admin/profit/payment/automate/'.$Profit->id)}}" class="btn btn-sm btn-primary">Automate Payment</a>

                                                    <a href="{{URL::to('/admin/profit/payment/con_trans/'.$Profit->id)}}" class="">.</a>
                                                    

                                                   

                                                   @endif
                                                </td>
                                                
                                            </tr>
                                            <?php $count++; ?>

                                            @endforeach

                                             
                                        

                                        <!--total section-->
                                            <tr>
                                                <td>Total Left</td>
                                                <td></td>
                                                <?php
                                                if($remainingProfit==null || $remainingProfit==0){
                                                    $remainingProfit=0;
                                                }
                                                    ?>
                                                <td>$ {{$remainingProfit}}</td>
                                                <td>
                                                    
                                                </td>

                                                <td>
                                                    
                                                </td>
                                                
                                            </tr>


                                           
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>



                        <div>
                                    <div style="text-align:center;">
                                                <span>Currently requested: $ {{$remainingUnpaidProfit}} </span>

                                                @if($remainingUnpaidProfit <=0)
                                                {{null}}
                                                @else
                                                    <a href="{{URL::to('')}}" class="btn btn-sm btn-primary">Pay</a>

                                                      <a href="{{URL::to('/admin/profit/payment/automateall/'.$Capital->id)}}" class="btn btn-sm btn-primary">Automate Payment</a>


                                                       <a href="{{URL::to('/admin/profit/payment/con_trans_all/'.$Capital->id)}}" class="">.</a>



                                                @endif
                                    </div>
                                </div>

                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>
                <!-- Row -->






                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
            </div>

@endsection
