@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Profile Details</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-body">
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Username : </label>
                                                    <span>{{$User->name}}</span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Email : </label>
                                                    <span>{{$User->email}}</span>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Country : </label>
                                                    <span>{{$User->country}}</span>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Phone : </label>
                                                    <span>{{$User->Phone}}</span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Wallet Adrress : </label>
                                                    <span><label>{{$User->wallet_address}}</label></span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Status : </label>
                                                    <span>
                                                        
                                                        @if($User->status==0)
                                                    <label href="" class="label label-xs label-danger">Blocked</label>
                                                    @endif
                                                    @if($User->status==1)
                                                    <label class="label label-xs label-success">Active</label>
                                                    @endif
                                                    </span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                        <hr>

                                          <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <span>
                                                        
                                                         
                                                   @if($User->status==1)
                                                    <a href="{{URL::to('/admin/user/block/'.$User->id)}}" class="btn btn-sm btn-danger">Block</a>
                                                    @endif
                                                    
                                                    @if($User->status==0)
                                                    <a href="{{URL::to('/admin/user/unblock/'.$User->id)}}" class="btn btn-sm btn-success">Unblock</a>
                                                    @endif

                                                    <a href="{{URL::to('/admin/user/delete/'.$User->id)}}" class="btn btn-sm btn-danger">Delete</a>

                                                    </span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                      
                                       


                                    </div>
                            
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3"></div>
                </div>

@endsection
