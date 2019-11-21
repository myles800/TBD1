<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sessie_user extends Model
{
    //
    protected $table = 'sessie_user';
    protected $fillable=['sessie_id','user_id'];

}
