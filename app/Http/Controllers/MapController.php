<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
use App\File;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map::where('parent_id', null)->get();

        return view('cms.pages.maps.index', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maps = Map::all();

        return view('cms.pages.maps.create', compact('maps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $parent = $request->input('parent');

        if($parent == 'null'){
            $parent = null;
        }

        $map = new Map;
        $map->name = $name;
        $map->parent_id = $parent;
        $map->save();
        
        return redirect('cms/maps');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentMap = Map::find($id);

        $childrenMaps = Map::where('parent_id', $id)->get();

        $files = File::where('map_id', $id)->get();

        return view('cms.pages.maps.edit', compact('childrenMaps', 'files', 'currentMap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
