<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class AgendaController extends Controller
{
    public function listado()
    {
        $arrayImagenes = Imagen::all();
        return view('listado', compact('arrayImagenes'));
    }
}
