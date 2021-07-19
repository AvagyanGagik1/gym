<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Admin\Comment\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\ParseYoutubeLink;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreCommentRequest;
use App\Model\Achievement;
use App\Model\Comment;
use App\Model\CompletedProgram;
use App\Model\CompletedWorkout;
use App\Model\DietRestrictions;
use App\Model\Dish;
use App\Model\FoodCategory;
use App\Model\Personal;
use App\Model\Program;
use App\Model\ProgramCategory;
use App\Model\PurposeOfNutrition;
use App\Model\Subscription;
use App\Model\Workout;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    use UploadImage, ParseYoutubeLink;

    public function index(): Response
    {
        $myPrograms = [];
        $myProgramId = [];
        $user = Auth::user();
        $subscriptions = $user->subscriptions;
        foreach ($subscriptions as $subscription) {
            foreach ($subscription->programs as $program) {
                array_push($myPrograms, $program);
                array_push($myProgramId, $program->id);
            }
        }
        return response()->view('front.user.index', ['myProgramId' => $myProgramId, 'myPrograms' => $myPrograms, 'programsCategory' => ProgramCategory::with('programs')->get()]);
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
        $user = Auth::user();
        $achievements = $user->achievements;
        $activated = $this->getActivatedAchievements($achievements);
        return response()->view('front.user.achievements', ['achievements' => Achievement::all(), 'activated' => $activated]);
    }

    public function subscribe()
    {
        return response()->view('front.user.subscribe', ['subscriptions' => Subscription::all()]);
    }

    public function functional()
    {
        return response()->view('front.user.functional');
    }

    public function burnFat($id)
    {
        $program = Program::where('id', $id)->with('workout')->first();
        foreach ($program->workout as $workout) {
            foreach ($workout->tasks as $task) {
                $task->subtasks;
            }

            $workout->videos;
        }
        $user = Auth::user();
        $completedWorkouts = [];
        foreach ($user->completedWorkouts as $item) {
            array_push($completedWorkouts, $item->workout_id);
        }
        if (!count($completedWorkouts)) {
            array_push($completedWorkouts, 0);
        }
        $workout = $program->workout()->where('id', '>', max($completedWorkouts))->with('videos', 'tasks', 'comments')->first();
        if (!$workout) {
            $workout = $program->workout()->where('id', max($completedWorkouts))->with('videos', 'tasks', 'comments')->first();
        }
        return response()->view('front.user.burnFat', ['program' => $program, 'completedWorkouts' => $completedWorkouts, 'workout' => $workout]);
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

    public function getActivatedAchievements($achievements): array
    {
        $activatedAchievements = [];
        foreach ($achievements as $achievement) {
            array_push($activatedAchievements, $achievement->id);
        }
        return $activatedAchievements;
    }

    public function addComment(StoreCommentRequest $request)
    {
        $input = $request->all();
        $comment = Comment::create($input);
        $comment->workouts()->attach($input['workout_id']);
        return redirect()->route('profile.burnFat', $input['id']);
    }

    public function completeWorkout(Request $request)
    {
        $arr = [];
        $completedWorkouts = Auth::user()->completedWorkouts;
        $input = $request->all();
        foreach ($completedWorkouts as $item) {
            array_push($arr, $item->workout_id);
        }
        if (!in_array($request->get('workout_id'), $arr)) {
            CompletedWorkout::create($input);
            return redirect()->back();
        }

            return redirect()->back()->withErrors(['error' => 'Вы уже завершили эту тренировку!!']);

    }

    public function completeProgram(Request $request)
    {
        $arr = [];
        $completedPrograms = Auth::user()->completedPrograms;
        $input = $request->all();
        foreach ($completedPrograms as $item) {
            array_push($arr, $item->workout_id);
        }
        if (!in_array($request->get('workout_id'), $arr)) {
            CompletedProgram::create($input);
            return redirect()->back();
        }
        return redirect()->back()->withErrors(['error' => 'Вы уже завершили эту программу!!']);

    }

    public function chooseDiet(Request $request)
    {
        $limit = DietRestrictions::find($request->get('limitation'));
        $purpose = PurposeOfNutrition::find($request->get('purpose'));
        $foodCategories = FoodCategory::with('dishes')->get();
        foreach ($foodCategories as $foodCategory){

        }
        $dish = Dish::with('purposeOfNutrition', 'dietRestriction')->get();

    }
}
