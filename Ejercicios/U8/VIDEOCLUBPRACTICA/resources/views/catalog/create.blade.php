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
<h1>Nueva película</h1>
<form action="{{route('catalog.store')}}" method="post">
@csrf
<div class="form-group">
<label for="title">Título</label>
<input type="text" class="form-control" id="title" name="title">
</div>
<div class="form-group">
<label for="year">Año</label>
<input type="text" class="form-control" id="year" name="year">
</div>
<div class="form-group">
<label for="director">Director</label>
<input type="text" class="form-control" id="director" name="director">
</div>
<div class="form-group">
<label for="poster">Poster</label>
<input type="text" class="form-control" id="poster" name="poster">
</div>
<div class="form-group">
<label for="synopsis">Resumen</label>
<textarea class="form-control" id="synopsis" name="synopsis"></textarea>
</div>
<button type="submit" class="btn btn-primary">Crear película</button>
</form>
</div>
</div>
@stop
</body>
</html>