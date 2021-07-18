<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\helper\UploadImage;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Model\Personal;
use App\Model\Subscription;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view('admin.user.index',['users'=>User::where('is_admin',0)->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.user.create',['subscriptions'=>Subscription::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        $input = $request->all();
         $image = $request->file('avatar');
        if($image){
            $input['avatar'] = $this->uploadSliderImage('/images/user',$image);
        }
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        Personal::create(['age'=>$input['age'],'height'=>$input['height'],'weight'=>$input['weight'],'user_id'=>$user->id]);
        $user->subscriptions()->attach($input['subscription_id']);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return response()->view('admin.user.edit',['user'=>$user,'personal'=> count($user->personals)?$user->personals[0]:['weight'=>0,'height'=>0,'age'=>0],['subscriptions'=>Subscription::all()]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        $input = $request->all();
        $image = $request->file('avatar');
        $user = User::find($id);
        if($image){
            $input['avatar'] = $this->uploadSliderImage('/images/user',$image);
            $this->deleteImage($user->avatar);
        }
//        $input['password'] = Hash::make($input['password']);
        $user->update($input);
        $user->personals[0]->update(['age'=>$input['age'],'height'=>$input['height'],'weight'=>$input['weight']]);
        $user->subscriptions()->detach();
        $user->subscriptions()->attach($input['subscription_id']);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $this->deleteImage($user->avatar);
        $user->delete();
        return response()->json(['success'=>1,'message'=>'user successful deleted']);
    }
}
