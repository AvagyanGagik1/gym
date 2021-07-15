<?php

namespace App\Http\Controllers\Admin\Dish;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use App\Model\DietRestrictions;
use App\Model\Dish;
use App\Model\FoodCategory;
use App\Model\PurposeOfNutrition;
use App\Model\Workout;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DishController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('admin.dish.index',[
            'dishes'=>Dish::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('admin.dish.create',[
            'foodCategory'=>FoodCategory::all(),
            'diet'=>DietRestrictions::all(),
            'purpose'=>PurposeOfNutrition::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDishRequest $request
     * @return RedirectResponse
     */
    public function store(StoreDishRequest $request): RedirectResponse
    {
        $input = $request->all();
        $image = $request->file('image');
        $input['image'] = $this->imageResizeFit('/images/dish', $image);
        $dish = Dish::create($input);
        $dietRestriction = $request->get('dietRestriction');
        $this->attachDietRestriction($dish,$dietRestriction);
        $purposeOfNutrition = $request->get('purposeOfNutrition');
        $this->attachPurposeOfNutrition($dish,$purposeOfNutrition);
        return redirect()->route('dish.index');
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
        return response()->view('admin.dish.edit',['dish'=>Dish::find($id),'foodCategory'=>FoodCategory::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDishRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateDishRequest $request, int $id)
    {
        $input = $request->all();
        $image = $request->file('image');
        $dish = Dish::find($id);
        if($image){
            $this->deleteImage($dish->image);
            $input['image'] = $this->imageResizeFit('/images/dish', $image);
        }
        $dish->update($input);
        return redirect()->route('dish.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $dish = Dish::find($id);
        $this->deleteImage($dish->image);
        $dish->delete();
        return response()->json(['success'=>1,'message'=>'item deleted successful']);
    }
    public function attachDietRestriction(Dish $dish,array $items){
        foreach ($items as $diet){
            $dish->dietRestriction()->attach($diet);
        }
    }
    public function attachPurposeOfNutrition(Dish $dish,array $items){
        foreach ($items as $purpose){
            $dish->purposeOfNutrition()->attach($purpose);
        }

    }
}
