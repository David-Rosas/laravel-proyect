@extends('layout')

@section('contenido')

<h1>Editar</h1>
{{$message->nombre}}

<form method="POST" action="{{ route('messages.update', $message->id)}}">

	{{method_field('PUT')}}

	{{ csrf_field() }}

    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="nombre"></label>
		Nombre
	
	<input type="text"  id="nombre" class="form-control" name="nombre" value="{{ $message->nombre }}">
	{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
	</div>
    <div class="form-group col-md-6">
    <label for="email"> </label>
    	Email
    
    <input type="text" name="email" id="email" class="form-control" value="{{$message->email }}">
    {!!$errors->first('email', '<span class=error>:message</span>' )!!}
    </div>
    
      <div class="form-group col-md-12">
    <label for="mensaje"></label>
    	Mensaje
    
    <textarea name="mensaje" id="mensaje" class="form-control" >{{ $message->mensaje }}</textarea>
    {!!$errors->first('mensaje', '<span class=error>:message</span>' )!!}
     
    
 </div>
   <input type="submit" class="btn btn-info" value="Enviar">
</div>



@stop