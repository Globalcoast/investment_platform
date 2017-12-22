<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Capital;
use App\Profit;
use App\GRequest;
use App\News;

class NewsController extends Controller
{
    //
    public function read(){

    	$NewsList=News::orderBy('id','desc')->paginate('12');

    	return view('admin.news.index',['NewsList'=>$NewsList]);
    }


    public function view($news_id){

    	$News=News::where('id', $news_id)->first();

    	return view('admin.news.view', ['News'=>$News]);

    }

    public function delete($news_id){

    	News::where('id', $news_id)->delete();

    	return redirect::back()->with('notification', 'News deleted');

    }

    public function showNewsForm(){

    	return view('admin.news.create');
    }


    public function create(Request $request){



    	$formData=$request->all();

        $rule=array(
            
            'title'=>'required|max:50',

             'message'=>"required"
            );

        $message=array(
            
            'title.required'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();

        }else{

        	$news=new News;

        	$news->title=$request->title;

        	$news->message=$request->message;

        	$news->remember_token=$request->_token;

        	$news->save();
        	
    	return redirect::back()->with('notification','News created ');

    	}



    	
    }
}
