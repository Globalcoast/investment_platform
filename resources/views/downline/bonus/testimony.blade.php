
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
                                            $count=($Testimonies->currentPage() * $Testimonies->perPage())-($Testimonies->perPage() - 1);
                                            ?>

                                            @foreach($Testimonies as $Testimony)

                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{date('d-m-Y h:i', strtotime($Testimony->created_at))}}</td>
                                                <td>{{$Testimony->referee->name}}</td>
                                                <td>

                                                    @if($Testimony->amount==0)
                                                    {{'Pending'}}
                                                    @else
                                                    {{number_format($Testimony->amount)}}
                                                    @endif

                                            </td>
                                                <td>
                                                    @if($Testimony->amount>0 && $Testimony->has_approved>0)
                                                   <!-- <a href="" class="btn btn-sm btn-danger">Pending</a>-->

                                                   @if($Testimony->has_invested == 1)
                                                   <label class="btn btn-sm btn-success">Invested</label>

                                                   @else

                                                    @if($Testimony->has_requested <=0 && $Testimony->has_paid <=0 )
                                                    <a href="" class="btn btn-sm btn-primary">Matured</a>
                                                    @endif

                                                    @if($Testimony->has_requested == 1)
                                                    <a href="" class="btn btn-sm btn-info">Requested</a>
                                                    @endif

                                                    @if($Testimony->has_paid ==1)
                                                    <a href="" class="btn btn-sm btn-success">Paid</a>
                                                    @endif

                                                    @endif

                                                    @endif
                                                </td>

                                                <td>
                                                    @if($Testimony->amount>0)
                                                   @if($Testimony->request==0)
                                                    <a href="{{URL::to('/request/testimony/bonus/'.$Testimony->id)}}" class="btn btn-sm btn-primary">Cash-out</a>
                                                    @endif

                                                    @if($Testimony->request==0 && $Testimony->has_invested ==0)
                                                    <a href="{{URL::to('/invest/testimony/bonus/'.$Testimony->id)}}" class="btn btn-sm btn-success">Re-invest</a>
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
                                    {{$Testimonies->links()}}
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