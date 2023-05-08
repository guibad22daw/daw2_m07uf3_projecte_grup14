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
    <div class="mt-5 botons-mostra">
        <a href="{{ url('usuaris/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-danger btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m-9.5 8.5c0 .8-.7 1.5-1.5 1.5H7v2H5.5V9H8c.8 0 1.5.7 1.5 1.5v1m5 2c0 .8-.7 1.5-1.5 1.5h-2.5V9H13c.8 0 1.5.7 1.5 1.5v3m4-3H17v1h1.5V13H17v2h-1.5V9h3v1.5m-6.5 0h1v3h-1v-3m-5 0h1v1H7v-1Z"/></svg>
            Descarregar PDF
        </a>
        <a href="{{ url('reserves/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna enrere
        </a>
    </div>
    <br><br>
</div>
@endsection