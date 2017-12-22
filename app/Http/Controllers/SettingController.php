<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

use App\User;

class SettingController extends Controller
{
    //

    public function read(){

    	$SettingProfiles=User::where('id', Auth::user()->id)->get();

    	//Location details api section

    	$LocationDetails=null;

    	if($LocationDetails==null){
    		$LocationDetails['country']="nigeria";
    	}

    	return view('setting.index',['SettingProfiles'=>$SettingProfiles, "LocationDetails"=>$LocationDetails]);
    }


    public function update(Request $request){

    	$formData=$request->all();

        $rule=array(
            
            'phone'=>'required|unique:users|numeric',
            
            'country'=>"required"
            );

        $message=array(
            
            'phone.required'=>'This Field is required',
            'phone.numeric'=>"Phone number must be of numeric value",
            
            'country.required'=>'Nationality field required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to('/setting')->withErrors($validator);

        }else{


        User::where('id', Auth::user()->id)->update(['phone'=>$request->phone, 'country'=>$request->country]);

    	

    	return Redirect::to('/home')->with('notification','Profile details updated.');

    	}
    }

    public function showChangePasswordForm(){

        return view('setting.password');
    }

    public function changePassword(Request $request){

        $formData=$request->all();

        $rule=array(
            
            'current_password'=>'required',
            'password' => 'required|string|min:6|confirmed',
            );

        $message=array(
            
            'current_password.required'=>'Current password is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to('/password/change')->withErrors($validator);

        }else{

            $Password=User::where('id', Auth::user()->id)->first()->password;

            $currentPasswordHashed=Hash::make($request->current_password);

            if($Password!=$currentPasswordHashed){

                 return Redirect::to('/password/change')->withInput()->with('notification','Incorrect current password');
            }


            //update password

            $newPasswordHashed=Hash::make($request->password);

            User::where('id', Auth::user()->id)->update(['password'=>$newPasswordHashed]);

             return Redirect::to('/password/change')->withInput()->with('notification','Password successfuly changed to '.$request->password);



    }

    }




}
