<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
    	'name',
    	'description',
    	'date_started'
    ];

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'partner'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        if($this->photo() != null){
            return "/images/partner/{$this->id}/16x9/{$this->photo()->filename}";
        }else{
            return "https://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif";
        }
    }

}
