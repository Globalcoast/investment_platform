
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
                                                <th>Name</th>
                                                <th>Country</th>
                                                <th>Currency</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Downlines->currentPage() * $Downlines->perPage())-($Downlines->perPage() - 1);
                                            ?>

                                            @foreach($Downlines as $Downline)

                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$Downline->referee->name}}</td>
                                                <td><span style="text-transform: capitalize;">{{$Downline->referee->country}}</span></td>
                                                <td>{{$Downline->referee->currency_type}}</td>
                                                <td>{{date('d-m-Y h:i', strtotime($Downline->created_at))}}</td>
                                                
                                                
                                                
                                                
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