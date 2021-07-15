<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Model\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('admin.news.index',['news'=>News::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNewsRequest $request
     * @return RedirectResponse
     */
    public function store(StoreNewsRequest $request): RedirectResponse
    {
        $input = $request->all();
        $image = $request->file('image');
        $input['image'] = $this->uploadSliderImage('/images/news',$image);
        News::create($input);
        return redirect()->route('news.index');
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
        return response()->view('admin.news.edit',['new'=>News::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNewsRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateNewsRequest $request, int $id): RedirectResponse
    {
        $image = $request->file('image');
        $input = $request->all();
        $new = News::find($id);
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/news',$image);
            $this->deleteImage($new->image);
        }
        $new->update($input);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        $new = News::find($id);
        $this->deleteImage($new->image);
        $new->delete();
        return response()->json(['success'=>1,'message'=>'item deleted']);
    }
}
