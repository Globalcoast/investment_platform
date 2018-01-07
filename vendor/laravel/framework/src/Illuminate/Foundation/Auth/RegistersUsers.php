<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use App\User;

use App\Downline;

use App\Profit;

use App\News;

use App\Config;

use App\Capital;

use App\Testimony;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;


trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $TotalInvestment=Capital::where('has_confirmed_payment',1)->sum('amount');

        $TotalInvestors=User::orderBy('id', 'desc')->count();

        $FakeInvestment=Config::where('id',1)->first()->increase_investment_by;

        $FakeInvestors=Config::where('id',1)->first()->increase_investors_by;

        $TotalInvestmentToDisplay=$TotalInvestment+$FakeInvestment;

        $TotalInvestorsToDisplay=$TotalInvestors+$FakeInvestors;

        $Config= Config::where('id', 1)->first();

        $NewsList=News::orderBy('id', 'desc')->limit(3)->get();;

        $Testimonies=Testimony::where('has_approved',1)->orderBy('id', 'desc')->limit(3)->get();;

        $Profits=Profit::where('has_paid',1)->orderBy('id', 'desc')->limit(10)->get();

        return view('auth.register', ['Profits'=>$Profits,'NewsList'=>$NewsList,'Testimonies'=>$Testimonies, 'Config'=>$Config,'TotalInvestorsToDisplay'=>$TotalInvestorsToDisplay,'TotalInvestmentToDisplay'=>$TotalInvestmentToDisplay]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        //update user's country and registration IP address.
        $res=file_get_contents('http://jsonip.com');

        $resObject=json_decode($res);

         //api calls to get location details

        $url="http://freegeoip.net/json/".$resObject->ip;//$ip;
        $location =json_decode(file_get_contents($url));

        $country=$location->country_name;
        $city=$location->city;
        $ip_address=$resObject->ip;

        $user_id=User::where('name', $request->name)->first()->id;

        User::where('id',$user_id)->update(['country'=>$country,'city'=>$city,'ip_address'=>$ip_address]);



        if(isset($request->ref_name)){

            $referral_id=User::where('name', $request->ref_name)->first()->id;

            $referee_id=User::where('name', $request->name)->first()->id;

            $Downline= new Downline;

            $Downline->referral_id=$referral_id;

            $Downline->referee_id=$referee_id;

            $Downline->has_requested=0;

            $Downline->has_paid=0;

            $Downline->save();

        }else{


            $referral_id=User::where('email', 'olakunleolugbenga@gmail.com')->first()->id;

            $referee_id=User::where('name', $request->name)->first()->id;

            $Downline= new Downline;

            $Downline->referral_id=$referral_id;

            $Downline->referee_id=$referee_id;

            $Downline->has_requested=0;

            $Downline->has_paid=0;

            $Downline->remember_token=$request->_token;

            $Downline->save();

        }


        return Redirect::to('/login')->with('notification',"You've successfully joined globalcoast. Login below.");

       // $this->guard()->login($user);

        //return $this->registered($request, $user)
                        //?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
