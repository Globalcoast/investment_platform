
@extends('layouts.dashboard')

@section('dashboard_content')

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Profit log for $ {{number_format($Capital->id)}} </div>
                                    
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
                                                    @endif
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->
                                                     @if($Profit->has_requested==0)
                                                    <label href="" class="btn btn-sm btn-primary">Matured</label>
                                                    @endif

                                                    @if($Profit->has_requested==1 && $Profit->has_paid==1)
                                                    <label href="" class="btn btn-sm btn-info">Paid</label>
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
                                                <td>$ {{number_format($remainingProfit)}}</td>
                                                <td>
                                                    
                                                </td>

                                                <td>
                                                    @if($remainingProfit!=null || $remainingProfit > 0)
                                                    <a href="{{URL::to('/request/profit/cashoutall/'.$Capital->id)}}" class="btn btn-sm btn-success">Cash-out</a>
                                                    @endif
                                                </td>
                                                
                                            </tr>


                                           
                                        </tbody>
                                    </table>
                                </div>
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
            <!-- ============================================================== -->


               @endsection