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


    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'news'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        if($this->photo() != null){
            return "/images/news/{$this->id}/16x9/{$this->photo()->filename}";
        }else{
            return "https://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif";
        }
        
    }

    public function getSquareAttribute()
    {
        if($this->photo() != null){
            return "/images/news/{$this->id}/1x1/{$this->photo()->filename}";
        }else{
            return "https://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif";
        }
        
    }

    /////////////////////////////
    // view specific functions //
    /////////////////////////////

    public function getPublishedAtAttribute() {
        $dates = explode('-', $this->publish_date);
        return $dates[2] . '-' . $dates[1] . '-' . $dates[0];
    }
}
