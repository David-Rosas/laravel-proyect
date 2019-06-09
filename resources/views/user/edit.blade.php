@extends('layout')

@section('contenido')

<h1> Editar usuario</h1>


<form method="POST" action="{{ route('user.update', $user->id)}}">

    @if(session()->has('info'))
    
    <div class="alert alert-success">
            {{session('info')}}        
    </div>
    
    @endif

	{{method_field('PUT')}}

	{{ csrf_field() }}

    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="nombre"></label>
		Nombre
	
	<input type="text"  id="nombre" class="form-control" name="name" value="{{ $user->name }}">
	{!! $errors->first('name', '<span class=error>:message</span>') !!}
	</div>
    <div class="form-group col-md-6">
    <label for="email"> </label>
    	Email
    
    <input type="text" name="email" id="email" class="form-control" value="{{$user->email }}">
    {!!$errors->first('email', '<span class=error>:message</span>' )!!}
    </div>
       
   <input type="submit" class="btn btn-info" value="Enviar">
</div>
    
@stop

