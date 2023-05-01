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
        return view('clients/dashboard-clients');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients/crea-client');
    }

    public function visualitza()
    {
        $dades_clients = Client::all();
        return view('clients/visualitza-clients', compact('dades_clients'));
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
        return redirect()->route("client.visualitza")->with('message','Client creat amb éxit.');
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
        return view('clients/mostra-client', compact('dades_client'));
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
        return view('clients/modifica-client', compact('dades_client'));
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
        return redirect()->route("client.visualitza")->with('message','Client modificat amb éxit.');
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
        return redirect()->route("client.visualitza")->with('message','Client eliminat amb éxit.');
    }
}
