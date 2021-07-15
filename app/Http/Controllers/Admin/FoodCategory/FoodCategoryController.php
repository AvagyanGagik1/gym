<?php

namespace App\Http\Controllers\Admin\FoodCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFoodCategoryRequest;
use App\Http\Requests\UpdateFoodCategoryRequest;
use App\Model\FoodCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class FoodCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('admin.foodCategory.index',
            [
                'foodCategory'=>FoodCategory::paginate(10),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return response()->view('admin.foodCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFoodCategoryRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(StoreFoodCategoryRequest $request)
    {
        $input = $request->all();
        FoodCategory::create($input);
        return redirect('/admin/foodCategory');
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
        return response()->view('admin.foodCategory.edit',
            [
               'foodCategory'=>FoodCategory::find($id),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFoodCategoryRequest $request
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(UpdateFoodCategoryRequest $request, int $id)
    {
        $input = $request->all();
        $foodCategory = FoodCategory::find($id);
        $foodCategory->update($input);
        return redirect('/admin/foodCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $foodCategory = FoodCategory::find($id);
        $foodCategory->delete();
        return response()->json(['success'=>1,'item deleted']);
    }
}
