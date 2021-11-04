<?php

namespace App\Providers;

use App\Model\CompletedProgram;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;


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
        Schema::defaultStringLength(191);
        View::composer(['layouts.front.profile', 'front.user.subscribe'], function ($view) {
            $user = User::where('id', Auth::id())->first();
            $subscriptions = $user->subscriptions;
            $dayLeft = 0;
            $allDays = 0;
            foreach ($subscriptions as $subscription) {
                $startDate = Carbon::parse($user->date_left)->subDays($subscription->duration_subscribe);
                $endDate = Carbon::parse($user->date_left);
                if (Carbon::now()->between($startDate, $endDate)) {
                    $dayLeft += Carbon::parse($user->date_left)->diffInDays();
                    $allDays += $subscription->duration_subscribe;
                }
                $subscription->dayLeft = $dayLeft;
            }
            if ($dayLeft <= 0) {
                $user->subscriptions()->detach();
                $user->date_left = null;
                $user->save();
            }
            $view->with(['profileSubscription' => $subscriptions, 'allDays' => $allDays, 'dayLeft' => $dayLeft]);
        });
        View::composer(['layouts.front.profile'], function ($view) {
            $user = Auth::user();
            $completedPrograms = $user->completedWorkouts;
            $completedWorkouts = $user->completedWorkouts()->with('workout')->get();
            $view->with(['completedWorkouts' => $completedWorkouts, 'completedPrograms' => $completedPrograms]);
        });
    }
}
