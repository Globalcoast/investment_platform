



@extends('layouts.dashboard')

@section('dashboard_content')

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Capital & Profit Log</h4>
                            </div>
                            <div class="card-body">


                                @foreach($Capitals as $Capital)



                               <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">{{date('F d, Y h:i', strtotime($Capital->created_at))}}</div>
                                    <p class="ribbon-content">
                                        <b>Capital </b>:$ {{number_format($Capital->amount)}}
                                    </p>

                                    <p class="ribbon-content">
                                        <b>Received by system </b>:$ {{number_format($Capital->receiving->amount_received)}}
                                    </p>

                                    <p class="ribbon-content">
                                        <b>Accumulated Profit </b>:$ {{number_format($Capital->profit->sum('amount'))}}
                                    </p>





                              <!--status and action section-->

                                    <p>

                                        @if($Capital->has_confirmed_payment == 0)

                                        <span>
                                            <label class="label label-sm label-info">
                                                Awaiting full payment
                                            </label>
                                        </span>
                                        <br>
                                    <span>


                                      <label  class="label label-default" style="color: black;"><b>Make payment to:</b> {{$Capital->receiving->generated_address}}</label>


                                    </span>

                                     
                                        

                                        @else

                                        <?php
                                            if($Capital->has_reinvested==1){$label="View profit log";}else{
                                                $label="Cashout profits";
                                            }
                                        ?>
                                        
                                        <span><a href="{{URL::to('/request/profit/'.$Capital->id)}}" class="btn btn-sm btn-primary">{{$label}}</a></span> &nbsp;
                                        

                                        @if($Capital->has_requested==0)
                                        <span><a href="{{URL::to('/request/capital/'.$Capital->id)}}" class="btn btn-sm btn-primary" disabled="disabled">Cashout capital</a></span>
                                        @endif

                                        @if($Capital->has_reinvested==0)

                                        <span><a  style="color:white;" class="btn btn-sm btn-success" href="{{URL::to('/reinvest/'.$Capital->id)}}">Re-invest</a></span>

                                        @endif


                                        @endif


                                    </p>



                        <!--status and action section-->



                                </div>


                                @endforeach


                                <center>
                                    {{$Capitals->links()}}
                                </center>



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