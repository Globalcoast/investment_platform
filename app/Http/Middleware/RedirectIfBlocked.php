<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Closure;

class RedirectIfBlocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         $getUser=User::where('id', Auth::user()->id)->first();
        if($getUser->status == 0){
            return Redirect::to('/user/block')->with('notification','You have been blocked from the system. Contact support team.');
        }else{
            return $next($request);
        }
    }
}
