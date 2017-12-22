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

class ProfitController extends Controller
{
    //

    public function index(){

    	$Capitals=Capital::orderBy('updated_at', 'desc')->paginate(20);

    	return view('admin.profit.index',['Capitals'=>$Capitals]);

    }



    public function view($capital_id){

    	$Capital=Capital::where('id', $capital_id)->first();

    	$Profits=Profit::where('capital_id', $capital_id)->get();

    	$remainingProfit=Profit::where([['capital_id', $capital_id],['has_requested',0]])->get()->sum('amount');

        $remainingUnpaidProfit=Profit::where([['capital_id', $capital_id],['has_requested',1],['has_paid',0],['automate',0]])->get()->sum('amount');

    	return view('admin.profit.view', ['Profits'=>$Profits,'Capital'=>$Capital,'remainingProfit'=>$remainingProfit,'remainingUnpaidProfit'=>$remainingUnpaidProfit]);

    }


    public function automatePayment($profit_id){

    	Profit::where([['id', $profit_id],['has_requested',1],['has_paid',0]])->update(['automate'=>1]);

    	return redirect::back()->with('notification','Payment added to automation queue');
    }

    public function automateAllPayment($capital_id){

    	Profit::where([['capital_id', $capital_id],['has_requested',1],['has_paid',0]])->update(['automate'=>1]);

    	return redirect::back()->with('notification','Payments added to automation queue');
    }

    public function confirmProfitTransfer($profit_id){

        Profit::where([['id', $profit_id],['has_requested',1],['has_paid',0]])->update(['has_paid'=>1]);

        return redirect::back()->with('notification','Transfer confirmed');

    }

    public function confirmProfitTransferAll($capital_id){

        Profit::where([['capital_id', $capital_id],['has_requested',1],['has_paid',0]])->update(['has_paid'=>1]);

        return redirect::back()->with('notification','Transfer confirmed');
    }


}
