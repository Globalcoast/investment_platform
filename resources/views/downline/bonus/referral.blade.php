
@extends('layouts.dashboard')

@section('dashboard_content')



                  <!-- Row -->
                <div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Referred by me</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Bonus ($)</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Downlines->currentPage() * $Downlines->perPage())-($Downlines->perPage() - 1);
                                            ?>

                                            @foreach($Downlines as $Downline)

                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{date('d-m-Y h:i', strtotime($Downline->created_at))}}</td>
                                                <td>{{$Downline->referee->name}}</td>
                                                <td>

                                                    @if($Downline->amount==0)
                                                    {{null}}
                                                    @else
                                                    {{number_format($Downline->amount)}}
                                                    @endif

                                            </td>
                                                <td>
                                                    @if($Downline->amount>0)
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->

                                                   @if($Downline->has_invested == 1)
                                                   <label class="btn btn-sm btn-success">Invested</label>

                                                   @else

                                                    @if($Downline->has_requested <=0 && $Downline->has_paid <=0 )
                                                    <a href="" class="btn btn-sm btn-primary">Matured</a>
                                                    @endif

                                                    @if($Downline->has_requested == 1)
                                                    <a href="" class="btn btn-sm btn-info">Requested</a>
                                                    @endif

                                                    @if($Downline->has_paid ==1)
                                                    <a href="" class="btn btn-sm btn-success">Paid</a>
                                                    @endif

                                                    @endif

                                                    @endif
                                                </td>

                                                <td>
                                                    @if($Downline->amount>0)
                                                   @if($Downline->request==0)
                                                    <a href="{{URL::to('/request/bonus/'.$Downline->id)}}" class="btn btn-sm btn-primary">Cash-out</a>
                                                    @endif

                                                    @if($Downline->request==0 && $Downline->has_invested ==0)
                                                    <a href="{{URL::to('/invest/bonus/'.$Downline->id)}}" class="btn btn-sm btn-success">Re-invest</a>
                                                    @endif
                                                    @endif
                                                </td>
                                                
                                                
                                            </tr>

                                            <?php $count++; ?>

                                            @endforeach

                                          
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                   
                                </div>


                                <center>
                                    {{$Downlines->links()}}
                                </center>

                        
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
                <!-- .right-sidebar -->
              
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->



            @endsection