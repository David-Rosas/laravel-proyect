@extends('layout')

@section('contenido')

<h1>{{$user->name}}</h1>

<table class="table">
<tr>    
<th>nombre</th>
<td> {{$user->name}}</td>
</tr>

<tr>
    <th> Email:</th>
    <td> {{$user->email}}</td>
</tr>

<tr>
   
        <th> Roles:</th>
        <td>@foreach ($user->roles as $roles)
            {{$roles->name_display }}

        @endforeach </td>
    </tr>
   
</table>

@can('verificUser', $user)

<a class="btn btn-success btn-sm" href="{{ route('user.edit', $user->id )}}"> Editar</a>
					<form style="display: inline;" method="post" action="{{route('user.destroy', $user->id)}}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
					<button class="btn btn-danger btn-sm" type="submit">Eliminar</button></form>
@endcan
@stop