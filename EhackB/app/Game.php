<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $fillable = ['name', 'photo', 'date', 'location'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
