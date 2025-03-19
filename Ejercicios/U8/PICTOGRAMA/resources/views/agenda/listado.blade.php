<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VideoClub</title>

</head>
<body>
@extends('layouts.master')

@section('content')
<h1>Listado de pictogramas</h1>
<table class="table">
    <tr>
        @php($count = 0)
        @foreach ($arrayImagenes as $pictograma)
            <td>
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
@endsection

</body>
</html>