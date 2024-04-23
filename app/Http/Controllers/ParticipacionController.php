<?php

namespace App\Http\Controllers;

use App\Models\Participacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participaciones = DB::table('participaciones')
        ->join('equipos', 'equipos.id', '=', 'participaciones.equipo_id')
        ->join('eventos', 'eventos.id', '=', 'participaciones.evento_id') 
        ->select('participaciones.*',  'equipos.nombre as nombre_equipo', 'eventos.nombre as nombre_evento')
        ->get();
    
    return view('participaciones.index', ['participaciones' => $participaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = DB::table('equipos')
        ->orderBy('nombre')
        ->get();
        $eventos = DB::table('eventos')
        ->orderBy('nombre')
        ->get();
        return view('participaciones.new', [  'equipos' => $equipos, 'eventos' => $eventos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $participacion = new Participacion();
        $participacion->evento_id=$request->evento;
        $participacion->equipo_id=$request->equipo;
        $participacion->resultado=$request->resultado;
        $participacion->premios=$request->premios;
        $participacion->save();
        $participaciones = DB::table('participaciones')
        ->join('equipos', 'equipos.id', '=', 'participaciones.equipo_id')
        ->join('eventos', 'eventos.id', '=', 'participaciones.evento_id') 
        ->select('participaciones.*',  'equipos.nombre as nombre_equipo', 'eventos.nombre as nombre_evento')
        ->get();
    
    return view('participaciones.index', ['participaciones' => $participaciones]);
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
        $participacion = Participacion::find($id);
        $equipos = DB::table('equipos')
        ->orderBy('nombre')
        ->get();
        $eventos = DB::table('eventos')
        ->orderBy('nombre')
        ->get();
        return view('participaciones.edit', ['participacion'=>$participacion,  'equipos' => $equipos, 'eventos' => $eventos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $participacion = Participacion::find($id);
        $participacion->evento_id=$request->evento;
        $participacion->equipo_id=$request->equipo;
        $participacion->resultado=$request->resultado;
        $participacion->premios=$request->premios;
        $participacion->save();
        $participaciones = DB::table('participaciones')
        ->join('equipos', 'equipos.id', '=', 'participaciones.equipo_id')
        ->join('eventos', 'eventos.id', '=', 'participaciones.evento_id') 
        ->select('participaciones.*',  'equipos.nombre as nombre_equipo', 'eventos.nombre as nombre_evento')
        ->get();
    
    return view('participaciones.index', ['participaciones' => $participaciones]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $participacion = Participacion::find($id);
        $participacion->delete();

        $participaciones = DB::table('participaciones')
        ->join('equipos', 'equipos.id', '=', 'participaciones.equipo_id')
        ->join('eventos', 'eventos.id', '=', 'participaciones.evento_id') 
        ->select('participaciones.*',  'equipos.nombre as nombre_equipo', 'eventos.nombre as nombre_evento')
        ->get();
    
    return view('participaciones.index', ['participaciones' => $participaciones]);
    }
}
