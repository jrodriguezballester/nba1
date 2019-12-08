<?php

namespace App\Http\Controllers;

use App\Equipos;
use App\jugadores;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos=Equipos::all();
        return view ('equipos',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function show($equipo)
    {
       $datosEquipo=Equipos::where('Nombre',$equipo)->get();
       $jugadores=jugadores::where('Nombre_equipo',$equipo)->get();
       return view('equipo')->with('datosEquipo',$datosEquipo)->with('jugadores',$jugadores);
        // return view('equipo',compact('datosEquipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipos $equipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipos $equipos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipos $equipos)
    {
        //
    }
}
