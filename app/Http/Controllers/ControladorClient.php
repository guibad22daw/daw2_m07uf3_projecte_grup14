<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dades_clients = Client::all();
        return view('llista', compact('dades_clients'));
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
        $nouClient = $request->validate([
            'dni' => 'required',
            'nom_complet' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreca' => 'required',
            'ciutat' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'tipus_targeta' => 'required',
            'num_targeta' => 'required',
        ]);
        $Client = Client::create($nouClient);
        #return redirect('/dashboard')->with('completed', 'Client creat!');
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
        $dades_client = Client::findOrFail($tid);
        return view('mostra', compact('dades_client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tid)
    {
        $dades_client = Client::findOrFail($tid);
        return view('actualitza', compact('dades_client'));
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
        $noves_dades_client = $request->validate([
            'dni' => 'required',
            'nom_complet' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreca' => 'required',
            'ciutat' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'tipus_targeta' => 'required',
            'num_targeta' => 'required',
        ]);
        Client::findOrFail($tid)->update($noves_dades_client);
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
        $Client = Client::findOrFail($tid)->delete();
        return view('dashboard');
    }

    public function index_basic()
    {
        $dades_clients = Client::all();
        return view('llista-basica', compact('dades_clients'));
    }

    public function show_basic($tid)
    {
        $dades_client = Client::findOrFail($tid);
        return view('mostra-basica', compact('dades_client'));
    }
}
