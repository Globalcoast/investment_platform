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

class ProcessBlockChainPaymentController extends Controller
{
    //
    public function confirmPayment(Request $request){

    	$transaction_id=$request->transaction_id;

    	$transaction_hash=$request->transaction_hash;

    	$value_in_satoshi=$request->value_in_satoshi;

    	$value_in_btc=$request->value_in_satoshi/100000000;


    	//API call to get bitcoin to dollar exchange rate

    	$client = new Client();
        
        $response = $client->request('GET', 'https://blockchain.info/ticker');

        $status= $response->getStatusCode();

        $header =$response->getHeaderLine('content-type');

        $body=$response->getBody();

        $bodyObject=json_decode($body);

        //btc to dollar exchange rate
        $rate=$bodyObject->USD->last;

        $amount_received=ceil($value_in_btc*$rate);  //to nearest whole number

        $expected=ReceivingDetail::where('transaction_id',$transaction_id)->first();

        if($amount_received < $expected->amount_to_receive){

        	$initial_amount_received=$expected->amount_received;

        	$new_amount_received=$initial_amount_received+amount_received;

        	ReceivingDetail::where('transaction_id', $transaction_id)->update(['amount_received'=>$new_amount_received]);

        	if($new_amount_received >= $amount_to_receive){

        		Capital::where('transaction_id', $transaction_id)->update(['has_confirmed_payment'=>1]);
        	}

        }else{


        	$initial_amount_received=$expected->amount_received;

        	$new_amount_received=$initial_amount_received+amount_received;

        	ReceivingDetail::where('transaction_id', $transaction_id)->update(['amount_received'=>$new_amount_received]);

        	//update capital table

        	Capital::where('transaction_id', $transaction_id)->update(['has_confirmed_payment'=>1]);



        }



        echo "*ok*";


    	/*$real_secret = 'ZzsMLGKe162CfA5EcG6j';
$invoice_id = $_GET['invoice_id']; //invoice_id is passed back to the callback URL
$transaction_hash = $_GET['transaction_hash'];
$value_in_satoshi = $_GET['value'];
$value_in_btc = $value_in_satoshi / 100000000;

//Commented out to test, uncomment when live
if ($_GET['test'] == true) {
    return;
}

try {
  //create or open the database
  $database = new SQLiteDatabase('db.sqlite', 0666, $error);
} catch(Exception $e) {
  die($error);
}

//Add the invoice to the database
$stmt = $db->prepare("replace INTO invoice_payments (invoice_id, transaction_hash, value) values(?, ?, ?)");
$stmt->bind_param("isd", $invoice_id, $transaction_hash, $value_in_btc);

if($stmt->execute()) {
   echo "*ok*";
} */

	
    }
}
