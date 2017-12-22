<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;



class LoginAdminController extends Controller
{
    //
    
    //

	use RegistersUsers;

    protected $guard = 'admin';


    public function showLoginForm(){

    	return view('admin.auth.login');
    }

    public  function login(Request $request){

    	$this->validate($request,[

    		'username'=>'required',
    		'password'=>'required|min:6'
    	]);

    	if(Auth::guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password], $request->remember)){

    		return redirect('/admin/dashboard')->with('notification','You are logged in as '.$request->username);;

    		//return redirect()->intended(route('admin/dashboard'));

    	}

    	return redirect()->back()->withInput($request->only('username','remember'));

    }


   public function logout(Request $request){

   		$this->guard('admin')->logout();

        $request->session()->invalidate();

        return redirect('/admin/login');

   }


    public function showRegisterForm(){

    	return view('admin.auth.register');
    }

    public  function register(Request $request){

    	$formData=$request->all();

        $rule=array(
            
            'username'=>'required|min:6',

             'password'=>"required|min:6|confirmed",
            
            'role'=>"required"
            );

        $message=array(
            
            'role.required'=>'Type field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to('/admin/register')->withErrors($validator)->withInput();

        }else{

        $admin=new Admin;

        $admin->username=$request->username;

        $admin->password=Hash::make($request->password);

        $admin->role=$request->role;

        $admin->remember_token=$request->_token;

        $admin->save();

    	return Redirect::to('/admin/dashboard')->with('notification','Admin user successfully created');

    	}

    	
    }
}

