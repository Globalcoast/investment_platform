

@extends('layouts.dashboard')

@section('dashboard_content')

                  <!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Investment Console</div>
                                    

                                     <form action="{{URL::to('/invest')}}" method="POST" role="form">

                                        {{ csrf_field() }}

                                    <div class="form-body">
                                       
                                       
                                       
                                        





                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Amount ($)</label>
                                                    <input type="number" class="form-control{{ $errors->has('amount') ? ' has-error' : '' }}" placeholder="Amount to invest" name="amount" value="{{old('amount
                                                    ')}}">
                                                </div>

                                                  @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                        </div>


                                         <hr>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                               
                                               <i class="h6" style="color:red;font-size: 12px;">
                                                 By proceeding, you accept accept all the terms & conditions  of the Globalcoast Investment Platform
                                                   
                                               </i>

                                            </div>
                                        </div>

                                   

                                       


                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Complete</button>
                                    </div>
                                </form>
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
              
                <!-- ============================================================== -->
            </div>


            @endsection