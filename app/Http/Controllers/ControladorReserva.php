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
        return view('reserves/dashboard-reserves', compact('dades_reserva'));
    }

    public function visualitza()
    {
        $dades_reserves = Reserva::all();
        return view('reserves/visualitza-reserves', compact('dades_reserves'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserves/crea-reserva');
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
        return redirect()->route("reserva.visualitza")->with('message','Reserva creada amb éxit.');
        #return view('dashboard-reserves');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rid)
    {
        $dades_reserva = Reserva::where('rid', $rid)->get();
        $dades_reserva = $dades_reserva[0];
        return view('reserves/mostra-reserva', compact('dades_reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rid)
    {
        $dades_reserva = Reserva::where('rid', $rid)->get();
        $dades_reserva = $dades_reserva[0];
        return view('reserves/modifica-reserva', compact('dades_reserva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rid)
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
        Reserva::where('rid',$rid)->update($noves_dades_reserva);
        return redirect()->route("reserva.visualitza")->with('message','Reserva modificada amb éxit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rid)
    {
        Reserva::where('rid',$rid)->delete();
        return redirect()->route("reserva.visualitza")->with('message','Reserva esborrada amb éxit.');
    }
}
