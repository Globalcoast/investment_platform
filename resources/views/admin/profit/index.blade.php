@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')

  <!-- Row -->
                <div class="row">

                    <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                    <div class="col-lg-8">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Profit Log</h4>
                            </div>
                            <div class="card-body">


                                @foreach($Capitals as $Capital)

                               <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">{{date('F d, Y h:i', strtotime($Capital->created_at))}}</div>
                                    <p class="ribbon-content">

                                        <span>
                                            <label>Investor:&nbsp;</label>{{$Capital->user->name}}
                                        </span>
                                        &nbsp;|
                                        <span>
                                            <label>Currency:&nbsp;</label>{{$Capital->user->currency_type}}

                                            &nbsp;|

                                           @if(isset($Capital->receivingwallet->address))
                                                    Investor's Address: 
                                                    <label class="label label-info label-sm">

                                                         {{$Capital->receivingwallet->address}}
                                                        
                                                    </label>
                                                   
                                                    @else
                                                    Investor's Address:
                                                    <label class="label label-info label-sm">
                                                        
                                                    ---
                                                </label>

                                                    @endif
                                        </span>
                                    </p>

                                    <p class="ribbon-content">

                                        <span>
                                            <label>Capital:&nbsp;</label>$ {{number_format($Capital->amount)}}
                                        </span>

                                        &nbsp;|&nbsp;

                                        <span>
                                        <label>Accumulated Profits:&nbsp;</label>$ {{number_format($Capital->profit->sum('amount'))}}&nbsp;
                                    </span>

                                    </p>

                                    <p>

                                       <a href="{{URL::to('/admin/profit/view/'.$Capital->id)}}" class="btn btn-sm btn-primary">View</a>

                                   </p>
                                
                                </div>

                                @endforeach



                                <center>
                                    {{$Capitals->links()}}
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3"></div>
                </div>

@endsection
