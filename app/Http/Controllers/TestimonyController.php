<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class TestimonyController extends Controller
{
    //

    public function read(){

    	$Testimonies=Testimony::where('has_approved',1)->orderBy('id', 'desc')->paginate(12);

    	return view('testimony.view', ['Testimonies'=>$Testimonies]);
    }

    public function showTestimonyForm(){

    	return view('testimony.index');
    }


    public function create(Request $request){


    	$formData=$request->all();

        $rule=array(
            
            'video_link'=>'required|url|unique:testimonies',
            
            'message'=>"required|max:250|unique:testimonies"
            );

        $message=array(
            
            'message.required'=>'Testimonial message is required',
            'video_link.unique'=>'The video link has already been submited',
            'message.unique'=>'Existence of similar message. Please, reframe your message.'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to('/testimony/create')->withErrors($validator)->withInput();

        }else{

        $testimony=new Testimony;

        $testimony->user_id=Auth::user()->id;

        $testimony->video_link=$request->video_link;

        $testimony->message=$request->message;

        $testimony->remember_token=$request->_token;

        $testimony->save();

    	return Redirect::to('/testimony/create')->with('notification','Testimony submitted successfully. Awaiting approval.');

    	}



    }
}
