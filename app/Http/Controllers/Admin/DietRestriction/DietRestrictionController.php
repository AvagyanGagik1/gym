<?php

namespace App\Http\Controllers\Admin\DietRestriction;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDietRestrictionRequest;
use App\Http\Requests\UpdateDietRestrictionRequest;
use App\Model\DietRestrictions;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DietRestrictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('admin.dietRestriction.index',['diets'=>DietRestrictions::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return response()->view('admin.dietRestriction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDietRestrictionRequest $request
     * @return RedirectResponse
     */
    public function store(StoreDietRestrictionRequest $request): RedirectResponse
    {
        $input = $request->all();
        DietRestrictions::create($input);
        return redirect()->route('dietRestriction.index');

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
    public function edit($id)
    {
        return response()->view('admin.dietRestriction.edit',['dietRestriction'=>DietRestrictions::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDietRestrictionRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateDietRestrictionRequest $request, int $id): RedirectResponse
    {
        $input = $request->all();
        $diet = DietRestrictions::find($id);
        $diet->update($input);
        return redirect()->route('dietRestriction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $diet = DietRestrictions::find($id);
        $diet->delete();
        return response()->json(['success'=>1,'message'=>'diet restriction successful deleted']);
    }
}
