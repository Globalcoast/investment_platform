<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Capital;

use App\Adminwallets;

class WalletController extends Controller
{
    //

    public function read(){

    	$Capitals=Capital::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate('10');

    	//$receiving_wallet_address=Adminwallets::where('id',)


    	return view('wallet.index',['Capitals'=>$Capitals]);
    }
}
