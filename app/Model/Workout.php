<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Workout extends Model
{
    protected $guarded = ['id'];


    /**
     * @return BelongsTo
     */
    public function program(): BelongsTo
    {
        return $this->belongsTo('App\Model\Program');
    }

    /**
     * @return MorphToMany
     */
    public function videos(): MorphToMany
    {
        return $this->morphedByMany('App\Model\Video','workoutables');
    }
    /**
     * @return MorphToMany
     */
    public function tasks(): MorphToMany
    {
        return $this->morphedByMany('App\Model\Task','workoutables');
    }
}
