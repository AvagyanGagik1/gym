<?php

namespace App\Http\Controllers\Admin\Program;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Model\Program;
use App\Model\ProgramCategory;
use App\Model\Trainer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProgramController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('admin.program.index',['programs'=>Program::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('admin.program.create',['programCategories'=>ProgramCategory::all(),'trainers'=>Trainer::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProgramRequest $request
     * @return RedirectResponse
     */
    public function store(StoreProgramRequest $request): RedirectResponse
    {
        $input = $request->all();
        $input['image'] = $this->uploadSliderImage('/images/program',$request->file('image'));
        Program::create($input);
        return redirect()->route('program.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
    public function edit(int $id): Response
    {
        return response()->view('admin.program.edit',['program'=>Program::find($id),'programCategories'=>ProgramCategory::all(),'trainers'=>Trainer::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProgramRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateProgramRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $program = Program::find($id);
        $image = $request->file('image');
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/program',$image);
            $this->deleteImage($program->image);
        }
        $program->update($input);
        return redirect()->route('program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $program  = Program::find($id);
        $this->deleteImage($program->image);
        $program->delete();
        return response()->json(['success'=>1,'message'=>'program successful deleted']);
    }
}
