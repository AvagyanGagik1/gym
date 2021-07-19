<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompletedWorkout extends Model
{
    protected $guarded = ['id'];


    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
