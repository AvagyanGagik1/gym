<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    protected $guarded = ['id'];


    public function programs(){
        return $this->hasMany('App\Model\Program');
    }

}
