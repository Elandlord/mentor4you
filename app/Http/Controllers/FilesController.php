<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// models
use App\Map;
use App\File;

class FilesController extends Controller
{
    public function jongereFolder(){

    	$file= public_path(). "/files/mentor-zoeken.pdf";

    	$headers = array(
              'Content-Type: application/pdf',
            );

    	return response()->download($file, 'Folder - ik zoek een mentor.pdf', $headers);
    }

    public function mentorFolder(){

    	$file= public_path(). "/files/mentor-worden.pdf";

    	$headers = array(
              'Content-Type: application/pdf',
            );

    	return response()->download($file, 'Folder - ik wil mentor worden.pdf', $headers);
    }

    public function store(Request $request) {
        $file = $request->file;
        $map = Map::find($request->get('mapId'));

        $contents = file_get_contents($file->getPathname() );
        Storage::put($map->name . '/' . $file->getClientOriginalName(), $contents );
        return response()->json(['succeedd' => 'ja gelukt'], 200);
    }

    public function destroy(Request $request){

        $map = Map::find($request->input('map_id'));
        Storage::delete($map->name . '/' . $request->input('filename'));
        return back();
    }
}
