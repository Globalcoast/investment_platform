<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    //


    protected $table="testimonies";

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
