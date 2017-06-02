<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\Classes\Files;
use File;


class Map extends Model
{
    protected $fillable = [
		'name',
		'parent_id',
	];

  public function files() {

    return collect(Storage::files($this->id))->map(function($file) {
      return new Files($file, $this);
    });
  }

  public function parent() 
  {
      return static::where('id', $this->parent_id)->first();
  }

  public function getParentDirectory()
  {

  }

  public function deleteFiles() 
  { 
      $directory = Storage::url($this->id);
       File::cleanDirectory($directory);
  }


  public function children() 
  {
      return Map::where('parent_id', $this->id)->get();
  }

  public function hasChildren()
  {
    return $this->children()->count() != 0;
  }

  public function startDelete()
  {
      $children = $this->children();

      foreach($children as $child) {
          $this->deleteChildren($child);
          $this->delete();
      } 

      
  }

  public function deleteChildren($child) 
  { 
    if(!$child->hasChildren()) {
      $child->delete();
      return;
    }

    $children = $child->children();
    

      foreach($children as $child) {
          $this->deleteChildren($child);
      } 


  }

}
