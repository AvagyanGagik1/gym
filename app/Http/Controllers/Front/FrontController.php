<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return response()->view('front.index');
    }
    public function secondStep(){
        return response()->view('auth.login.secondStep');
    }
}
