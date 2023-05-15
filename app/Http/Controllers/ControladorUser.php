<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ControladorUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuaris/dashboard-usuaris');
    }

    public function visualitza()
    {
        $dades_users = User::all();
        return view('usuaris/visualitza-usuaris', compact('dades_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuaris/crea-usuari');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noves_dades_usuari = $request->validate([
            'nom_complet' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
            'darrera_hora_entrada' => 'nullable',
            'darrera_hora_sortida' => 'nullable',
        ]);

        $user = new User();
        $user->nom_complet = $noves_dades_usuari['nom_complet'];
        $user->email = $noves_dades_usuari['email'];
        $user->password = Hash::make($noves_dades_usuari['password']);
        $user->tipus = $noves_dades_usuari['tipus'];
        $user->save();
    
        #return redirect('/dashboard')->with('completed', 'User creat!');
        return redirect()->route("user.visualitza")->with('message','Usuari creat amb éxit.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dades_user = User::findOrFail($id);
        return view('usuaris/mostra-usuari', compact('dades_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dades_user = User::findOrFail($id);
        return view('usuaris/modifica-usuari', compact('dades_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $noves_dades_usuari = $request->validate([
            'nom_complet' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tipus' => 'required',
            'darrera_hora_entrada' => 'nullable',
            'darrera_hora_sortida' => 'nullable',
        ]);

        $user->nom_complet = $noves_dades_usuari['nom_complet'];
        $user->email = $noves_dades_usuari['email'];
        $user->tipus = $noves_dades_usuari['tipus'];
        if (isset($noves_dades_usuari['password']) && $noves_dades_usuari['password'] != $user->password) {
            $user->password = Hash::make($noves_dades_usuari['password']);
        }
        $user->save(); 

        return redirect()->route("user.visualitza")->with('message','Usuari modificat amb éxit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::findOrFail($id)->delete();
        return redirect()->route("user.visualitza")->with('message','Usuari esborrat amb éxit.');
    }
}
