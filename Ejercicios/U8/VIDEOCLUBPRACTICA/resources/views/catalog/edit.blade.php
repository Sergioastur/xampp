<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VideoClub</title>
</head>
<body>
@extends('layouts.master')
@section('content')<div class="row">
<div class="col-sm-8">
<h1>Editar película {{$id}}</h1>
<form action="{{route('catalog.edit.update')}}" method="post">
@csrf
@method('PUT')
<input type="hidden" name="id" value="{{$id}}">
<div class="form-group">
<label for="title">Título</label>
<input type="text" class="form-control" id="title" name="title" value="{{$arrayPeliculas[$id]['title']}}">
</div>
<div class="form-group">
<label for="year">Año</label>
<input type="text" class="form-control" id="year" name="year" value="{{$arrayPeliculas[$id]['year']}}">
</div>
<div class="form-group">
<label for="director">Director</label>
<input type="text" class="form-control" id="director" name="director" value="{{$arrayPeliculas[$id]['director']}}">
</div>
<div class="form-group">
<label for="poster">Poster</label>
<input type="text" class="form-control" id="poster" name="poster" value="{{$arrayPeliculas[$id]['poster']}}">
</div>
<div class="form-group">
<label for="synopsis">Resumen</label>
<textarea class="form-control" id="synopsis" name="synopsis">{{$arrayPeliculas[$id]['synopsis']}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Editar película</button>
@stop
</body>
</html>