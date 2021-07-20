<?php

namespace App\Providers;

use App\Model\CompletedProgram;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.front.profile','front.user.subscribe'],function ($view){
            $user =Auth::user();
            $subscriptions = $user->subscriptions;
            foreach ($subscriptions as $subscription){
                $subscription->dayLeft = intval($subscription->duration_subscribe) - Carbon::parse($subscription->created_at)->diffInDays();
            }
            $view->with('profileSubscription',$subscriptions);
        });
        View::composer(['layouts.front.profile'],function ($view){
            $user =Auth::user();
            $completedPrograms = $user->completedWorkouts;
            $completedWorkouts =$user->completedWorkouts()->with('workout')->get();
            $view->with(['completedWorkouts'=>$completedWorkouts,'completedPrograms'=>$completedPrograms]);
        });
    }
}
