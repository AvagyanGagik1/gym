<?php

namespace App\Http\Controllers\Admin\ClientComment;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreClientCommentRequest;
use App\Http\Requests\UpdateClientCommentRequest;
use App\Model\ClientComment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ClientCommentController extends Controller
{
    use UploadImage;

    public function construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('admin.clientComment.index',['clientComment'=>ClientComment::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('admin.clientComment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClientCommentRequest $request
     * @return RedirectResponse
     */
    public function store(StoreClientCommentRequest $request): RedirectResponse
    {
        $input = $request->all();
        $image = $request->file('image');
        $input['image'] = $this->uploadSliderImage('/images/clientComment',$image);
        ClientComment::create($input);
        return redirect()->route('clientComment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id): Response
    {
        return \response($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        return response()->view('admin.clientComment.edit',['clientComment'=>ClientComment::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClientCommentRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateClientCommentRequest $request, $id): RedirectResponse
    {
        $input = $request->all();
        $achievement = ClientComment::find($id);
        $image = $request->file('image');
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/clientComment',$image);
            $this->deleteImage($achievement->image);
        }
        $achievement->update($input);
        return redirect()->route('clientComment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $clientComment = ClientComment::find($id);
        $this->deleteImage($clientComment);
        $clientComment->delete();
        return response()->json(['success'=>1,'message'=>'item successful deleted']);
    }
}
