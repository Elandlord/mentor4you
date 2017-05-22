<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
		'filename',
		'map_id',
	];


	public function getExtension(){
		$extension = explode('.', $this->filename);

		if($extension[1] == 'pdf' || $extension[1] == 'docx' || $extension[1] == 'doc'){
			return $extension[1];
		}else{
			return "unknown";
		}
	}
}
