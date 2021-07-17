<?php

namespace App\Http\Controllers\Admin\Achievement;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;
use App\Model\Achievement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AchievementController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('admin.achievement.index',['achievement'=>Achievement::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return response()->view('admin.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAchievementRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAchievementRequest $request): RedirectResponse
    {
        $input = $request->all();
        $image = $request->file('image');
        $input['image'] = $this->uploadSliderImage('/images/achievement',$image);
        Achievement::create($input);
        return redirect()->route('achievement.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        return response()->view('admin.achievement.edit',['achievement'=>Achievement::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAchievementRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateAchievementRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $achievement = Achievement::find($id);
        $image = $request->file('image');
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/achievement',$image);
            $this->deleteImage($achievement->image);
        }
        $achievement->update($input);
        return redirect()->route('achievement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $achievement = Achievement::find($id);
        $this->deleteImage($achievement);
        $achievement->delete();
        return response()->json(['success'=>1,'message'=>'item successful deleted']);
    }
}
