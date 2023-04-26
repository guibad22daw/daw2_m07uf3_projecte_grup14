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
        return view('dashboard-clients');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea-client');
    }

    public function visualitza()
    {
        $dades_clients = Client::all();
        return view('visualitza-clients', compact('dades_clients'));
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
        return redirect('/clients')->with('completed', 'Client creat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dni)
    {
        $dades_client = Client::findOrFail($dni);
        return view('mostra-client', compact('dades_client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($dni)
    {
        $dades_client = Client::findOrFail($dni);
        return view('modifica-client', compact('dades_client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dni)
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
        Client::findOrFail($dni)->update($noves_dades_client);
        return redirect('/clients')->with('completed', 'Client modificat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dni)
    {
        $Client = Client::findOrFail($dni)->delete();
        return view('dashboard-clients');
    }
}
