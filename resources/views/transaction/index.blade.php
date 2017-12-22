


@extends('layouts.dashboard')

@section('dashboard_content')

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Transactions Log</h4>
                            </div>
                            <div class="card-body">


                                @foreach($Transactions as $Transaction)

                               <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">{{date('F d, Y h:i', strtotime($Transaction->created_at))}}</div>
                                    <p class="ribbon-content">
                                        {{$Transaction->message}}
                                    </p>
                                    <!--<p>
                                    Payment mode : <a class="label label-sm label-success" style="color:white">BitPay</a>
                                </p>-->

                                    
                                </div>


                                @endforeach


                                <center>
                                    {{$Transactions->links()}}
                                </center>


                                <!--
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">12 | 11 | 2017</div>
                                    <p class="ribbon-content">
                                        You cashed out $400.00
                                    </p>

                                    
                                </div>

                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">12 | 11 | 2017</div>
                                    <p class="ribbon-content">
                                        You re-invested $2,500,000.00
                                    </p>

                                    
                                </div>

                            -->


                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3"></div>
                </div>
                <!-- Row -->





























                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->


            @endsection