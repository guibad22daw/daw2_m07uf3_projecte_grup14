<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ControladorUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard-usuaris');
    }

    public function visualitza()
    {
        $dades_users = User::all();
        return view('visualitza-usuaris', compact('dades_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea-usuari');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nou_user = $request->validate([
            'nom_complet' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
            'darrera_hora_entrada' => 'nullable',
            'darrera_hora_sortida' => 'nullable',
        ]);
        $User = User::create($nou_user);
        #return redirect('/dashboard')->with('completed', 'User creat!');
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
        $dades_user = User::findOrFail($tid);
        return view('mostra-usuari', compact('dades_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tid)
    {
        $dades_user = User::findOrFail($tid);
        return view('modifica-usuari', compact('dades_user'));
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
        $noves_dades_usuari = $request->validate([
            'nom_complet' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
            'darrera_hora_entrada' => 'nullable',
            'darrera_hora_sortida' => 'nullable',
        ]);
        User::findOrFail($tid)->update($noves_dades_usuari);
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
        $User = User::findOrFail($tid)->delete();
        return view('dashboard');
    }
}
