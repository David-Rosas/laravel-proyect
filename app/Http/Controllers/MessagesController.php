<?php

namespace App\Http\Controllers;

use DB;

use App\Message;

use Carbon\Carbon;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
        */
      public function __construct()
  {
    $this->middleware('auth', ['except' => ['create', 'store']] );
  }
   
    public function index()
        {
        

        $messages = Message::all(); 

        return view('messages.index', compact('messages'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        Message::create($request->all());

        return redirect()->route('messages.create')->with('info', 'Mensaje enviado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $message = DB::table('messages')->where('id', $id)->first();

        $message = Message::findOrFail($id);

        return view('messages.show', compact('message'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
     $message = Message::findOrFail($id);

      $message->update($request->all());

    return redirect()->route('messages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    Message::findOrFail($id)->delete();

      

       return redirect()->route('messages.index');
    }
}
