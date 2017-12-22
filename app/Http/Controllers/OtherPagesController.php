<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;


class OtherPagesController extends Controller
{
    //

    public function news(){

    	$NewsList=News::orderBy('id','desc')->limit(10)->get();

    	return view('news',['NewsList'=>$NewsList]);
    }
}
