<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Downline;
use App\User;

class DownlineController extends Controller
{
    //

    public function read(){

    	$Downlines=Downline::where('referral_id', Auth::user()->id)->orderBy('id', 'desc')->paginate('10');

    	return view('downline.index', ['Downlines'=>$Downlines]);
    }
}
