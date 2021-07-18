<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    protected $guarded = ['id'];



    public function category(): BelongsTo
    {
        return $this->belongsTo('App\Model\ProgramCategory','program_category_id');
    }

    public function trainer(): BelongsTo
    {
        return $this->belongsTo('App\Model\Trainer','trainer_id');
    }
    public function subscribe(): BelongsTo
    {
        return $this->belongsTo('App\Model\Subscription','subscription_id');
    }
    public function workout(){
        return $this->hasMany('App\Model\Workout');
    }

}
