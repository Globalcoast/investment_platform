<?php

namespace App\Http\Controllers;

use App\User;
use App\Capital;
use App\Transaction;
use App\Downline;
use App\Profit;
use App\Adminwallets;
use App\ReceivingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;


//HTTP REQUEST CLIENT
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class InvestController extends Controller
{
    //
    public function read(){
    	return view('invest.index');

    }



     public function create(Request $request){

    	$formData=$request->all();

        $rule=array(
            
            'amount'=>'required|numeric|min:20'
            );

        $message=array(
            
            'amount.required'=>'Amount field is required',
            'amount.numeric'=>"Amount must be of numeric value",
            'amount.min'=>"Amount must be  higher that $ 20"
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to('/invest')->withErrors($validator);

        }else{

            //generate transaction id
             $transaction_id=mt_rand(10000, 1000000);


             //PROCESS BITCOIN PAYMENT WITH API

            if(Auth::user()->currency_type == 'btc'){

                //use blockchain payment gateway

                //generate unique address for to receive payment

               // $secret = 'ZzsMLGKe162CfA5EcG6j';

                $my_xpub = 'xpub6DDESbEiXBJreKwiZMFd8Q5aiHgY2UKewWD6cdRbrNbhk2WVvY4iAFhpvEdiHAxn7Uy1wsokb5hw3docUFakJFEJtopejvyZzEq6DosDfsT';
                $my_api_key = '1b040a37-ea06-4ad4-b9f9-3f6d41e92891';

                $my_callback_url = 'https://globalcoast.com/blockchain/payment?transaction_id='.$transaction_id;

                $root_url = 'https://api.blockchain.info/v2/receive';

                $parameters = 'xpub=' .$my_xpub. '&callback=' .urlencode($my_callback_url). '&key=' .$my_api_key;

                //making api call to endpoint with guzzle

                $client = new Client();
                $response = $client->request('GET', $root_url . '?' . $parameters);

                $status= $response->getStatusCode();

                $header =$response->getHeaderLine('content-type');

                if($status == 200){

                    $body=$response->getBody();

                    $bodyObject=json_decode($body);

                    $receiving_wallet_address=$bodyObject->address;

                    $index=$bodyObject->index;

                    $callback=$bodyObject->callback;

                    $receiving_wallet_id=0;

                }else{
                    //pick from default database

                    //$receing_wallets=Adminwallets::where('currency','btc')->

                    $receiving_wallet_id=Adminwallets::where('currency','btc')->orderByRaw('RAND()')->take(2)->first()->id;

                    $receiving_wallet_address=Adminwallets::where('id',$receiving_wallet_id)->first()->address;

                    $index=0;

                    $callback=null;
                }

                

                //$response = file_get_contents($root_url . '?' . $parameters);

                //$object = json_decode($response);

                //echo 'Send Payment To : ' . $object->address; 


                //if api call fails, pick and assign default btc wallet from database


                //populate ReceivingAddress model  

                $detail=new ReceivingDetail;

                $detail->currency=Auth::user()->currency_type;

                $detail->remember_token=$request->_token;

                $detail->generated_address=$receiving_wallet_address;

                $detail->user_id=Auth::user()->id;

                $detail->amount_to_receive=$request->amount;

                $detail->index=$index;

                $detail->callback=$callback;

                $detail->transaction_id=$transaction_id;

                $detail->save();

                //populate capital model

                $capital=new Capital;

                $capital->receiving_wallet_id=$receiving_wallet_id;

                $capital->user_id=Auth::user()->id;

                $capital->amount=$request->amount;

                $capital->transaction_id=$transaction_id;

                $capital->initial_capital_id=0; //no initial investment

                $capital->has_reinvested=0;

                $capital->has_ended=0;

                $capital->remember_token=$request->_token;

                $capital->save();

                //populate transaction model

                $transaction=new Transaction;

                $transaction->user_id=Auth::user()->id;

                $transaction->message="You invested $ ".$request->amount;

                $transaction->remember_token=$request->_token;

                $transaction->save();

                //populate referral model





            }else{

            //PROCESS OTHER FORMS OF PAYMENT MANUALLY

            //pick wallet
            if(Auth::user()->currency_type=='eth'){
                $receiving_wallet_id=Adminwallets::where('currency','eth')->orderByRaw('RAND()')->take(2)->first()->id;
            }else{
                $receiving_wallet_id=Adminwallets::where('currency','ltc')->orderByRaw('RAND()')->take(2)->first()->id;
            }

            $receiving_wallet_address=Adminwallets::where('id',$receiving_wallet_id)->orderByRaw('RAND()')->take(2)->first()->address;

            ///////////////////////////////
            $index=0; $callback=null;

            //populate ReceivingAddress model  

                $detail=new ReceivingDetail;

                $detail->currency=Auth::user()->currency_type;

                $detail->remember_token=$request->_token;

                $detail->generated_address=$receiving_wallet_address;

                $detail->user_id=Auth::user()->id;

                $detail->amount_to_receive=$request->amount;

                $detail->index=$index;

                $detail->callback=$callback;

                $detail->transaction_id=$transaction_id;

                $detail->save();

        	//populate capital model

        	$capital=new Capital;

            //allocating receing wallet id

            $capital->receiving_wallet_id=$receiving_wallet_id;

        	$capital->user_id=Auth::user()->id;

        	$capital->amount=$request->amount;

            $capital->transaction_id=$transaction_id;

        	$capital->initial_capital_id=0; //no initial investment

        	$capital->has_reinvested=0;

        	$capital->has_ended=0;

        	$capital->remember_token=$request->_token;

        	$capital->save();

        	//populate transaction model

        	$transaction=new Transaction;

        	$transaction->user_id=Auth::user()->id;

        	$transaction->message="You invested $ ".$request->amount;

        	$transaction->remember_token=$request->_token;

        	$transaction->save();



        }




    	return Redirect::to('/transaction')->with('notification',"You've invested $ ".number_format($request->amount).". Make payment to the following address : ".$receiving_wallet_address);

    	}
    }






    public function reinvest($capital_id){

    	$Capital=Capital::where('id', $capital_id)->first();

    	$alreadyReinvested=$Capital->has_reinvested;

        if($Capital->has_requested==1){
            return Redirect::to('/wallet')->with('notification','Already requested capital');
        }

    	if($alreadyReinvested == 1){
    		return Redirect::to('/wallet')->with('notification','Already reinvested capital and profit');
    	}else{
    		$netRemainingProfit=0;
    		$Profits=$Capital->profit;
    		foreach ($Profits as $Profit) {
    			if($Profit->has_requested==1){
    				continue;
    			}

    			$netRemainingProfit=$netRemainingProfit+$Profit->amount;

    			Profit::where('id', $Profit->id)->update(['has_requested'=>1, 'has_paid'=>1]);
    		}

    		if($Capital->has_requested==1){
    			$capitalInvested=0;
    		}else{
    			$capitalInvested=$Capital->amount;
    		}

    		Capital::where('id', $capital_id)->update(['has_reinvested'=>1, 'has_requested'=>1, 'has_ended'=>1]);

    		$Invest=new Capital;

    		$Invest->user_id=Auth::user()->id;

    		$not=$Invest->amount=$capitalInvested+$netRemainingProfit;

    		$Invest->initial_capital_id=$capital_id;

    		$Invest->has_reinvested=0;

            $Invest->has_confirmed_payment=1;

    		$Invest->has_ended=0;

    		$Invest->has_requested=0;

    		$Invest->save();

    		//set transaction notification

    		$transaction=new Transaction;

        	$transaction->user_id=Auth::user()->id;

        	$transaction->message="You reinvested $ ".$not;

        	$transaction->save();


    	}


    	return Redirect::to('/transaction')->with('notification',"You've successfully reinvested $ ".$not);


    }


    public function investBonus($bonus_id){
    	$Bonus=Downline::where('id',$bonus_id)->first();

    	if($Bonus->has_requested >0){

    		return Redirect::to('/downline')->with('notification',"Bonus already requested ");
    	}

    	if($Bonus->has_invested > 0){

    		return Redirect::to('/downline')->with('notification',"Bonus already invested ");
    	}

    	$Invest=new Capital;

    		$Invest->user_id=Auth::user()->id;

    		$not=$Invest->amount=$Bonus->amount;

    		$Invest->initial_capital_id=0;

    		$Invest->has_reinvested=0;

    		$Invest->has_ended=0;

    		$Invest->has_requested=0;

    		$Invest->save();

    		//update downline
    		Downline::where('id', $bonus_id)->update(['has_requested'=>1, 'has_invested'=>1, 'has_paid'=>1]);

    		//set transaction notification

    		$transaction=new Transaction;

        	$transaction->user_id=Auth::user()->id;

        	$transaction->message="You reinvested bonus of ".$not." ".Auth::user()->currency_type;

        	$transaction->save();

        	return Redirect::to('/transaction')->with('notification',"Bonus successfully invested ");


    }



}
