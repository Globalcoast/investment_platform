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
use App\Testimony;
use App\Config;

class TestimonyController extends Controller
{
    //

    public function read(){

    	$Testimonies=Testimony::orderBy('id','desc')->paginate('12');

    	return view('admin.testimony.index',['Testimonies'=>$Testimonies]);
    }


    public function approve($id){

    	Testimony::where('id', $id)->update(['has_approved'=>1]);

    	//allocated bonus

    	$bonus=Config::where('id',1)->first()->testimony_bonus_amount;

    	Testimony::where('id', $id)->update(['amount'=>$bonus]);

    	return Redirect::back()->with('notification','Testimony approved. Bonus of $'.$bonus." awarded.");


    }
}
