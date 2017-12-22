
@extends('layouts.dashboard')

@section('dashboard_content')

<!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Wallet Details</h4>
                            </div>
                            <div class="card-body">
                               <form class="form-horizontal p-t-20">


                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Currency</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input disabled="disabled" type="text" class="form-control" id="" value="{{$Profile->currency_type}}">
                                                

                                            </div>


                                              
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Wallet Address</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                
                                                <input disabled="disabled" type="text" class="form-control" id="" value="{{$Profile->wallet_address}}">
                                                
                                            </div>


                                                
                                        </div>
                                    </div>
                                   
                                
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
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

@endsection