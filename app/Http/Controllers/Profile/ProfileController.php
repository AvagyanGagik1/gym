<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index(): Response
    {
        return response()->view('front.user.index');
    }
    public function information(): Response
    {
        return response()->view('front.user.information');
    }
    public function food(): Response
    {
        return response()->view('front.user.food');
    }
    public function achievements(): Response
    {
        return response()->view('front.user.achievements');
    }
    public function subscribe(): Response
    {
        return response()->view('front.user.subscribe');
    }
    public function functional(): Response
    {
        return response()->view('front.user.functional');
    }
    public function burnFat(): Response
    {
        return response()->view('front.user.burnFat');
    }
}
