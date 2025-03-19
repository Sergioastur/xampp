<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VideoClub</title>
</head>
<body>
@extends('layouts.master')

@section('content')
<div class="container">
    @php
    $fecha = request('fecha');
    $idUsu = request('id');
    $agendaItems = DB::table('agenda')->where('idpersona', $idUsu)->where('fecha', $fecha)->get();
@endphp

<h1>Agenda del día</h1>
<table border="5px">
    <tr>
        @foreach ($agendaItems as $index => $agenda)
            @php
                $imagen = DB::table('imagenes')->where('idimagen', $agenda->idimagen)->first();
            @endphp
            <td>
                <img style="display: flex;" width="100px" src="../../public/{{ $imagen->imagen }}">
                <span>{{ $imagen->imagen }}</span>
                <span> {{ $agenda->hora }}</span>
            </td>
            @if (($index + 1) % 2 == 0)
                </tr><tr>
            @endif
        @endforeach
    </tr>
</table>

</div>
@endsection


</body>
</html>