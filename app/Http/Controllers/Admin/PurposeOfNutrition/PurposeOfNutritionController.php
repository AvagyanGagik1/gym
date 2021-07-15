<?php

namespace App\Http\Controllers\Admin\PurposeOfNutrition;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePurposeOfNutritionRequest;
use App\Http\Requests\UpdatePurposeOfNutritionRequest;
use App\Model\PurposeOfNutrition;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PurposeOfNutritionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('admin.purposeOfNutrition.index',['purposeOfNutrition'=>PurposeOfNutrition::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('admin.purposeOfNutrition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePurposeOfNutritionRequest $request
     * @return RedirectResponse
     */
    public function store(StorePurposeOfNutritionRequest $request): RedirectResponse
    {
        $input = $request->all();
        PurposeOfNutrition::create($input);
        return redirect()->route('purposeOfNutrition.index');
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
     * @param  int  $id
     * @return Response
     */
    public function edit($id): Response
    {
        return response()->view('admin.purposeOfNutrition.edit',['purposeOfNutrition'=>PurposeOfNutrition::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePurposeOfNutritionRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdatePurposeOfNutritionRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $purposeOfNutrition = PurposeOfNutrition::find($id);
        $purposeOfNutrition->update($input);
        return redirect()->route('purposeOfNutrition.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $purposeOfNutrition = PurposeOfNutrition::find($id);
        $purposeOfNutrition->delete();
        return response()->json(['success'=>1,'message'=>'purposeOfNutrition successful deleted']);
    }
}
