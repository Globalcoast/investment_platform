<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;



use App\Capital;
use App\Profit;
use App\GRequest;
use App\User;
use App\Downline;

class StatsController extends Controller
{
    //

    public function read(){


    	$TotalUsers=User::all()->count();

    	$TotalBlockedUsers=User::where('status',0)->count();

    	$TotalActiveUsers=User::where('status',1)->count();

    


         //$TotalInvestors=User::orderBy('id', 'asc')->count();

        $TotalInvestments=Capital::orderBy('id', 'asc')->get();//->sum('amount');

        $TotalConfirmedInvestments=Capital::where('has_confirmed_payment',1)->orderBy('id', 'asc')->get();//->sum('amount');

        $TotalPaidOut=Profit::where('has_paid',1)->get();//->sum('amount');

        $Profits=Profit::where('has_paid',1)->orderBy('id', 'desc')->limit(10)->get();

        $OverallInvestment=0;
        foreach($TotalInvestments as $EachInvestment){

           

            $OverallInvestment=$OverallInvestment+($EachInvestment->amount);

        }


        $OverallConfirmedInvestment=0;
        foreach($TotalConfirmedInvestments as $EachConfirmedInvestment){

           
            $OverallConfimedInvestment=$OverallConfirmedInvestment+($EachConfirmedInvestment->amount);

        }


        $OverallPaidOut=0;
        foreach($TotalPaidOut as $EachPaidOut){

           
            $OverallPaidOut=$OverallPaidOut+($EachPaidOut->amount);

        }


        $TotalCapitalRequested=Capital::where('has_requested',1)->get();
        $OverallCapitalRequested=0;
        foreach($TotalCapitalRequested as $EachCapitalRequested){

           
            $OverallCapitalRequested=$OverallCapitalRequested+($EachCapitalRequested->amount);

        }

         $TotalCapitalRequestedPaid=Capital::where('has_ended',1)->get();
        $OverallCapitalRequestedPaid=0;
        foreach($TotalCapitalRequestedPaid as $EachCapitalRequestedPaid){

            

            $OverallCapitalRequestedPaid=$OverallCapitalRequestedPaid+($EachCapitalRequestedPaid->amount);

        }



        $TotalProfitRequested=Profit::where('has_requested',1)->get();
        $OverallProfitRequested=0;
        foreach($TotalProfitRequested as $EachProfitRequested){

            
            $OverallProfitRequested=$OverallProfitRequested+($EachProfitRequested->amount);

        }

         $TotalProfitRequestedPaid=Capital::where('has_ended',1)->get();
        $OverallProfitRequestedPaid=0;
        foreach($TotalProfitRequestedPaid as $EachProfitRequestedPaid){

            

            $OverallProfitRequestedPaid=$OverallProfitRequestedPaid+($EachProfitRequestedPaid->amount);

        }


        $TotalBonusRequested=Downline::where('has_requested',1)->get();
        $OverallBonusRequested=0;
        foreach($TotalBonusRequested as $EachBonusRequested){

            

            $OverallBonusRequested=$OverallBonusRequested+($EachBonusRequested->amount);

        }

         $TotalBonusRequestedPaid=Downline::where('has_paid',1)->get();
        $OverallBonusRequestedPaid=0;
        foreach($TotalBonusRequestedPaid as $EachBonusRequestedPaid){

            

            $OverallBonusRequestedPaid=$OverallBonusRequestedPaid+($EachBonusRequestedPaid->amount);

        }



    	$stats = ['TotalUsers'=>$TotalUsers,'TotalBlockedUsers'=>$TotalBlockedUsers,'TotalActiveUsers'=>$TotalActiveUsers,'TotalInvestment'=>$OverallInvestment,'TotalConfirmedInvestment'=>$OverallConfirmedInvestment,'TotalCapitalRequested'=>$OverallCapitalRequested,'TotalCapitalPaid'=>$OverallCapitalRequestedPaid,'TotalProfitRequested'=>$OverallProfitRequested,'TotalProfitPaid'=>$OverallProfitRequestedPaid,'TotalBonusRequested'=>$OverallBonusRequested,'TotalBonusPaid'=>$OverallBonusRequestedPaid];

    	return view('admin.stats.index',$stats);
    }
}
