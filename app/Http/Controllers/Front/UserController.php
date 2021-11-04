<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Personal;
use App\Model\Subscription;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $subscription = Subscription::find($request->get('subscribe'));

        $input = $this->getUserFromSession($request);
        $input['date_left'] = Carbon::now()->addDays((int)$subscription->duration_subscribe);
        $user = User::create($input);
        $user->subscriptions()->attach($subscription->id);
        $personal = ['age'=>$input['age'],'height'=>$input['height'],'weight'=>$input['weight'],'user_id'=>$user->id];
        Personal::create($personal);
        $user->achievements()->attach(1);
        Auth::login($user);
        return redirect()->route('profile.index');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getUserFromSession(Request $request)
    {
        return $request->session()->get('user');
    }

}
