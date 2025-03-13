<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CatalogController extends Controller
{
    
    public function getIndex()
    {
        return view('catalog.index', array('arrayPeliculas'=>Movie::all()));
    }

    public function getShow($id)
    {
        return view('catalog.show', array('id'=>$id), array('arrayPeliculas'=>Movie::all()));
    }

    public function getCreate()
    {
        return view('catalog.create', array('arrayPeliculas'=>Movie::all()));
    }

    public function getEdit($id)
    {
        return view('catalog.edit', array('id'=>$id), array('arrayPeliculas'=>Movie::all()));
    }

    public function store(Request $request)
    {
        if (!empty($request->input('title')) && !empty($request->input('year')) && !empty($request->input('director')) && !empty($request->input('poster')) && !empty($request->input('synopsis'))) {
            $p = new Movie;
            $p->title = $request->input('title');
            $p->year = $request->input('year');
            $p->director = $request->input('director');
            $p->poster = $request->input('poster');
            $p->synopsis = $request->input('synopsis');
            $p->rented = false;
            $p->save();
            return redirect('catalog');
        } else {
            return view('catalog.create', array('arrayPeliculas'=>Movie::all()));
        }
        
    }

    public function update(Request $request)
    {
        $id = $request->id;
        /* var_dump($id); die(); */
        $p = Movie::findOrFail($id+1);
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        $p->synopsis = $request->input('synopsis');
        $p->update();
        return redirect('catalog');
    }


    

    
}
