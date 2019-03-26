@extends('layout')

@section('contenido')

<h1>Todos los mensajes</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Mensaje</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($messages as $message)
			<tr>
				<td><a href="{{ route('messages.show', $message->id)}}">{{ $message->nombre }}</a></td>
				<td>{{ $message->email }}</td>
				<td>{{ $message->mensaje }}</td>
				<td><a class="btn btn-success btn-sm" href="{{ route('messages.edit', $message->id )}}"> Editar</a>
					<form style="display: inline;" method="post" action="{{route('messages.destroy', $message->id)}}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
					<button class="btn btn-danger btn-sm" type="submit">Eliminar</button></form></td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

@stop