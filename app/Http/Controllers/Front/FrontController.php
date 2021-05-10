<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return response()->view('front.user.index');
    }
    public function secondStep(){
        return response()->view('auth.register.secondStep');
    }
    public function thirdStep (){
        return response()->view('auth.register.thirdStep');
    }
    public function fourStep (){
        return response()->view('auth.register.fourStep');
    }
}
