<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    //
    protected $table='capitals';

    public function profit()
    {
        return $this->hasMany('App\Profit','capital_id');
    }

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    public function receivingwallet(){
    	return $this->hasOne('App\Adminwallets','id','receiving_wallet_id');  //foreign key, local key
    }


    public function receiving(){
        return $this->hasOne('App\ReceivingDetail','transaction_id','transaction_id');  //foreign key, local key
    }

   
}
