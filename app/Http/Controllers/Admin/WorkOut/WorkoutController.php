<?php

namespace App\Http\Controllers\Admin\WorkOut;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkoutRequest;
use App\Http\Requests\UpdateWorkoutRequest;
use App\Model\Program;
use App\Model\SubTask;
use App\Model\Task;
use App\Model\Video;
use App\Model\Workout;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $workouts = Workout::paginate(10);
        foreach ($workouts as $workout) {
            $workout->program;
            $workout->videos->first();
        }
        return response()->view('admin.workout.index', ['workouts' => $workouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('admin.workout.create', ['programs' => Program::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreWorkoutRequest $request
     * @return JsonResponse
     */
    public function store(StoreWorkoutRequest $request): JsonResponse
    {
        $input = $request->all();
        $tasks = json_decode($request->get('tasks'));
        $videoLinks = $request->get('link');
        $workOut = Workout::create($input);
        $this->saveVideos($videoLinks,$workOut);
        $this->saveTasks($tasks,$workOut);
        return response()->json(['success'=>1,'message'=>'workout created successful']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id): Response
    {
        $workout = Workout::find($id);
        $workout->tasks;
        $workout->wideos;
        foreach ($workout->tasks as $task){
            $task->subtasks;
        }
        return response()->view('admin.workout.edit',['workout'=>$workout,'programs'=>Program::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateWorkoutRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateWorkoutRequest $request, int $id): JsonResponse
    {
        $workout = Workout::find($id);
        $input = $request->all();
        $tasks = json_decode($request->get('tasks'));
        $videoLinks = $request->get('link');
        $workout->update($input);
        foreach ($workout->tasks as $ta){
            $ta->delete();
        }
        foreach ($workout->viedos as $video){
            $video->delete();
        }
        $workout->videos()->detach();
        $workout->tasks()->detach();
        $this->saveVideos($videoLinks,$workout);
        $this->saveTasks($tasks,$workout);
        return response()->json(['success'=>1,'message'=>'workout created successful']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $workout = Workout::find($id);
        foreach ($workout->tasks as $task){
            $task->delete();
        }
        foreach ($workout->videos as $video){
            $video->delete();
        }
        $workout->videos()->detach();
        $workout->tasks()->detach();
        $workout->delete();
        return response()->json(['success'=>1,'message'=>'workout successful deleted']);
    }

    /**
     * @param array $tasks
     * @param Workout $workout
     */
    public function saveTasks( array $tasks ,Workout $workout){
        foreach ($tasks as $item){
            $task = Task::create(['name_ru'=>$item->name_ru,'name_en'=>$item->name_en,'name_blr'=>$item->name_blr]);
            $workout->tasks()->attach($task);
            $tmp =[];
            foreach ($item->subtasks as $key=>$subtask){
                $tmp['task_id'] = $task->id;
                if($subtask->lang === 'ru'){
                    $tmp['description_ru'] = $subtask->value;
                }
                if($subtask->lang === 'en'){
                    $tmp['description_en'] = $subtask->value;
                }
                if($subtask->lang === 'blr'){
                    $tmp['description_blr'] = $subtask->value;
                }
                if(($key+1) % 3 === 0 ){
                    SubTask::create($tmp);
                }
            }
        }
    }

    /**
     * @param array $videoLinks
     * @param Workout $workout
     */
    public function saveVideos(array $videoLinks,Workout $workout){
        foreach ($videoLinks as $i){
            $video = Video::create(['link'=>$i,'image'=>'/images']);
            $workout->videos()->attach([$video->id]);
        }
    }
}
