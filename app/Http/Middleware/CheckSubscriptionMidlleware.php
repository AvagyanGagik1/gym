<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckSubscriptionMidlleware
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

        if(Auth::check()){
            $user = User::where('id',Auth::id())->first();
            if(!count($user->subscriptions) && !$user->is_admin){
                return redirect('/block');
            }else{
                return $next($request);
            }
        }
    }
}
