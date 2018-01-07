@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')





  <!-- Row -->
                <div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Update Site Configurations</div>
                                    

                                    <form class="form-horizontal" method="POST" action="{{ URL::to('/admin/config') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('roi_period') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">ROI Period</label>

                            <div class="col-md-12">
                                <input id="roi_period" type="number" class="form-control" name="roi_period" value="{{$Config->roi_period}}" required autofocus>

                                @if ($errors->has('roi_period'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roi_period') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('roi_value') ? ' has-error' : '' }}">
                            <label for="roi_value" class="col-md-4 control-label">ROI Value</label>

                            <div class="col-md-12">
                                <input id="roi_value" type="number" class="form-control" name="roi_value" value="{{$Config->roi_value}}" required autofocus>

                                @if ($errors->has('roi_value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roi_value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('testimony_bonus_value') ? ' has-error' : '' }}">
                            <label for="roi_value" class="col-md-4 control-label">Testimonial Bonus Value ($)</label>

                            <div class="col-md-12">
                                <input id="testimony_bonus_value" type="number" class="form-control" name="testimony_bonus_value" value="{{$Config->testimony_bonus_amount}}" required>

                                @if ($errors->has('testimony_bonus_value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('testimony_bonus_value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('investors') ? ' has-error' : '' }}">
                            <label for="roi_value" class="col-md-4 control-label">Increase no of investors by:</label>

                            <div class="col-md-12">
                                <input id="investors" type="number" class="form-control" name="investors" value="{{$Config->increase_investors_by}}" required autofocus>

                                @if ($errors->has('investors'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('investors') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('investment') ? ' has-error' : '' }}">
                            <label for="investment" class="col-md-4 control-label">Increase total investent by ($):</label>

                            <div class="col-md-12">
                                <input id="investment" type="number" class="form-control" name="investment" value="{{$Config->increase_investment_by}}" required autofocus>

                                @if ($errors->has('investment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('investment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        

                         <div class="form-group{{ $errors->has('cron_status') ? ' has-error' : '' }}">
                            <label for="cron_status" class="col-md-4 control-label">Automation</label>

                            <div class="col-md-12">

                                <select id="cron_status" class="form-control" name="cron_status" required>
                                    <option

                                    <?php
                                        if($Config->cron_status==0){
                                            echo ' selected="selected" ';
                                        }
                                    ?> value="0" style="background-color: red;color: white;">OFF</option>
                                    <option 
                                    <?php
                                        if($Config->cron_status==1){
                                            echo ' selected="selected" ';
                                        }
                                    ?> value="1" style="background-color: green; color:white;">ON</option>
                                </select>

                                @if ($errors->has('cron_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cron_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                      

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Update
                                </button>

                                
                            </div>
                        </div>

                       
                        @if(Auth::guard('admin')->user()->role == 1)
                        <hr>
                        <span>
                        <a class="btn btn-sm btn-primary" href="{{URL::to('/admin/manualcron')}}">Run</a>
                    </span>

                    @endif

                     <span>
                        <a class="btn btn-sm btn-success" href="{{URL::to('/admin/register')}}">Create admin</a>
                    </span>

                     <span>
                        <a class="btn btn-sm btn-success" href="{{URL::to('/admin/create_wallet')}}">Add wallet</a>
                    </span>
                        


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
