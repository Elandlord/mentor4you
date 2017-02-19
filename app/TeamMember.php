<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'description',
    	'role',
    ];

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'teamMember'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {
        if($this->photo() != null){
            return "/images/teamMember/{$this->id}/1x1/{$this->photo()->filename}";
        }else{
            return "https://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif";
        }
    }
}
