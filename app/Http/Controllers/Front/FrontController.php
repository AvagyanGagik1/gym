<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlashRegisterFirstStep;
use App\Model\FirstStep;
use App\Model\HwoAreWe;
use App\Model\MainNew;
use App\Model\Slider;
use App\Model\SliderText;
use App\Model\Trainer;
use App\Model\TrainerHeader;
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
    public function index(Request $request)
    {
        $who = HwoAreWe::find(1);
        $slider = Slider::all();
        $sliderText = SliderText::find(1);
        $firstStep = FirstStep::find(1);
        parse_str( parse_url( $firstStep->video_link, PHP_URL_QUERY ), $my_array_of_vars );
        $youtubeImage = $my_array_of_vars['v'];
        $trainerHeader = TrainerHeader::find(1);
        $trainer = Trainer::all();
        $mainNews = MainNew::find(1);
        return response()->view('front.index',
            ['who' => $who,
            'slider' => $slider,
            'sliderText' => $sliderText,
            'firstStep'=>$firstStep,
            'youtubeImage'=>$youtubeImage,
            'trainerHeader'=>$trainerHeader,
            'trainer'=>$trainer,
                'mainNews'=>$mainNews]);
    }

    /**
     * @param FlashRegisterFirstStep $request
     * @return JsonResponse
     */
    public function firstStep(FlashRegisterFirstStep $request): JsonResponse
    {
        $user = ['email' => $request->get('email'), 'password' => Hash::make($request->get('password')), 'terms' => $request->get('terms')];
        $request->session()->put('user', $user);
        $json = ['location' => '/register/second-step'];
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
        $request->session()->put('user.gender', $request->get('gender'));
        $request->session()->put('user.target', $request->get('target'));
        $json = ['location' => '/register/third-step'];
        return response()->json($json);
    }

    public function secondGetStep(Request $request): Response
    {
        if ($request->session()->get('user')) {
            return response()->view('auth.register.secondStep');
        } else {
            return response()->view('auth.register');
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function thirdStep(Request $request): JsonResponse
    {
        $request->session()->pull('user.age');
        $request->session()->pull('user.weight');
        $request->session()->pull('user.height');
        $request->session()->put('user.age', $request->get('age'));
        $request->session()->put('user.weight', $request->get('weight'));
        $request->session()->put('user.height', $request->get('height'));
        $json = ['location' => '/register/four-step'];
        return response()->json($json);
    }

    public function thirdGetStep(Request $request): Response
    {
        if ($request->session()->get('user')) {
            return response()->view('auth.register.thirdStep');
        } else {
            return response()->view('auth.register');
        }
    }

    public function fourStep(): Response
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
