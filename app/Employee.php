<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';
    public $timestamps = false;

    public function date(){
        return $this->hasMany(Date::class);
    }
}
