<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\User;
use App\Profit;
use App\Capital;
use App\Config;
use App\Adminwallets;

class AdminWalletController extends Controller
{
    //

    public function index(){

    	return view('admin.wallet.index');
    }


    public function create(Request $request){

    	$formData=$request->all();

        $rule=array(
            
            'currency'=>'required',

             'address'=>"required|unique:admin_wallets"
            );

        $message=array(
            
            'currency.required'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();

        }else{

        	$address=new Adminwallets;

        	$address->currency=$request->currency;

        	$address->address=$request->address;

        	$address->remember_token=$request->_token;

        	$address->save();

    	return Redirect::to('/admin/view_wallet')->with('notification','Wallet added updated');

    	}
    }

    public function read(){

    	$AddressList=Adminwallets::orderBy('id', 'desc')->paginate('10');

    	return view('admin.wallet.read',['AddressList'=>$AddressList]);
    }

    public function  delete($wallet_id){

    	Adminwallets::where('id', $wallet_id)->delete();

    	return Redirect::back()->with('notification','Wallet deleted');
    }
}
