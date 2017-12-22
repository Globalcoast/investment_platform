<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\User;

class DashboardController extends Controller
{
    //

    public function index(){

    	$LatestUsers=User::orderBy('id','desc')->limit('20')->paginate('5');

    	return view('admin.dashboard',['LatestUsers'=>$LatestUsers]);
    }
}
