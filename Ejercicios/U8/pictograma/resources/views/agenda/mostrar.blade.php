<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VideoClub</title>

</head>
<body>
@extends('layouts.master')

@section('content')
<h1>Ver agenda</h1>
<form action="{{ url('/agenda/mostrar') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
    </div>
    <div class="mb-3">
        <label for="id" class="form-label">Persona:</label>
        <select name="id" id="id" class="form-select" required>
            @foreach($arrayPersonas as $persona)
                <option value="{{ $persona->idpersona }}">{{ $persona->nombre }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Mostrar agenda" class="btn btn-primary">
    <a href="{{ url('/agenda') }}" class="btn btn-secondary">Volver al listado</a>
</form>
@endsection

</body>
</html>