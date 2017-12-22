<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use Closure;

class RedirectIfSettingsNotCompleted
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

        $SettingProfile=User::where('id', Auth::user()->id)->first();

        if($SettingProfile->phone !=null && $SettingProfile->country !=null){

            return $next($request);

        }else{

            return Redirect::to('/setting')->with('notification', 'Take a minute to update your profile details');
        }

        
    }
}
