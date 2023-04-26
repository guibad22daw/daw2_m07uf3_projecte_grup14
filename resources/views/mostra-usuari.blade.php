@extends('disseny')
@section('content')
<h1>Dades de l'usuari</h1>
<div class="mt-5">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr class="table-primary">
                <th scope="col">CAMP</td>
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
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard<a />
    </div>
</div>
@endsection