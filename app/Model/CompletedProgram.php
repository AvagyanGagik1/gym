<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompletedProgram extends Model
{
    protected $guarded = ['id'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function workout(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Model\Workout');
    }
}
