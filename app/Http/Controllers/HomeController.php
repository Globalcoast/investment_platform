<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use App\User;
use App\Capital;
use App\Profit;
use App\Config;

//HTTP REQUEST CLIENT
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    $res=file_get_contents('http://jsonip.com');

    $resObject=json_decode($res);

    $user_ip=$resObject->ip;

    Session::put('user_ip',$user_ip);


       

       /*  //BTC-USD API CALL
        $client = new Client();
        $btcRes = $client->request('GET', 'https://api.cryptonator.com/api/ticker/btc-usd');
        $ethRes = $client->request('GET', 'https://api.cryptonator.com/api/ticker/eth-usd');
        $ltcRes = $client->request('GET', 'https://api.cryptonator.com/api/ticker/ltc-usd');
        $StatusRes= $btcRes->getStatusCode();
        // 200
        $HeaderRes =$btcRes->getHeaderLine('content-type');
        // 'application/json; charset=utf8'
        $btcBodyRes=$btcRes->getBody();
         $ltcBodyRes=$ltcRes->getBody();
         $ethBodyRes=$ethRes->getBody();


        $btcBodyRes=json_decode($btcBodyRes, true);
         $ethBodyRes=json_decode($ethBodyRes, true);
          $ltcBodyRes=json_decode($ltcBodyRes, true);

        $coinUSDRate=['btc'=>$btcBodyRes['ticker']['price'], 'eth'=>$ethBodyRes['ticker']['price'], 'ltc'=>$ltcBodyRes['ticker']['price']];
        // '{"id": 1420053, "name": "guzzle", ...}'

        */


        $TotalInvestors=User::orderBy('id', 'asc')->count();

        $TotalInvestments=Capital::orderBy('id', 'asc')->get();//->sum('amount');

        $TotalPaidOut=Profit::where('has_paid',1)->get();//->sum('amount');

        $Profits=Profit::where('has_paid',1)->orderBy('id', 'desc')->limit(10)->get();

        $Capitals=Capital::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate('10');


        $OverallInvestment=0;
        foreach($TotalInvestments as $EachInvestment){

      

            $OverallInvestment=$OverallInvestment+($EachInvestment->amount);

        }


        $OverallPaidOut=0;
        foreach($TotalPaidOut as $EachPaidOut){

    

            $OverallPaidOut=$OverallPaidOut+($EachPaidOut->amount);

        }

      $Config= Config::where('id', 1)->first();

        $TotalInvestment=Capital::where('has_confirmed_payment',1)->sum('amount');

        $TotalInvestors=User::orderBy('id', 'desc')->count();

        $FakeInvestment=Config::where('id',1)->first()->increase_investment_by;

        $FakeInvestors=Config::where('id',1)->first()->increase_investors_by;

        $TotalInvestmentToDisplay=$TotalInvestment+$FakeInvestment;

        $TotalInvestorsToDisplay=$TotalInvestors+$FakeInvestors;



        return view('dashboard.index', ['TotalInvestors'=>$TotalInvestors, 'TotalInvestments'=>$OverallInvestment,'TotalPaidOut'=>$OverallPaidOut,"Profits"=>$Profits,'Config'=>$Config,'TotalInvestorsToDisplay'=>$TotalInvestorsToDisplay,'TotalInvestmentToDisplay'=>$TotalInvestmentToDisplay,'Capitals'=>$Capitals]);
    }
}
