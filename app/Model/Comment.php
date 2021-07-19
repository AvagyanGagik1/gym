<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $guarded = ['id'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class,'id','parent_id');
    }
    public function childs(): HasMany
    {
        return $this->hasMany(self::class,'parent_id','id');
    }

    public function workouts(){
        return $this->morphToMany('App\Model\Workout','workoutables');
    }
}
