@extends('layout')

@section('contenido')

<h1>Login</h1>

<form method="POST" action="/login" class="form-inline" >
	{!!csrf_field()!!}
	<div class="form-group mb-2">
	<input class="form-control" type="email" name="email" placeholder="email">
	</div>
	&nbsp;	&nbsp;

	<div class="form-group mb-2">
		<label for="inputPassword2" class="sr-only">Password</label>
	<input class="form-control" type="password" id="inputPassword2" name="password" placeholder="password">
     </div>
     &nbsp;&nbsp;
	<button class="btn btn-primary mb-2" type="submit">Ingresar</button>

	
</form>

@stop