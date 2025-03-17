<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CatalogController extends Controller
{
    
    public function getIndex()
    {
        $arrayPeliculas = Movie::all();
        
        return view('catalog.index', compact('arrayPeliculas'));
        
    }

    public function getShow($id)
    {
        $arrayPeliculas = Movie::all();
        $pelicula = $arrayPeliculas->find($id);
        return view('catalog.show', compact('pelicula'));
    }

    public function getCreate()
    {
        $arrayPeliculas = Movie::all();
        return view('catalog.create', compact('arrayPeliculas'));
    }

    public function getEdit($id)
    {
        $arrayPeliculas = Movie::all();
        $pelicula = $arrayPeliculas->findOrFail($id);
        
        return view('catalog.edit', array('id'=>$id), compact('pelicula'));
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
        $id = (int) $request->input('id');
        
        /* dd($request->all()); */
        /* var_dump($id); die(); */
        $p = Movie::findOrFail($id);
        /* var_dump($p); die(); */
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        $p->synopsis = $request->input('synopsis');
        $p->save();
        return redirect('catalog');
    }


    

    
}
