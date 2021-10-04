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
use App\Model\FirstStepIcon;
use App\Model\FoodCategory;
use App\Model\Personal;
use App\Model\Program;
use App\Model\ProgramCategory;
use App\Model\ProjectVideo;
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

    public function index()
    {
        $programs = [];
        $myProgramId = [];
        $myPrograms = [];
        $programsCategory = [];
//        $user = User::where('id', Auth::id())->with(['subscriptions.programs.category.programs', 'completedWorkouts.workout', 'completedPrograms'])->first();
//        $programsCategory = $user->subscriptions->map->programs->map->map->map->category->collect()[0];
//        $programs = $user->subscriptions->map->programs->collect()[0];
        $user = User::where('id', Auth::id())->with(['completedWorkouts.workout', 'completedPrograms'])->first();
        $programsCategory = ProgramCategory::with('programs')->get();
//        $programs = $user->subscriptions->map->programs->collect()[0];
        $completedWorkoutsProgram_id = $user->completedWorkouts->map->workout->map->program_id->collect();
        $completedPrograms_id = $user->completedPrograms->map->program_id->collect()->toArray();
        foreach ($completedWorkoutsProgram_id as $key => $id) {
            if (in_array($id, $completedPrograms_id)) {
                $completedWorkoutsProgram_id->forget($key);
            }
        }
        $completedWorkoutsProgram_id = array_values($completedWorkoutsProgram_id->toArray());
        foreach ($completedWorkoutsProgram_id as $id) {
            $myPrograms = $programs->where('id', $id)->collect();
        }
        if ($myPrograms)
            $myProgramId = $myPrograms->pluck('id')->toArray();


        return response()->view('front.user.index', [
            'myProgramId' => $myProgramId,
            'myPrograms' => $myPrograms,
            'programsCategory' => $programsCategory]);
    }

    public function information(): Response
    {
        $personal = Personal::where('user_id', Auth::id())->latest('created_at')->first();
        return response()->view('front.user.information', ['personal' => $personal, 'firstSteps' => FirstStepIcon::all(), 'projectVideo' => $this->youTubeImage(ProjectVideo::first()->link)]);
    }

    public function food(): Response
    {
        $user = User::where('id',Auth::id())->with(['dishes','dietRestriction','purposeOfNutrition'])->first();
        $calories = $user->dishes->reduce(function ($carry,$item){
            return $carry + intval($item->calories);
        },0);
        return response()->view('front.user.food',
            [
                'dietRestrictions' => DietRestrictions::all(),
                'foodCategory' => FoodCategory::with('dishes')->get(),
                'purposeOfNutritions' => PurposeOfNutrition::all(),
                'dietRestriction' => $user->dietRestriction()->first(),
                'purposeOfNutrition'=>$user->purposeOfNutrition()->first(),
                'calories'=>$calories,
                'dishes'=>$user->dishes
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
        $user = User::where('id',Auth::id())->first();
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

        return response()->view('front.user.burnFat', [
            'program' => $program,
            'completedWorkouts' => $completedWorkouts,
            'workout' => $workout,
            'subscription'=>$user->subscriptions()->with('users')->first()]);
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
        $user = User::where('id', Auth::id())->with(['achievements','completedWorkouts'])->first();
        $arr = [];
        $completedWorkouts = $user->completedWorkouts;

        $input = $request->all();
        foreach ($completedWorkouts as $item) {
            array_push($arr, $item->workout_id);
        }

        if (!in_array($request->get('workout_id'), $arr)) {
            CompletedWorkout::create($input);
            $completedWorkouts = $user->completedWorkouts()->get();
            $todayAchievements = $user->completedWorkouts()->whereDate('completed_workouts.created_at', Carbon::today()->toDateString())->get();


            $caloriesBurned = $completedWorkouts->reduce(function ($carry, $item) {
                return $carry + intval($item->workout->calories);
            }, 0);
            if (count($user->achievements)) {
                if (!$user->achievements->contains('id', 2)) {
                    $user->achievements()->attach(2);
                }
                if (!$user->achievements->contains('id', 3) && count($todayAchievements) > 1) {
                    $user->achievements()->attach(3);
                }
                if (!$user->achievements->contains('id', 4) && count($todayAchievements) > 2) {
                    $user->achievements()->attach(4);
                }
                if ($caloriesBurned > 3000) {
                    $user->achievements()->attach(11);
                }
                if ($caloriesBurned > 10000) {
                    $user->achievements()->attach(12);
                }
                if ($caloriesBurned > 50000) {
                    $user->achievements()->attach(13);
                }
            }
            return redirect()->back();
        }

        return redirect()->back()->withErrors(['error' => 'Вы уже завершили эту тренировку!!']);

    }

    public function completeProgram(Request $request)
    {

        $user = User::where('id', Auth::id())->with(['achievements','completedPrograms'])->first();
        $arr = [];
        $completedPrograms = $user->completedPrograms;


        $input = $request->all();
        foreach ($completedPrograms as $item) {
            array_push($arr, $item->program_id);
        }
        if (!in_array($request->get('program_id'), $arr)) {
            CompletedProgram::create($input);
            $completedPrograms = $user->completedPrograms()->get();
            if (count($user->achievements)) {
                if (!$user->achievements->contains('id', 5)) {
                    $user->achievements()->attach(5);
                }
                if (!$user->achievements->contains('id', 6) && count($completedPrograms) > 2 ) {
                    $user->achievements()->attach(6);
                }
                if (!$user->achievements->contains('id', 7) && count($completedPrograms) > 4 ) {
                    $user->achievements()->attach(7);
                }
            }
            return redirect()->back();
        }
        return redirect()->back()->withErrors(['error' => 'Вы уже завершили эту программу!!']);

    }

    public function chooseDiet(Request $request)
    {
        $restriction = DietRestrictions::find($request->get('diet_id'));
        $nutrition = PurposeOfNutrition::find($request->get('purpose_id'));
        $user = User::where('id',Auth::id())->first();
        if($restriction){
            $user->DietRestriction()->detach();
            $user->DietRestriction()->attach($restriction->id);
        }
        if($nutrition){
            $user->PurposeOfNutrition()->detach();
            $user->PurposeOfNutrition()->attach($nutrition->id);
        }
        $foodCategories = FoodCategory::with('dishes')->get();
        foreach ($foodCategories as $foodCategory) {
            foreach ($foodCategory->dishes()->with('DietRestriction', 'PurposeOfNutrition')->get() as $dishKey => $dish) {
                foreach ($dish->PurposeOfNutrition as $purpose) {
                    if($nutrition){
                        if ($purpose->id !== $nutrition->id) {
                            $foodCategory->dishes->forget($dishKey);
                        }
                    }
                }
                foreach ($dish->DietRestriction as $diet) {
                    if($restriction){
                        if ($diet->id === $restriction->id) {
                            $foodCategory->dishes->forget($dishKey);
                        }
                    }
                }
            }
        }
        $calories = $user->dishes->reduce(function ($carry,$item){
            return $carry + intval($item->calories);
        },0);
        return response()->view('front.user.food',
            [
                'dietRestrictions' => DietRestrictions::all(),
                'foodCategory' => $foodCategories,
                'purposeOfNutritions' => PurposeOfNutrition::all(),
                'dietRestriction' => $user->dietRestriction()->first(),
                'purposeOfNutrition'=>$user->purposeOfNutrition()->first(),
                'calories'=>$calories,
                'dishes'=>$user->dishes
            ]);
    }

    public function getCompletedWorkouts(): JsonResponse
    {
        $user = Auth::user();
        $workouts = $user->completedWorkouts()->get();
        return response()->json($workouts);
    }

    /**
     * @param $id
     * @return Response
     */
    public function renew($id): Response
    {
        return response()->view('front.user.renewSubscription', ['subscriptions' => Subscription::all(), 'id' => $id]);
    }
    public function chooseDishes(Request $request){
        $data =  json_decode($request->get('dataArray'),true);
        $user = User::where('id',Auth::id())->with('dishes')->first();
        $user->dishes()->detach();
        foreach ($data as $datum) {
            $user->dishes()->attach($datum['dish']);
        }
        $calories = $user->dishes()->get()->reduce(function ($carry,$item){
           return $carry + intval($item->calories);
        },0);
        return response()->json(['calories'=>$calories]);
    }
}
