<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\User;

use App\Capital;
use App\Downline;
use App\Inbox;
use App\Profit;

use App\GRequest;

use App\Testimony;

use App\Transaction;

class UserController extends Controller
{
    //

    public function index(){
    	
    	$Users=User::orderBy('id','desc')->paginate('20');

    	return view('admin.user.index',['Users'=>$Users]);
    }

    public function view($id){

    	$User=User::where('id', $id)->first();

    	return view('admin.user.view',['User'=>$User]);
    }

    public function block($id){

    	User::where('id', $id)->update(['status'=>0]);

    	return Redirect::back()->with('notification','User blocked');
    }

    public function unblock($id){

    	User::where('id', $id)->update(['status'=>1]);

    	return Redirect::back()->with('notification','User unblocked');
    }


    public function delete($id){

    	Capital::where('user_id', $id)->delete();
    	Downline::where('referral_id', $id)->delete();
    	Downline::where('referee_id', $id)->delete();
    	Profit::where('user_id', $id)->delete();
    	GRequest::where('user_id', $id)->delete();
    	Testimony::where('user_id', $id)->delete();
    	Transaction::where('user_id', $id)->delete();
    	User::where('id', $id)->delete();


    	return Redirect::to('/admin/user')->with('notification','User deleted');
    }
}
