<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','terms','gender','is_admin','target','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return HasMany
     */
    public function personals(): HasMany
    {
        return $this->hasMany('App\Model\Personal');
    }

    /**
     * @return MorphToMany
     */
    public function subscriptions(): MorphToMany
    {
        return $this->morphedByMany('App\Model\Subscription','userable');
    }

    /**
     * @return MorphToMany
     */
    public function achievements(): MorphToMany
    {
        return $this->morphedByMany('App\Model\Achievement','userable');
    }

    /**
     * @return HasMany
     */
    public function completedWorkouts(): HasMany
    {
        return $this->hasMany('App\Model\CompletedWorkout');
    }
    public function completedPrograms(): HasMany
    {
        return $this->hasMany('App\Model\CompletedProgram');
    }
}
