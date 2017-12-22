@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">Contact Messages</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Sender</th>
                                                <th>Sender's email</th>
                                                <th>Message</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Messages->currentPage() * $Messages->perPage())-($Messages->perPage() - 1);
                                            ?>

                                        	@foreach($Messages as $Message)

                                        	


                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$Message->name}}</td>
                                                <td>{{$Message->email}}</td>
                                                <td>{{substr($Message->message, 0, 50)}}
                   @if(strlen($Message->message)<=50)
                   {{'.'}}
                   @else
                   {{'...'}}
                   @endif</td>
                                               

                                                <td>
                                                   
                                                   <a href="{{URL::to('/admin/inbox/view/'.$Message->id)}}" class="btn btn-sm btn-primary">View</a>
                                                   

                                                  
                                                    <a href="{{URL::to('/admin/inbox/delete/'.$Message->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                              
                                                    
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
                                	{{$Messages->links()}}
                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

@endsection
