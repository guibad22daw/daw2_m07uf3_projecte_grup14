<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treballador;

class ControladorTreballador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dades_treballadors = Treballador::all();
        return view('llista', compact('dades_treballadors'));                
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
        $nouTreballador = $request->validate([
            'nom' => 'required',
            'cognoms' => 'required',
            'nif' => 'required',
            'data_naixement' => 'required',
            'sexe' => 'required',
            'adressa' => 'required',
            'tlf_fixe' => 'required',
            'tlf_mobil' => 'required',
            'email' => 'required',
            'treball_distancia' => 'required',
            'tipus_contracte' => 'required',
            'data_contractacio' => 'required',
            'categoria' => 'required',
            'nom_feina' => 'required',
            'sou' => 'required'
        ]);
        $treballador = Treballador::create($nouTreballador);
        #return redirect('/dashboard')->with('completed', 'Treballador creat!');
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
        $dades_treballador = Treballador::findOrFail($tid);
        return view('mostra',compact('dades_treballador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tid)
    {
        $dades_treballador = Treballador::findOrFail($tid);
        return view('actualitza',compact('dades_treballador'));
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
		$noves_dades_treballador = $request->validate([
            'nom' => 'required',
            'cognoms' => 'required',
            'nif' => 'required',
            'data_naixement' => 'required',
            'sexe' => 'required',
            'adressa' => 'required',
            'tlf_fixe' => 'required',
            'tlf_mobil' => 'required',
            'email' => 'required',
            'treball_distancia' => 'required',
            'tipus_contracte' => 'required',
            'data_contractacio' => 'required',
            'categoria' => 'required',
            'nom_feina' => 'required',
            'sou' => 'required'
        ]);
        Treballador::findOrFail($tid)->update($noves_dades_treballador);
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
        $treballador = Treballador::findOrFail($tid)->delete();
	    return view('dashboard');
    }

    public function index_basic()
    {
        $dades_treballadors = Treballador::all();
        return view('llista-basica', compact('dades_treballadors'));                
    }

    public function show_basic($tid)
    {
        $dades_treballador = Treballador::findOrFail($tid);
        return view('mostra-basica',compact('dades_treballador'));
    }
}
