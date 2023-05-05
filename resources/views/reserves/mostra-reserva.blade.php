@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Dades de la reserva</h2>
<p class="mt-3 text-center">Visualitza les dades de la reserva</p>
<div class="container" style="max-width: 850px;">
    <table class="table table-striped table-bordered table-hover mt-5 shadow-sm sm:rounded-lg mostra" style="width: 100%; background-color:white; border-radius:20px; border: none">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="width: 20%">CAMP</td>
                <th scope="col">VALOR</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>NIF</td>
                <td>{{$dades_reserva->dni}}</td>
            </tr>
            <tr>
                <td>Codi Habitació</td>
                <td>{{$dades_reserva->codiHab}}</td>
            </tr>
            <tr>
                <td>Data Entrada</td>
                <td>{{$dades_reserva->data_entrada}}</td>
            </tr>
            <tr>
                <td>Data Sortida</td>
                <td>{{$dades_reserva->data_sortida}}</td>
            </tr>
            <tr>
                <td>Pensió</td>
                <td>{{$dades_reserva->pensio}}</td>
            </tr>
            <tr>
                <td>Preu Dia</td>
                <td>{{$dades_reserva->preu_dia}}</td>
            </tr>
            <tr>
                <td>Assegurança</td>
                <td>{{$dades_reserva->asseguranca}}</td>
            </tr>
        </tbody>
    </table>
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-5">
        <a href="{{ url('reserves/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna enrere
        </a>
    </div>
</div>
@endsection