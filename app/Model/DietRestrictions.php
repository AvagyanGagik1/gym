<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DietRestrictions extends Model
{
    protected $guarded = ['id'];

    public function dishes(){
        return $this->morphToMany('App\Model\Dish','dishable');
    }

}
