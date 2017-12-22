@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="row">

                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Message Details</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-body">
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Sender's name : </label>
                                                    <span>{{$Message->name}}</span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Sender's email : </label>
                                                    <span>{{$Message->email}}</span>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Mesaage : </label>
                                                    <span>{{$Message->message}}</span>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                       <hr>
                                       <a href="{{URL::to('/admin/inbox')}}" class="btn btn-sm btn-primary">Back</a>

                                       
                                      
                                       


                                    </div>
                            
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3"></div>
                </div>

@endsection
