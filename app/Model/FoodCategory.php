<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodCategory extends Model
{
    protected $guarded = ['id'];



    public function dishes(): HasMany
    {
        return $this->hasMany('App\Model\Dish');
    }
}
