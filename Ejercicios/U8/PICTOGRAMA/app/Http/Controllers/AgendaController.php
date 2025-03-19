<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use App\Models\Persona;
use App\Models\Agenda;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function listado()
    {
        $arrayImagenes = Imagen::all();
        return view('agenda.listado', compact('arrayImagenes'));
    }

    public function insertar()
    {
        $arrayPersonas = Persona::all();
        $arrayImagenes = Imagen::all();
        return view('agenda.insertar', compact('arrayPersonas', 'arrayImagenes'));
    }

    public function store(Request $request)
    {
        $agenda = new Agenda();
        $agenda->idpersona = $request->input('id');
        $agenda->idimagen = $request->input('imagen');
        $agenda->fecha = $request->input('fecha');
        $agenda->hora = $request->input('hora');
        $agenda->save();
        return redirect('agenda/mostrar');
    }

    public function mostrar(Request $request)
    {
        $arrayPersonas = Persona::all();
        $arrayImagenes = Imagen::all();
        return view('agenda.mostrar', compact('arrayPersonas', 'arrayImagenes'));
    }

    public function show()
    {

        return view('agenda.show');
    }
}
