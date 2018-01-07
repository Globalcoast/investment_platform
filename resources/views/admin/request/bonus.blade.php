@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">All Requeted Bonuses</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Investor</th>
                                                <th>Amount ($)</th>
                                                <th>Currency | ADDS</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Bonuses->currentPage() * $Bonuses->perPage())-($Bonuses->perPage() - 1);
                                            ?>

                                            @foreach($Bonuses as $Bonus)

                                            


                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$Bonus->referral->name}}</td>
                                                <td>{{number_format($Bonus->amount)}}</td>


                                                <td>
                                                    {{$Bonus->referral->currency_type}}
                                                    &nbsp;|&nbsp;
                                                    {{$Bonus->referral->wallet_address}}
                                                </td>
                                                <td>

                                                    @if($Bonus->has_invested==1)
                                                    <label href="" class="label label-xs label-success">Invested</label>
                                                    @else

                                                    @if($Bonus->has_paid==1)
                                                    <label class="label label-xs label-success">Paid</label>
                                                    @endif


                                                     @if($Bonus->has_requested==1)
                                                    <label class="label label-xs label-success">Requested</label>
                                                    @endif

                                                    @endif

                                                    @if($Bonus->automate==1)
                                                    <label href="" class="label label-xs label-info">Automated</label>
                                                    @endif
                                                </td>

                                                <td>
                                                   
                                                   @if($Bonus->has_requested==1 && $Bonus->has_paid==0 && $Bonus->automate==0)
                                                    <a href="{{URL::to('')}}" class="btn btn-sm btn-primary">Pay</a>

                                                    
                                                    <a href="{{URL::to('/admin/request/bonus/automate/'.$Bonus->id)}}" class="btn btn-sm btn-primary">Automate Payment</a>
                                                   

                                                   <a href="{{URL::to('/admin/request/bonus/con_trans/'.$Bonus->id)}}" class="">.</a>

                                                   @endif
                                                    
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
                                    {{$Bonuses->links()}}
                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

@endsection
