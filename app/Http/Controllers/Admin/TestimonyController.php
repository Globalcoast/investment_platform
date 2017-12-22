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
use App\Testimony;

class TestimonyController extends Controller
{
    //

    public function read(){

    	$Testimonies=Testimony::orderBy('id','desc')->paginate('12');

    	return view('admin.testimony.index',['Testimonies'=>$Testimonies]);
    }
}
