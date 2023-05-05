@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Dades de l'usuari</h2>
<p class="mt-3 text-center">Visualitza i descarrega en PDF les dades de l'usuari</p>
<div class="container" style="max-width: 850px;">
    <table class="table table-striped table-bordered table-hover mt-5 shadow-sm sm:rounded-lg mostra" style="width: 100%; background-color:white; border-radius:20px; border: none">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="width: 25%">CAMP</td>
                <th scope="col">VALOR</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nom i cognoms</td>
                <td>{{$dades_user->nom_complet}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$dades_user->email}}</td>
            </tr>
            <tr>
                <td>Contrasenya</td>
                <td>{{$dades_user->password}}</td>
            </tr>
            <tr>
                <td>Darrera connexió</td>
                <td>{{$dades_user->darrera_hora_entrada}}</td>
            </tr>
            <tr>
                <td>Darrera desconnexió</td>
                <td>{{$dades_user->darrera_hora_sortida}}</td>
            </tr>
        </tbody>
    </table>
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-5">
        <a href="{{ url('usuaris/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Descarregar en PDF
        </a>
        <a href="{{ url('usuaris/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna enrere
        </a>
    </div>
</div>
@endsection