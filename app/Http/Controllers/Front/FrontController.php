<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlashRegisterFirstStep;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

class FrontController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {

        return response()->view('front.index');
    }

    /**
     * @param FlashRegisterFirstStep $request
     * @return JsonResponse
     */
    public function firstStep(FlashRegisterFirstStep $request): JsonResponse
    {
        $user = ['email'=>$request->get('email'),'password'=>Hash::make($request->get('password')),'terms'=>$request->get('terms')];
        $request->session()->put('user',$user);
        $json = ['location'=>'/register/second-step'];
        return response()->json($json);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function secondStep(Request $request): JsonResponse
    {
        $request->session()->pull('user.gender');
        $request->session()->pull('user.target');
        $request->session()->put('user.gender',$request->get('gender'));
        $request->session()->put('user.target',$request->get('target'));
        $json = ['location'=>'/register/third-step'];
        return response()->json($json);
    }
    public function secondGetStep(Request $request): Response
    {
        if($request->session()->get('user')){
            return response()->view('auth.register.secondStep');
        }else{
            return response()->view('auth.register');
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function thirdStep (Request $request): JsonResponse
    {
        $request->session()->pull('user.age');
        $request->session()->pull('user.weight');
        $request->session()->pull('user.height');
        $request->session()->put('user.age',$request->get('age'));
        $request->session()->put('user.weight',$request->get('weight'));
        $request->session()->put('user.height',$request->get('height'));
        $json = ['location'=>'/register/four-step'];
        return response()->json($json);
    }
    public function thirdGetStep (Request $request): Response
    {
        if($request->session()->get('user')){
            return response()->view('auth.register.thirdStep');
        }else{
            return response()->view('auth.register');
        }
    }

    public function fourStep (): Response
    {
        return response()->view('auth.register.fourStep');

    }

    /**
     * @return Response
     */
    public function fourGetStep(): Response
    {
        return response()->view('auth.register.fourStep');
    }
}
