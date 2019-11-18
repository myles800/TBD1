<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessie extends Model
{
    //
    protected $fillable=['photo','title','desc1','desc2','places'];
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
