<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VideoClub</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-sm-4">
<img src="{{$pelicula->poster}}" style="height:200px"/>
</div>
<div class="col-sm-8">
<h1>{{$pelicula->title}}</h1>
<h3>Año: {{$pelicula->year}}</h3>
<h4>Director: {{$pelicula->director}}</h4>
<p><strong>Resumen:</strong> {{$pelicula->synopsis}}</p>
<p><strong>Estado:</strong>
@if($pelicula->rented)
Película actualmente alquilada
<br>
<a href="#" class="btn btn-danger">Devolver película</a>
@else
Película disponible
<br>
<a href="#" class="btn btn-primary">Alquilar película</a>
@endif
<a href="{{ url('/catalog/edit/' . $pelicula->id ) }}" class="btn btn-warning">Editar película</a>
<a href="{{ url('/catalog') }}" class="btn btn-outline-secondary">Volver al listado</a>
</p>

</div>
</div>
@stop
</body>
</html>