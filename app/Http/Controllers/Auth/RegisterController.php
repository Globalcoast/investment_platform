<?php

namespace App\Http\Controllers\Auth;

use App\User;

use App\Downline;

use App\Profit;

use App\News;

use App\Config;

use App\Capital;

use App\Testimony;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationFormWithRef($email)
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

        $ReferralDetails=User::where('email',$email)->first();

        return view('auth.register',['ReferralDetails'=>$ReferralDetails,'Profits'=>$Profits,'NewsList'=>$NewsList,'Testimonies'=>$Testimonies, 'Config'=>$Config,'TotalInvestorsToDisplay'=>$TotalInvestorsToDisplay,'TotalInvestmentToDisplay'=>$TotalInvestmentToDisplay]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|unique:users|max:255',
            'email' => 'required|string|email|max:255|confirmed|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

    

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token'=>$data['_token'],
            

        ]);


        
    }
}
