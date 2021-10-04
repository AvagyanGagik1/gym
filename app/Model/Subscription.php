<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Subscription extends Model
{
    protected $guarded = ['id'];

//    public function programs(): HasMany
//    {
//        return $this->hasMany('App\Model\Program');
//    }

    public function users()
    {
        return $this->morphToMany('App\User','userable');
    }

}
