<?php

namespace App\Http\Controllers\Admin\Trainer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreTrainerRequest;
use App\Http\Requests\UpdateTrainerRequest;
use App\Model\Trainer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TrainerController extends Controller
{
    use UploadImage;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('admin.trainer.index', ['trainers' => Trainer::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('admin.trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTrainerRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTrainerRequest $request): RedirectResponse
    {
        $input = $request->all();
        $input['image'] = $this->uploadSliderImage('/images/trainers', $request->file('image'));
        Trainer::create($input);
        return redirect()->route('trainer.index');
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
    public function edit($id)
    {
        return response()->view('admin.trainer.edit', ['trainer' => Trainer::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTrainerRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateTrainerRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $trainer = Trainer::find($id);
        $image = $request->file('image');
        if ($image) {
            $input['image'] = $this->uploadSliderImage('/images/slider', $image);
            $this->deleteImage($trainer->image);
        }
        $trainer->update($input);
        return redirect()->route('trainer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $trainer = Trainer::find($id);
        $this->deleteImage($trainer->image);
        $trainer->delete();
        return response()->json(['success' => 1, 'message' => 'trainer was successful deleted']);
    }
}
