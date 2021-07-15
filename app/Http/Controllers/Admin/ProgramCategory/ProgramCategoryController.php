<?php

namespace App\Http\Controllers\Admin\ProgramCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProgramCategoryRequest;
use App\Http\Requests\UpdateProgramCategoryRequest;
use App\Model\ProgramCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProgramCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('admin.programCategory.index',['programCategory'=>ProgramCategory::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return response()->view('admin.programCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProgramCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreProgramCategoryRequest $request): RedirectResponse
    {
        $input = $request->all();
        ProgramCategory::create($input);
        return redirect()->route('programCategory.index');
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
        return response()->view('admin.programCategory.edit',['programCategory'=>ProgramCategory::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProgramCategoryRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateProgramCategoryRequest $request, int $id): RedirectResponse
    {
        $input =$request->all();
        $programCategory = ProgramCategory::find($id);
        $programCategory->update($input);
        return redirect()->route('programCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $programCategory = ProgramCategory::find($id);
        $programCategory->delete();
        return response()->json(['success'=>1,'message'=>'programCategory successful deleted']);
    }
}
