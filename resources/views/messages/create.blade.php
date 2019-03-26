@extends('layout')

@section('contenido')

<h1> Contactos</h1>
@if(session()->has('info'))
<h3> {{ session('info') }} </h3>
@else
<h2>Escribeme</h2>


<form method="POST" action="{{ route('messages.store')}}">

	{{ csrf_field() }}
    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="nombre"></label>
	Nombre
	<input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
	{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
	    </div>
	<br>
     <div class="form-group col-md-6">
    <label for="email" id="email"></label>
    	Email
    
    <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
    {!!$errors->first('email', '<span class=error>:message</span>' )!!}
     
     </div>
     <br>
     <div class="form-group col-md-12">
    <label for="mensaje"> </label>
    	Mensaje
    
    <textarea name="mensaje" id="mensaje" class="form-control">{{old('mensaje')}}</textarea>
    {!!$errors->first('mensaje', '<span class=error>:message</span>' )!!}
     
      </div>
     <br>
   <input type="submit" class="btn btn-primary" value="Enviar">
</div>

</form>

@endif

@stop