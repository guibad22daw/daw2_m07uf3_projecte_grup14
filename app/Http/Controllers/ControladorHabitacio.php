<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacio;

class ControladorHabitacio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('habitacions/dashboard-habitacions');
    }

    public function visualitza()
    {
        $dades_habitacions = Habitacio::all();
        return view('habitacions/visualitza-habitacions', compact('dades_habitacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitacions/crea-habitacio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novaHabitacio = $request->validate([
            'codiHab' => 'required|unique:habitacions',
            'capacitat' => 'required',
            'mida' => 'required',
            'pensio' => 'required',
            'vistes' => 'required',
            'llits' => 'required',
            'n_llits' => 'required',
            'terrassa' => 'required',
            'calefaccio' => 'required',
            'aire_acondicionat' => 'required',
            'nens' => 'required',
            'animals' => 'required',
        ]);
        $Habitacio = Habitacio::create($novaHabitacio);
       //return redirect('/dashboard')->with('completed', 'Habitacio creat!');
        return redirect()->route("habitacio.visualitza")->with('message','Habitació creada amb éxit.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($codiHab)
    {
        $dades_habitacio = Habitacio::findOrFail($codiHab);
        return view('habitacions/mostra-habitacio', compact('dades_habitacio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($codiHab)
    {
        $dades_habitacio = Habitacio::findOrFail($codiHab);
        return view('habitacions/modifica-habitacio', compact('dades_habitacio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codiHab)
    {
        $noves_dades_habitacio = $request->validate([
            'codiHab' => 'required',
            'capacitat' => 'required',
            'mida' => 'required',
            'pensio' => 'required',
            'vistes' => 'required',
            'llits' => 'required',
            'n_llits' => 'required',
            'terrassa' => 'required',
            'calefaccio' => 'required',
            'aire_acondicionat' => 'required',
            'nens' => 'required',
            'animals' => 'required',
        ]);
        Habitacio::findOrFail($codiHab)->update($noves_dades_habitacio);
        return redirect()->route("habitacio.visualitza")->with('message','Habitació modificada amb éxit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($codiHab)
    {
        $Habitacio = Habitacio::findOrFail($codiHab)->delete();
        return redirect()->route("habitacio.visualitza")->with('message','Habitació esborrada amb éxit.');
    }

}
