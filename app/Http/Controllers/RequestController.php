<?php

namespace App\Http\Controllers;

use App\User;
use App\Capital;
use App\Transaction;
use App\Downline;
use App\Profit;
use App\Request;
use App\Config;
use App\Testimony;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;



class RequestController extends Controller
{
    public function readProfit($capital_id){

    	$Capital=Capital::where('id', $capital_id)->first();

    	$Profits=Profit::where('capital_id', $capital_id)->orderBy('id', 'desc')->get();

    	$remainingProfit=Profit::where([['capital_id', $capital_id],['has_requested',0]])->get()->sum('amount');

    	return view('profit.index',['Profits'=>$Profits,'remainingProfit'=>$remainingProfit,'Capital'=>$Capital]);

    }


    public function requestProfit($profit_id){

    	$Profit=Profit::where('id',$profit_id)->first();
    	$alreadyRequestedProfit=$Profit->has_requested;
    	if($alreadyRequestedProfit==1){

    		return Redirect::to('/request/profit/'.$Profit->capital_id)->with('notification',"Already requested profit ");
    	}

    	//populate request model

    	$request= new Request;

    	$request->request_type=2; //for profit 1 for capital while 3 for referral bonus;

    	$request->profit_id=$profit_id;

        $request->capital_id=$Profit->capital->id;

    	$request->user_id=Auth::user()->id;

    	$request->has_paid=0;

    	$request->save();

    	//update profit model
    	Profit::where('id', $profit_id)->update(['has_requested'=>1]);
        Capital::where('id',$Profit->capital->id)->update(['amount'=>$Profit->capital->amount+0]);
        $prn=Capital::where('id',$Profit->capital->id)->first()->prn;
        Capital::where('id',$Profit->capital->id)->update(['prn'=>$prn+1);





    	//populate transaction model

    	$transaction=new Transaction;

        	$transaction->user_id=Auth::user()->id;

        	$transaction->message="You requested profit of $ ".number_format($Profit->amount);

        	$transaction->save();

        	return Redirect::to('/request/profit/'.$Profit->capital_id)->with('notification',"Profit successfully requested");


    }

    public function requestAllProfit($capital_id){

    	$Profits=Profit::where('capital_id',$capital_id)->get();

        $AcummulatedProfit=Profit::where([['$capital_id',$capital_id],['has_requested',0]])->sum('amount');


        if($AcummulatedProfit < 10){
            return Redirect::to('/request/profit/'.$capital_id)->with('notification',"Minimum amount that can be requested is $ 10");
        }




    	foreach ($Profits as $Profit) {
    		$alreadyRequestedProfit=$Profit->has_requested;
    		if($alreadyRequestedProfit==1){

    			continue;
    		}

    		//populate request model

    	$request= new Request;

    	$request->request_type=2; //for profit 1 for capital while 3 for referral bonus;

    	$request->profit_id=$Profit->id;

        $request->capital_id=$Profit->capital->id;

    	$request->user_id=Auth::user()->id;

    	$request->has_paid=0;

    	$request->save();

    	//update profit model
    	Profit::where('id', $Profit->id)->update(['has_requested'=>1]);
        Capital::where('id',$Profit->capital->id)->update(['amount'=>$Profit->capital->amount+0]);
        $prn=Capital::where('id',$Profit->capital->id)->first()->prn;
        Capital::where('id',$Profit->capital->id)->update(['prn'=>$prn+1);
    	//populate transaction model

    	$transaction=new Transaction;

        	$transaction->user_id=Auth::user()->id;

        	$transaction->message="You requested profit of $ ". number_format($Profit->amount);

        	$transaction->save();


    	}

    	return Redirect::to('/request/profit/'.$capital_id)->with('notification',"Acummulated profits successfully requested");

    }

    public function requestCapital($capital_id){

    	$Capital=Capital::where('id', $capital_id)->first();

    	$alreadyRequestedCapital=$Capital->has_requested;

    	if($alreadyRequestedCapital==1){

    		return Redirect::to('/wallet')->with('notification',"Capital already requested");
    	}else{

    		//validate profit span days (roi period)
            $roi_period=Config::where('id',1)->first()->roi_period;

    		$countProfits=$Capital->profit->count();

    		if($countProfits < $roi_period){

    			return Redirect::to('/wallet')->with('notification',"Not yet eligible to request capital");
    		}

    		//ensure all profits have been requested

    		$countRequestedProfits=Profit::where([['capital_id', $capital_id],['has_requested', '1']])->get()->count();

    		if($countRequestedProfits < $roi_period){

    			return Redirect::to('/wallet')->with('notification',"Accumulated profits must be requested first.");
    		}

    		//populate request model

    		$request= new Request;

    		$request->request_type=1; //for profit 1 for capital while 3 for referral bonus;

    		$request->capital_id=$capital_id;

    		$request->user_id=Auth::user()->id;

    		$request->has_paid=0;

    		$request->save();

    		//update profit model
    		Capital::where('id', $capital_id)->update(['has_requested'=>1]);
    		//populate transaction model

    		$transaction=new Transaction;

        		$transaction->user_id=Auth::user()->id;

        		$transaction->message="You requested capital of $ ".number_format($Capital->amount);

        		$transaction->save();

        		return Redirect::to('/wallet')->with('notification',"Capital successfully requested.");





    	}

    }


    public function requestBonus($bonus_id){
    	$Bonus=Downline::where('id',$bonus_id)->first();

    	if($Bonus->has_requested >0){

    		return Redirect::back()->with('notification',"Bonus already requested ");
    	}

    	//populate request model

    		$request= new Request;

    		$request->request_type=3; //for profit 1 for capital while 3 for referral bonus;

    		$request->bonus_id=$bonus_id;

    		$request->user_id=Auth::user()->id;

    		$request->has_paid=0;

    		$request->save();

    		//update profit model
    		Downline::where('id', $bonus_id)->update(['has_requested'=>1]);
    		//populate transaction model

    		$transaction=new Transaction;

        		$transaction->user_id=Auth::user()->id;

        		$transaction->message="You requested bonus of $ ".$Bonus->amount;

        		$transaction->save();

        		return Redirect::to('/transaction')->with('notification',"Bonus successfully requested.");


    }



     public function requestTestimonyBonus($bonus_id){
        $Bonus=Testimony::where([['id',$bonus_id],['has_approved',1]])->first();

        if($Bonus->has_requested >0){

            return Redirect::back()->with('notification',"Bonus already requested ");
        }

        //populate request model

            $request= new Request;

            $request->request_type=3; //for profit 1 for capital while 3 for referral bonus;

            $request->bonus_id=$bonus_id;

            $request->user_id=Auth::user()->id;

            $request->has_paid=0;

            $request->save();

            //update profit model
            Testimony::where([['id',$bonus_id],['has_approved',1]])->update(['has_requested'=>1]);
            //populate transaction model

            $transaction=new Transaction;

                $transaction->user_id=Auth::user()->id;

                $transaction->message="You requested testimonial bonus of $ ".$Bonus->amount;

                $transaction->save();

                return Redirect::to('/transaction')->with('notification',"Bonus successfully requested.");


    }
}
