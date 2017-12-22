@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">All wallets</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Currency</th>
                                                <th>Address</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($AddressList->currentPage() * $AddressList->perPage())-($AddressList->perPage() - 1);
                                            ?>

                                        	@foreach($AddressList as $Address)

                                        	


                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$Address->currency}}</td>
                                                <td>{{$Address->address}}</td>

                                                <td>
                                                   
                                                   

                                                    <a href="{{URL::to('/admin/delete_wallet/'.$Address->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                    
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
                                	{{$AddressList->links()}}
                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

@endsection
