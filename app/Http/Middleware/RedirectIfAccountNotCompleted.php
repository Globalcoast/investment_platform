<?php

namespace App\Http\Middleware;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Closure;

class RedirectIfAccountNotCompleted
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
        $AccountProfile=User::where('id', Auth::user()->id)->first();

        if($AccountProfile->currency_type !=null && $AccountProfile->wallet_address !=null){

            return $next($request);

        }else{

            return Redirect::to('/account')->with('notification', 'Take a minute to update your wallet details');
        }

    }
}
