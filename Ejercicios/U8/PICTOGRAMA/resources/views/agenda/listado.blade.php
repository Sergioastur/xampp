<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VideoClub</title>
</head>
<body>
@section('content')
<h1>Listado de pictogramas</h1>
@php($count = 0;)
<table class="table">
<tr>
@for ($i = 0; $i < count($pictogramas); $i++)
<td>
<img src="{{$pictogramas[$i]->imagen}}" style="height:200px"/>
<h3>{{$pictogramas[$i]->imagen}}</h3>

@stop
</body>
</html>