<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VideoClub</title>

</head>
<body>
@extends('layouts.master')

@section('content')
<h1>Añadir datos agenda</h1>
<form action="{{ url('/agenda/insertar') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
    </div>
    <div class="mb-3">
        <label for="hora" class="form-label">Hora:</label>
        <input type="time" name="hora" id="hora" class="form-control" value="<?php echo date('H:s'); ?>" required>
    </div>
    <div class="mb-3">
        <label for="id" class="form-label">Persona:</label>
        <select name="id" id="id" class="form-select" required>
            @foreach($arrayPersonas as $persona)
                <option value="{{ $persona->idpersona }}">{{ $persona->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <h4>Seleccionar una imagen</h4>
        <table border='5px'>
            <tr>
                @php($count = 0)
                @foreach ($arrayImagenes as $pictograma)
                    <td style="padding:10px; border:1px solid black">
                        <input type="radio" name="imagen" value="{{ $pictograma->idimagen }}" required>
                        <img src="{{ asset($pictograma->imagen) }}" style="height:200px"/>
                        <h3>{{ $pictograma->imagen }}</h3>
                    </td>
                    @php($count++)
                    @if ($count == 4)
                        </tr><tr>
                        @php($count = 0)
                    @endif
                @endforeach
            </tr>
        </table>
    </div>
    
    <button type="submit" class="btn btn-primary">Insertar</button>
    <a href="{{ url('/agenda') }}" class="btn btn-secondary">Volver al listado</a>
</form>
@endsection

</body>
</html>