<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{

    protected $fillable = [
    	'first_name',
    	'last_name',
    	'description',
    	'date_of_birth',
    ];

    protected $appends = [
      'thumbnail',
      'type',
    ];


    public function getTypeAttribute()
    {
        return 'mentor';
    }

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'mentor'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        if($this->photo() != null){
            return "/images/mentor/{$this->id}/16x9/{$this->photo()->filename}";
        }else{
            return "https://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif";
        }
    }

}
