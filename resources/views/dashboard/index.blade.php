@extends('layouts.dashboard')

@section('dashboard_content')
<div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light">{{number_format($TotalInvestorsToDisplay)}}</h3>
                                        <h5 class="text-muted m-b-0">Total Investors</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ {{number_format($TotalInvestmentToDisplay)}}</h3>
                                        <h5 class="text-muted m-b-0">Total Investment</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht">$ {{number_format($TotalPaidOut)}}</h3>
                                        <h5 class="text-muted m-b-0">Total Paid Out</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h5 class="m-b-0 font-lgiht">Last Login</h5>
                                        <h5 class="text-muted m-b-0">{{date('F d, Y h:i', strtotime(Auth::user()->updated_at))}}</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->



 </div>




















 <!-- Row -->
<div class="row">


                    <div class="col-md-12 col-xlg-12">
                       
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                
                                                

<script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>


                                               <!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div>-->


                                            </div>
                                            
                                        
                                            <div class="col-md-4 col-lg-4">
                                                <script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v1/coin/chart?fsym=ETH&tsym=USD';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>

                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v1/coin/chart?fsym=LTC&tsym=USD';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>

                                            </div>
                                            
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!--colum-->
                           
                        </div>




                </div>











               <div class="col-md-12 col-xlg-12">

                    <div class="row">

                        <div class="col-lg-4 col-md-4">

                            <div class="card">
                                    <div class="card-header">
                                        <div class="card-actions">
                                            <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                            <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                            <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                        </div>
                                        <h4 class="card-title m-b-0">My Wallet</h4>
                                    </div>
                                    <div class="card-body collapse show">





                                       

                                        @foreach($Capitals as $Capital)

                                        

                                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">{{date('F D, Y h:i', strtotime($Capital->created_at))}}</div>
                                    <p class="ribbon-content">
                                        <b>Capital </b>:$ {{number_format($Capital->amount)}}
                                        
                                    </p>

                                    <p class="ribbon-content">
                                        <b>Received by system </b>:$ {{number_format($Capital->receiving->amount_received)}}
                                    </p>

                                    <p class="ribbon-content">

                                        <?php
                                        $AccumulatedProfit=$Capital->profit->sum('amount');
                                        ?>

                                        <b>Accumulated Profit </b>:$ {{number_format($AccumulatedProfit)}}
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




                        <!--status and action section-->



                                   <!-- <p>
                                        <span><button class="btn btn-sm btn-primary">Cashout</button></span>
                                        <span><a  style="color:white;" class="btn btn-sm btn-success" href="{{URL::to('/reinvest/'.$Capital->id)}}">Re-invest</a></span>
                                    </p>-->


                              <!--status and action section-->


                                </div>

                                @endforeach



                                        


                                        
                                    </div>
                                </div>
                            

                        </div>


<!--LEFT SIDE-->   







 <!-- Column -->

                    <div class="col-md-5 col-lg-5">
                      
                      
                        <!-- Column -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Payroll</h4>
                            </div>
                            <div class="card-body collapse show b-t">
                                <div class="table-responsive">
                                    <table class="table full-color-table full-inverse-table hover-table">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Value ($)</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $i=1;?>
                                            @foreach($Profits as $Profit)

                                            <?php
                                                if($Profit->currency_type=='btc'){
                                                    $Rate=$coinUSDRate['btc'];
                                                }elseif($Profit->user->currency_type=='ltc'){
                                                    $Rate=$coinUSDRate['ltc'];
                                                }else{
                                                    //is eth
                                                  $Rate=$coinUSDRate['eth'];
                                                  } 
                                            ?>

                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{date('d-m-y h:i', strtotime($Profit->created_at))}}</td>
                                                <td>{{$Profit->user->name}}</td>
                                                <td>{{number_format($Profit->amount)}}</td>
                                            </tr>
                                            <?php $i++ ?>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                       
                      </div>


                      <div class="col-lg-3 col-md-3">

                              <!-- Column -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Investment Calculator</h4>
                            </div>
                            <div class="card-body collapse show b-t">
                                <div class="table-responsive">
                                   <form id="demo-form" data-parsley-validate="" action="go.php" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Currency</label>
                                            <select id="calc_currency_type" name="currency" class="form-control" required="">

                                                <option value="btc" selected="selected">BTC</option>

                                                <option value="eth">Etherun</option>

                                                 <option value="ltc">Litcoin</option>
                                                
                                            </select>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="">Capital</label>
                                            <input id="calc_capital" required="" data-parsley-trigger="keyup" data-parsley-min="20" data-parsley-type="number" class="form-control" id="" placeholder="Capital">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Potential Income : </label>
                                            
                                            <span id="calc_income" style="color:green; "></span>
                                        <br><br>
                                        <button value="validate" type="submit" class="btn btn-success waves-effect waves-light m-r-10">Invest</button>
                                       
                                    </form>
                                    </div>
                            </div>
                        </div>
                        <!-- Column -->
                          
                      </div>

                    </div>



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

            @endsection