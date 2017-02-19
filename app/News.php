<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'author',
    	'publish_date',
    	'occurence_date'
    ];


    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();
    }

    /////////////////////////////
    // view specific functions //
    /////////////////////////////

    public function getPublishedAtAttribute() {
        $dates = explode('-', $this->publish_date);
        return $dates[2] . '-' . $dates[1] . '-' . $dates[0];
    }
}
