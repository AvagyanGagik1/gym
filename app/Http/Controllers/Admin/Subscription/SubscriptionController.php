<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use App\Model\Subscription;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class SubscriptionController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('admin.subscription.index',['subscriptions'=>Subscription::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return response()->view('admin.subscription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSubscriptionRequest $request
     * @return RedirectResponse
     */
    public function store(StoreSubscriptionRequest $request)
    {
        $input =$request->all();
        $image = $request->file('image');
        $input['duration_program'] = floor($input['duration_subscribe'] /7);
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/subscription',$image);
        }
        Subscription::create($input);
        return redirect()->route('subscription.index');
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
     * @return
     */
    public function edit(int $id): Response
    {
        return response()->view('admin.subscription.edit',['subscription'=>Subscription::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSubscriptionRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateSubscriptionRequest $request, $id): RedirectResponse
    {
        $input =$request->all();
        $image = $request->file('image');
        $subscription = Subscription::find($id);
        if($image){
            $input['image'] = $this->uploadSliderImage('/images/subscription',$image);
            $this->deleteImage($subscription->image);
        }
        $subscription->update($input);
        return redirect()->route('subscription.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        $subscription = Subscription::find($id);
        $this->deleteImage($subscription->image);
        $subscription->delete();
        return response()->json(['success'=>1,'message'=>'element successful deleted']);
    }
}
