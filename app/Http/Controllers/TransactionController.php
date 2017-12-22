<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Transaction;

class TransactionController extends Controller
{
    //

    public function read(){

    	$Transactions=Transaction::where('user_id', Auth::user()->id)->orderBy('id','desc')->paginate('10');

    	return view('transaction.index', ['Transactions'=>$Transactions]);

    }
}
