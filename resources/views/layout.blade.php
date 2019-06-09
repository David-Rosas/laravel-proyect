<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{!! asset('css/app.css') !!}">
<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Mi sitio</title>
	
</head>
<body>


<div class="container">
  <div class="row">
  	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
	<div class="col-sm-10">
	<ul class="nav">	
	<?php function activeMenu($url){

		return request()->is($url)?'active' : '';
	} ?>
  <li class="nav-item">
    <a class="{{ activeMenu('/') }} nav-link " href="{{ route('home') }}">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="{{ activeMenu('saludos*') }} nav-link " href="{{ route('saludos', 'jorge') }}">Saludo</a>
  </li>
  <li class="nav-item">
   <a class="{{ activeMenu('messages/create') }} nav-link " href="{{ route('messages.create') }}">Contacto</a>
  </li>  
    @if(auth()->check())
    <li class="nav-item">
   <a class="{{ activeMenu('messages*') }} nav-link " href="{{ route('messages.index') }}">Mensajes</a>
  </li>
      @if (@auth()->user()->hasRoles(['admin', 'estudiante']))
   <li class="nav-item">
   <a class="{{ activeMenu('user*') }} nav-link " href="{{ route('user.index') }}">Usuarios</a>
  </li>
      @endif
   @endif
  </ul>
  </div>
 

  <div class="col-sm-2">
  	<ul class="nav float-right">
  	 @if(auth()->check())	
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/logout">Cerra sesión</a>
          <a class="dropdown-item" href="/user/{{ auth()->id() }}/edit">Mi cuenta</a>
        </div>
      </li>
      @else
      <li class="nav-item">
       <a class="{{ activeMenu('login') }} nav-link " href="{{ route('login') }}">Login</a>
      </li>
      @endif
  </ul>
      </div>  
  
  </nav>

</div>

@yield('contenido')

<footer> Copyrigth Todo Reservado</footer>
<script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/all.js') !!}"></script>

</div>	
</body>
</html>
