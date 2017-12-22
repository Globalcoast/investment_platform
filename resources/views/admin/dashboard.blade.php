@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Latest Users</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        	<?php 
                                            $count=($LatestUsers->currentPage() * $LatestUsers->perPage())-($LatestUsers->perPage() - 1);
                                            ?>

                                        	@foreach($LatestUsers as $User)

                                        	


                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$User->name}}</td>
                                                <td>{{$User->phone}}</td>
                                                <td>{{$User->country}}</td>
                                                <td>

                                                	@if($User->status==0)
                                                    <label href="" class="label label-xs label-danger">Blocked</label>
                                                    @endif
                                                    @if($User->status==1)
                                                    <label class="label label-xs label-success">Active</label>
                                                    @endif
                                                </td>

                                                <td>
                                                   
                                                   <a href="{{URL::to('/admin/user/view/'.$User->id)}}" class="btn btn-sm btn-primary">View</a>
                                                   @if($User->status==1)
                                                    <a href="{{URL::to('/admin/user/block/'.$User->id)}}" class="btn btn-sm btn-danger">Block</a>
                                                    @endif
                                                    
                                                    @if($User->status==0)
                                                    <a href="{{URL::to('/admin/user/unblock/'.$User->id)}}" class="btn btn-sm btn-success">Unblock</a>
                                                    @endif

                                                    <a href="{{URL::to('/admin/user/delete/'.$User->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                    
                                                </td>
                                                
                                                
                                            </tr>

                                            <?php
                                            	$count++;
                                            ?>

                                            @endforeach

                                           
                                           
                                        </tbody>
                                    </table>
                                </div>


                                <center>
                                	{{$LatestUsers->links()}}
                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

@endsection
