<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;


class NewsController extends Controller
{
    //

    public function read(){

    	$NewsList=News::orderBy('id', 'desc')->paginate('12');

    	return view('news.index', ['NewsList'=>$NewsList]);

    }

    public function view($news_id){

    	$News=News::where('id', $news_id)->first();

    	return view('news.view', ['News'=>$News]);

    }

}
