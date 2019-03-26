@extends('layout')

@section('contenido')

<h1>saludos he <?php echo $nombre; ?></h1>
<h1>saludos para {{ $nombre }}</h1>
{!!$html!!}
@forelse($array as $consola)

<li>{{$consola}}</li>
@empty

<h1>vacio</h1>
@endforelse

@stop