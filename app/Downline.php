<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downline extends Model
{
    //

    protected $table="downlines";

    public function referral(){

    	return $this->belongsTo('App\User', 'referral_id');
    }


     public function referee(){

    	return $this->belongsTo('App\User', 'referee_id');
    }
}
