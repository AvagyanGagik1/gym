<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Model\Comment;
use App\Model\Program;
use App\Model\Workout;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::paginate(10);
        foreach ($comments as $comment){
            $comment->workouts =  $comment->workouts->first();
        }
        return response()->view('admin.comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.comments.create',
            [
                'users' => User::where('is_admin', 0)->get(),
                'comments' => Comment::all(),
                'workouts' => Workout::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        $input = $request->all();
        $input['parent_id'] = 1;
        $comment = Comment::create($input);
        $comment->workouts()->attach($input['workout_id']);
        return $comment;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->workouts()->detach();
        $comment->delete();
        return response()->json(['successful deleted']);
    }


    public function changeStatus(Request $request,$id){
        $comment = Comment::find($id);
        $comment->approved = $request->get('approved');
        $comment->save();
        return response()->json(['success' => 1, 'message'=>'successful changed']);
    }
}
