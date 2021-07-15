<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Personal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * @param Request $request
     */
    public function register(Request $request)
    {

        $input = $this->getUserFromSession($request);
        $user = User::create($this->getUserFromSession($request));
        $personal = ['age'=>$input['age'],'height'=>$input['height'],'weight'=>$input['weight'],'user_id'=>$user->id];
        Personal::create($personal);
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
