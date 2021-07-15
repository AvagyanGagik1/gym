<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Dish extends Model
{
    protected $guarded = ['id'];


    public function category(): BelongsTo
    {
        return $this->belongsTo('App\Model\FoodCategory','food_category_id');
    }

    /**
     * @return MorphToMany
     */
    public function purposeOfNutrition(): MorphToMany
    {
        return $this->morphedByMany('App\Model\PurposeOfNutrition','dishable');
    }

    /**
     * @return MorphToMany
     */
    public function dietRestriction(): MorphToMany
    {
        return $this->morphedByMany('App\Model\DietRestrictions','dishable');
    }
}
