<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Model\DietRestrictions;
use App\Model\FoodCategory;
use App\Model\Personal;
use App\Model\PurposeOfNutrition;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    use UploadImage;

    public function index(): Response
    {
        return response()->view('front.user.index');
    }

    public function information(): Response
    {
        $personal = Personal::where('user_id', Auth::id())->latest('created_at')->first();
        return response()->view('front.user.information', ['personal' => $personal]);
    }

    public function food(): Response
    {
        return response()->view('front.user.food',
            [
                'dietRestriction' => DietRestrictions::all(),
                'foodCategory' => FoodCategory::with('dishes')->get(),
                'purposeOfNutrition' => PurposeOfNutrition::all()
            ]);
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

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function changeUserPhoto(Request $request): JsonResponse
    {
        $image = $request->file('image');
        $image = $this->uploadSliderImage('/images/user', $image);
        $user = Auth::user();
        $user->avatar = $image;
        $user->save();
        return response()->json($user);


    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function changeUserName(Request $request): JsonResponse
    {
        $user = Auth::user();
        $user->name = $request->get('name');
        $user->save();
        return response()->json($user);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function changeUserGender(Request $request): JsonResponse
    {
        $user = Auth::user();
        $user->gender = $request->get('gender');
        $user->save();
        return response()->json($user);
    }

    public function changeUserPersonals(Request $request): RedirectResponse
    {
        $input = $request->all();
        Personal::create($input);
        return redirect()->route('profile.information');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getPersonals(Request $request): JsonResponse
    {
        $personals = Personal::where('user_id', Auth::id())->get();
        $weight = [];
        $date = [];
        foreach ($personals as $personal) {
            array_push($weight, $personal->weight);
            array_push($date, $personal->created_at->toString());
        }
        $json = ['date' => $date, 'weight' => $weight];
        return response()->json($json);

    }
}
