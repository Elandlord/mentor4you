<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

	protected $fillable = [
		'path',
	];

	public function partners(){
		return $this->belongsToMany('App\Partner')->withPivot('type')->withTimeStamps();
	}

	public function sections(){
		return $this->belongsToMany('App\Section')->withPivot('type')->withTimeStamps();
	}

	public function news(){
		return $this->belongsToMany('App\News')->withPivot('type')->withTimeStamps();
	}	

	public function youth(){
		return $this->belongsToMany('App\Youth')->withPivot('type')->withTimeStamps();
	}	

	public function mentor(){
		return $this->belongsToMany('App\Mentor')->withPivot('type')->withTimeStamps();
	}			

}
