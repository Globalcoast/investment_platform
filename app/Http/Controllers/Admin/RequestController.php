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
use App\Downline;

class RequestController extends Controller
{
    //

    public function readCapitalRequests(){

    	$Capitals=Capital::where([['has_requested',1],['has_confirmed_payment',1]])->orderBy('updated_at','desc')->paginate(20);

    	return view('admin.request.capital',['Capitals'=>$Capitals]);
    }

     public function automateCapitalPayment($capital_id){

    	Capital::where([['id', $capital_id],['has_requested',1],['has_ended',0]])->update(['automate'=>1]);

    	return redirect::back()->with('notification','Payment added to automation queue');
    }

     public function confirmCapitalTransfer($capital_id){

        Capital::where([['id', $capital_id],['has_requested',1],['has_ended',0]])->update(['has_ended'=>1]);

        return redirect::back()->with('notification','Transfer confirmed');
    }


    public function readProfitRequests(){

    	$Capitals=Capital::where([['prn','>',0],['has_ended',0]])->orderBy('prn', 'desc')->paginate(20);

    	return view('admin.request.profit',['Capitals'=>$Capitals]);
    }

    public function readBonusRequests(){

    	$Bonuses=Downline::where('has_requested',1)->orderBy('updated_at','desc')->paginate(20);

    	return view('admin.request.bonus',['Bonuses'=>$Bonuses]);

    }

    public function automateBonusPayment($bonus_id){

    	Downline::where([['id', $bonus_id],['has_requested',1],['has_paid',0]])->update(['automate'=>1]);

    	return redirect::back()->with('notification','Payment added to automation queue');
    }

    public function confirmBonusTransfer($bonus_id){

        Downline::where([['id', $bonus_id],['has_requested',1],['has_paid',0]])->update(['has_paid'=>1]);

        return redirect::back()->with('notification','Transfer confirmed');
    }
}
