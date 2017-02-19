<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Models

use App\Page;
use App\Classes\Template;
use App\Classes\FileHelper;

class Section extends Model
{
    private $positions = [

    ];
    protected $fillable = [
    	'title',
    	'body',
    	'page_id',
    	'page_position',
    ];

    public static function byPageName($pageName)
    {
        $page = Page::where('name', $pageName)->first();
        $sections = $page->sections;

        return Section::setPagePositions($sections);
    }

    public static function getAllTemplates()
    {
        $dir = '/app/Templates/Section';
        $templates = FileHelper::getFilesFromDirectory($dir)
        ->getFiles()
        ->map(function($file){
            return new Template($file);
        });

        return collect($templates);
    }


    public function render($type, $position, $availableSections){

        if($type == 'title') {
            echo (isset($availableSections[$position])) ? $availableSections[$position]->title : "";
        } else if($type == 'body'){
            echo isset($availableSections[$position]) ? $availableSections[$position]->body : "";
        } else if($type == 'photo') {
            echo (isset($availableSections[$position]) && $availableSections[$position]->photos != null ) ? $availableSections[$position]->photos->first()['path'] : "";
        }
    }

    public function photo() {
        return Photo::where([
            ['model_id', $this->id],
            ['type', 'section'],
        ])->first();
    }

    public function getThumbnailAttribute()
    {

        if($this->photo() != null){
            return "/images/section/{$this->id}/16x9/{$this->photo()->filename}";
        }else{
            return "https://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif";
        }
    }


    /**
     * Description: create an array of sections where the order is based on their chosen pagePosition ( this is set in the cms )
     * @param type $sections
     * @return type array of sections
     */
    public static function setPagePositions($sections)
    {
        $sectionsNew = [];

        foreach ( $sections as $indexOfSection => $section )
        {
            $sectionsNew[ $section->page_position ] = $sections[ $indexOfSection ];
        }

        return $sectionsNew;

    }


	public function page()
	{
		return $this->belongsTo('App\Page');
	}

}
