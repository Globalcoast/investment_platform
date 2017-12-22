<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    //

    protected $table="profits";

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function capital()
    {
        return $this->belongsTo('App\Capital','capital_id');
    }
}
