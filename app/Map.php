<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\Classes\Files;

class Map extends Model
{
    protected $fillable = [
		'name',
		'parent_id',
	];

  public function files() {

    return collect(Storage::files($this->name))->map(function($file) {
      return new Files($file, $this);
    });
  }

}
