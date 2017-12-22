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
use App\Inbox;

class InboxController extends Controller
{
    //
    public function read(){

    	$Messages=Inbox::orderBy('id','desc')->paginate(20);

    	return view('admin.inbox.index',['Messages'=>$Messages]);
    }

    public function delete($message_id){

    	Inbox::where('id', $message_id)->delete();

    	return redirect::back()->with('notification', 'Message deleted');

    }

    public function view($message_id){

    	$Message=Inbox::where('id', $message_id)->first();

    	return view('admin.inbox.view',['Message'=>$Message]);

    }
}
