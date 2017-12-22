<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class InboxController extends Controller
{
    //

     public function create(Request $request){


    	$formData=$request->all();

        $rule=array(
            
            'name'=>'required',

             'email'=>"required|email",
            
            'message'=>"required|unique:inboxs"
            );

        $message=array(
            
            'message.required'=>'Message field is required',
            'message.unique'=>'Existence of similar message. Please, reframe your message.'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to('/register')->withErrors($validator)->withInput();

        }else{

        $inbox=new Inbox;

        $inbox->name=$request->name;

        $inbox->email=$request->email;

        $inbox->message=$request->message;

        $inbox->remember_token=$request->_token;

        $inbox->save();

    	return Redirect::to('/register')->with('notification','Contact message submitted successfully. Our team will get back to you soon.');

    	}



    }

}
