<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ControladorReserva extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dades_reserva = Reserva::all();
        return view('dashboard-reserves', compact('dades_reserva'));
    }

    public function visualitza()
    {
        $dades_reserva = Reserva::all();
        return view('visualitza-reserves', compact('dades_reserva'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea-reserva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novaReserva = $request->validate([
            'dni' => 'required',
            'codiHab' => 'required',
            'data_entrada' => 'required',
            'data_sortida' => 'required',
            'pensio' => 'required',
            'preu_dia' => 'required',
            'asseguranca' => 'required',
        ]);
        $Reserva = Reserva::create($novaReserva);
        #return redirect('/dashboard')->with('completed', 'Reserva creat!');
        return view('dashboard-reserva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tid)
    {
        $dades_reserva = Reserva::findOrFail($tid);
        return view('mostra', compact('dades_reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tid)
    {
        $dades_reserva = Reserva::findOrFail($tid);
        return view('actualitza', compact('dades_reserva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tid)
    {
        $noves_dades_reserva = $request->validate([
            'dni' => 'required',
            'codiHab' => 'required',
            'data_entrada' => 'required',
            'data_sortida' => 'required',
            'pensio' => 'required',
            'preu_dia' => 'required',
            'asseguranca' => 'required',
        ]);
        Reserva::findOrFail($tid)->update($noves_dades_reserva);
        return view('dashboard-reserva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tid)
    {
        $Reserva = Reserva::findOrFail($tid)->delete();
        return view('dashboard-reserva');
    }
}
