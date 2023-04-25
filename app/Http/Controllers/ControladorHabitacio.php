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
        $dades_habitacio = Habitacio::all();
        return view('llista', compact('dades_habitacio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea');
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
        $Habitacio = Habitacio::create($novaHabitacio);
        #return redirect('/dashboard')->with('completed', 'Habitacio creat!');
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tid)
    {
        $dades_habitacio = Habitacio::findOrFail($tid);
        return view('mostra', compact('dades_habitacio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tid)
    {
        $dades_habitacio = Habitacio::findOrFail($tid);
        return view('actualitza', compact('dades_habitacio'));
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
        Habitacio::findOrFail($tid)->update($noves_dades_habitacio);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tid)
    {
        $Habitacio = Habitacio::findOrFail($tid)->delete();
        return view('dashboard');
    }

    public function index_basic()
    {
        $dades_habitacion = Habitacio::all();
        return view('llista-basica', compact('dades_habitacio'));
    }

    public function show_basic($tid)
    {
        $dades_habitacio = Habitacio::findOrFail($tid);
        return view('mostra-basica', compact('dades_habitacio'));
    }
}
