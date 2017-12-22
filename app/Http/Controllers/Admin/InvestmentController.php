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

class InvestmentController extends Controller
{
    //

    public function index(){

    	$Capitals=Capital::orderBy('id','desc')->paginate(20);

    	return view('admin.investment.index',['Capitals'=>$Capitals]);
    }


    public function delete($capital_id){

    	Profit::where('capital_id', $capital_id)->delete();

    	Capital::where('id', $capital_id)->delete();

    	GRequest::where('id', $capital_id)->delete();

    	return redirect::back()->with('notification','Investment deleted');



    }

    public function confirm($capital_id){

    	

    	Capital::where('id', $capital_id)->update(['has_confirmed_payment'=>1]);


    	return redirect::back()->with('notification','Investment Confirmed');



    }

}
