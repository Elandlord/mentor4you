<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerPhoto extends Model
{
    //
    protected $fillable = [
    	'photo_id',
    	'partner_id',
    	'type',
    ];


    public function partners()
    {
    	return $this->hasMany('App\Partner');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
