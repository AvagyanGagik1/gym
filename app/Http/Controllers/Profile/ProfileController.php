<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return response()->view('front.user.index');
    }
    public function information(){
        return response()->view('front.user.information');
    }
    public function food(){
        return response()->view('front.user.food');
    }
    public function achievements(){
        return response()->view('front.user.achievements');
    }
    public function subscribe(){
        return response()->view('front.user.subscribe');
    }
    public function functional(){
        return response()->view('front.user.functional');
    }
    public function burnFat(){
        return response()->view('front.user.burnFat');
    }
}
