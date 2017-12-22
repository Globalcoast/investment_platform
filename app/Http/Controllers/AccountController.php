<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\User;

class AccountController extends Controller
{
    //

    public function read(){
    	$Profile = User::where('id',Auth::user()->id)->first(); 
    	return view('account.index', ['Profile'=>$Profile]);
    }

    public function view(){
    	$Profile = User::where('id',Auth::user()->id)->first(); 
    	return view('account.view', ['Profile'=>$Profile]);

    }


     public function update(Request $request){

    	$formData=$request->all();

        $rule=array(

            'currency'=>"required",
            'wallet_address'=>"required|unique:users|confirmed"
            );

        $message=array(
            
            'currency.required'=>'Currency field is required',
            
            'wallet_address.required'=>'Wallet address field required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);

        }else{


        User::where('id', Auth::user()->id)->update(['wallet_address'=>$request->wallet_address,'currency_type'=>$request->currency]);

    	

    	return Redirect::to('/home')->with('notification','Wallet details updated.');

    	}
    }
}
