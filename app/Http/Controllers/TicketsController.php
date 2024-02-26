<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::All();   
        return view('tickets.index', compact('tickets'));
    //   if($request)
    //     {
    //         $query=trim($request->get('texto'));
    //         $tickets=DB::table('tickets')->where('categoria','LIKE','%'.$query.'%')
    //         ->where('estado','=','1')
    //         ->orderBy('id','desc')
    //         ->paginate(10);
    //         return view('categorias.index',compact('categorias')); //pasamos el resultado como un array
    //     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('titulo'),
            'content' => $request->get('contenido'),
            'solucion' => $request->get('solucion'),
            'precio' => $request->get('precio'),
            'slug' => $slug

        ));
        $ticket->save();
        return redirect('/tickets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $ticket = Ticket::whereId($slug)->firstOrFail();
        return view('tickets.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::whereId($id)->firstOrFail();
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $ticket = Ticket::whereId($slug)->firstOrFail();
        $ticket->title = $request->get('titulo');
        $ticket->content = $request->get('contenido');
        $ticket->precio = $request->get('precio');
        $ticket->status = $request->get('status')=='checked'?1:0;
        $ticket->save();
        return redirect('/tickets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


