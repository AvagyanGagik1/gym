<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use \App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Model\Slider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class SliderController extends Controller
{
   use UploadImage;
    /**
    * @return Response
     **/
    public function index(): Response
    {
        $sliders = Slider::all();
        return response()->view('admin.slider.index',
            ['sliders'=>$sliders]
        );
    }


    /**
     * @return Response
     **/
    public function create(): Response
    {
        return response()->view('admin.slider.create');
    }


    /**
     * @param StoreSliderRequest $request
    * @return Application|RedirectResponse|Response|Redirector
     *
     **/
    public function store(StoreSliderRequest $request)
    {
        $image = $request->file('image');
        $imageSmall = $request->file('image-small');
//        $input['title'] = $request->get('title');
//        $input['long_description'] = $request->get('long_description');
//        $input['short_description'] = $request->get('short_description');
        $input['image'] = $this->uploadSliderImage('/images/slider', $image);
        $input['image_mobile'] = $this->uploadSliderImage('/images/slider/small', $imageSmall);
        $input['image_mobile'] = $this->uploadSliderImage('/images/slider/small', $imageSmall);
        Slider::create($input);
        return redirect('/admin/slider');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id): Response
    {
        return response()->view('admin.slider.edit',
            ['slider'=>Slider::find($id)]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSliderRequest $request
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(UpdateSliderRequest $request, $id)
    {
        $slider =  Slider::find($id);
        $image = $request->file('image');
//        $input['title'] = $request->get('title');
//        $input['short_description'] = $request->get('short_description');
//        $input['long_description'] = $request->get('long_description');
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/slider', $image);
        }
        $slider->update($input);
        return redirect('/admin/slider');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if($this->deleteImage($slider->image)){
            $slider->delete();
        }
        return response('[success]',200);
    }
}
