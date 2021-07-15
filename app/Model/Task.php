<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['id'];


    public function subtasks(){
        return $this->hasMany('App\Model\SubTask');
    }
}
