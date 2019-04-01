@extends('layout')

@section('contenido')

<h1>Usuarios</h1>

<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Role</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->role->name_display }}</td>
				<td></td>

			</tr>
			
			@endforeach
		</tbody>
	</table>

@stop
