<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', ['eventos' =>  $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('eventos.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->ubicacion = $request->ubicacion;
        $evento->tipo = $request->tipo;
        $evento->save();

        $eventos = Evento::all();
        return view('eventos.index', ['eventos' =>  $eventos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evento = Evento::find($id);
        return view('eventos.edit', ['evento' => $evento]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evento = Evento::find($id);
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->ubicacion = $request->ubicacion;
        $evento->tipo = $request->tipo;
        $evento->save();

        $eventos = Evento::all();
        return view('eventos.index', ['eventos' =>  $eventos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evento = Evento::find($id);
        $evento->delete();

        $eventos = Evento::all();
        return view('eventos.index', ['eventos' =>  $eventos]);
    }
}
