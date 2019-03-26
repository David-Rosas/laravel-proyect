@extends('layout')

@section('contenido')

<h2>El mensaje</h2>
{{$message->nombre}}
{{$message->email}}
{{$message->mensaje}}


@stop