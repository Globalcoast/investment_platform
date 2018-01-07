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

class SiteConfigController extends Controller
{
    //

    public function showConfigForm(){

    	$Config=Config::where('id',1)->first();

    	return view ('admin.config',['Config'=>$Config]);
    }


    public function updateConfig(Request $request){

    	$formData=$request->all();

        $rule=array(
            
            'roi_period'=>'required|integer',

             'roi_value'=>"required|integer",
            
            'cron_status'=>"required|integer",
            'investors'=>"required|integer",
            'investment'=>'required|integer',
            'testimony_bonus_value'=>'required|integer'
            );

        $message=array(
            
            'roi_period.required'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to('/admin/config')->withErrors($validator)->withInput();

        }else{

        	Config::where('id', 1)->update(['roi_period'=>$request->roi_period,'roi_value'=>$request->roi_value,'cron_status'=>$request->cron_status,'increase_investors_by'=>$request->investors,'increase_investment_by'=>$request->investment, 'testimony_bonus_amount'=>$request->testimony_bonus_value]);


    	return Redirect::back()->with('notification','Site Configurations updated');

    	}
    }

    public function manualCron(){


         $Capitals=Capital::where([['has_ended',0],['has_requested',0],['has_confirmed_payment',1],['has_reinvested',0]])->get();


         $day_name=date('D', strtotime("now"));


          if($day_name=="Sun" || $day_name=="Sat"){
              return Redirect::back()->with('notification','Error, Profit can only be added through weekdays');          ;
          }else{

            foreach ($Capitals as $Capital) {
                
                $Profits=$Capital->profit;

                $count_profit=$Profits->count();

                //get roi period
                $roi_period=Config::where('id',1)->first()->roi_period;

                if($count_profit>=$roi_period){continue;}

                //allocate daily profit
                //get roi value
                $roi_value=Config::where('id',1)->first()->roi_value;

                $invested_capital=$Capital->amount;

                $daily_roi=($roi_value/100)*$invested_capital;

                $profit=new Profit;

                $profit->user_id=$Capital->user->id;

                $profit->capital_id=$Capital->id;

                $profit->amount=$daily_roi;

                $profit->has_requested=0;

                $profit->has_paid=0;

                $profit->automate=0;

                $profit->save();

            }


            return Redirect::back()->with('notification','Response: 200 OK');

            }



    }


    public function Cron(){


         $Capitals=Capital::where([['has_ended',0],['has_requested',0],['has_confirmed_payment',1],['has_reinvested',0]])->get();


         $day_name=date('D', strtotime("now"));


          if($day_name=="Sun" || $day_name=="Sat"){
              return Redirect::back()->with('notification','Error, Profit can only be added through weekdays');          ;
          }else{

            foreach ($Capitals as $Capital) {
                
                $Profits=$Capital->profit;

                $count_profit=$Profits->count();

                //get roi period
                $roi_period=Config::where('id',1)->first()->roi_period;

                if($count_profit>=$roi_period){continue;}

                //allocate daily profit
                //get roi value
                $roi_value=Config::where('id',1)->first()->roi_value;

                $invested_capital=$Capital->amount;

                $daily_roi=($roi_value/100)*$invested_capital;

                $profit=new Profit;

                $profit->user_id=$Capital->user->id;

                $profit->capital_id=$Capital->id;

                $profit->amount=$daily_roi;

                $profit->has_requested=0;

                $profit->has_paid=0;

                $profit->automate=0;

                $profit->save();

            }


            echo "Response : 200 OK";

            }



    }

}
