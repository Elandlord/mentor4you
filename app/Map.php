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


  public function hasParent()
  {
    return $this->parent() != null;
  }

  public function deleteFiles() 
  { 
      $directory = public_path('storage\\' . $this->id . '\\');

      File::cleanDirectory($directory);
      File::deleteDirectory($directory);
  }


  public function children() 
  {
      return Map::where('parent_id', $this->id)->get();
  }

  public function hasChildren()
  {
    return $this->children()->count() != 0;
  }

  public function deleteChildren($map)
  {
      
      if(!$map->hasChildren()) {
        $map->delete();
        return;
      } else {


        $children = $map->children();
        

        foreach($children as $childMap) {
            $this->deleteChildren($childMap);
        } 


        $map->delete();
        return;
      }
      return;
  }


}
