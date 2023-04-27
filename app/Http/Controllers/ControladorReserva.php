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
        $dades_reserves = Reserva::all();
        return view('visualitza-reserves', compact('dades_reserves'));
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
        return redirect('/reserves')->with('completed', 'Reserva creat!');
        #return view('dashboard-reserves');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tid)
    {
        $dades_reserva = Reserva::where('id', $tid)->get();
        $dades_reserva = $dades_reserva[0];
        return view('mostra-reserva', compact('dades_reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tid)
    {
        $dades_reserva = Reserva::where('id', $tid)->get();
        $dades_reserva = $dades_reserva[0];
        return view('modifica-reserva', compact('dades_reserva'));
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
        Reserva::where('id',$tid)->update($noves_dades_reserva);
        return view('dashboard-reserves');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tid)
    {
        Reserva::where('id',$tid)->delete();
        return view('dashboard-reserves');
    }
}
