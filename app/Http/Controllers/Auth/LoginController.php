<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * @return string
     */
    public function redirectTo(){
        if(Auth::check()){
            if(Auth::user()->is_admin){
                return '/admin';
            }else{
                return '/profile';
            }
        }
    }
public function authenticated(Request $request, $user)
{
    if(!$user->achievements()->get()->contains('id',8) && strtotime($user->created_at->addDay(30)) < strtotime(Carbon::now())){
        $user->achievements()->attach(8);
    }
    if(!$user->achievements()->get()->contains('id',9) && strtotime($user->created_at->addDay(180)) < strtotime(Carbon::now())){
        $user->achievements()->attach(9);
    }
    if(!$user->achievements()->get()->contains('id',10) && strtotime($user->created_at->addDay(365)) < strtotime(Carbon::now())){
        $user->achievements()->attach(10);
    }
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
