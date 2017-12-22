


@extends('layouts.dashboard')

@section('dashboard_content')



                  <!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Account Details</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{URL::to('/account')}}" role="form">

                                    {{ csrf_field() }}

                                    <div class="form-body">
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Currency</label>

                                                    @if(Auth::user()->currency_type ==null)
                                                    <select class="form-control{{ $errors->has('currency') ? ' has-error' : '' }} custom-select" name="currency">
                                                        <option>--Select your Currency--</option>
                                                        <option value="btc">BTC</option>
                                                        <option value="eth">ETH</option>
                                                        <option value="ltc">LTC</option>
                                                    </select>

                                                    @else

                                                    <input disabled="disabled" type="text" class="form-control{{ $errors->has('currency') ? ' has-error' : '' }}" placeholder="Currency" name="currency"
                                                    value="{{Auth::user()->currency_type}}">

                                                    @endif

                                                </div>

                                                 @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Wallet Address</label>
                                                    <input

                                                        <?php

                                                            if(Auth::user()->wallet_address !=null){
                                                                echo "disabled='disabled";
                                                            }
                                                        ?>

                                                     type="text" class="form-control{{ $errors->has('wallet_address') ? ' has-error' : '' }}" placeholder="wallet Address" name="wallet_address"
                                                    value="{{Auth::user()->wallet_address}}">
                                                </div>

                                                 @if ($errors->has('wallet_address'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('wallet_address') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                        </div>

                                        @if(Auth::user()->wallet_address ==null)

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Confirm Wallet Address</label>
                                                    <input type="text" class="form-control{{ $errors->has('wallet_address_confirmation') ? ' has-error' : '' }}" placeholder="Confirm Wallet Address" name="wallet_address_confirmation" value="{{Auth::user()->wallet_address}}">
                                                </div>
                                            </div>

                                              @if ($errors->has('wallet_address_confirmation'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('wallet_address_confirmation') }}</strong>
                                    </span>
                                @endif

                                        </div>
                                        @endif

                                       


                                    </div>

                                     @if(Auth::user()->wallet_address ==null || Auth::user()->currency_type == null)
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                    </div>

                                    @endif


                                </form>
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
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
              
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->


            @endsection