<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{

   
  public function home()
  {
  	return view('home');


  }
  
  public function saludos( $nombre = "invitado" ){

  	$html  = "<h2> hellos soy la injeccion <h2>";
	$array =  array("consola" => "Xbox",
              "consola 2" => "Play station",
              "consola 3" => "Nintendo");

	return view('saludos', compact('nombre', 'html', 'array'));
  }

 
}
