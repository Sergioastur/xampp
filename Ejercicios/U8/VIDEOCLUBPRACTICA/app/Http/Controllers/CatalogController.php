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

    
}
