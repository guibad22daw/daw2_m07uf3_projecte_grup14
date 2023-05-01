@extends('disseny')
@section('content')
<h1>Dades del treballador</h1>
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
            <tr>
        </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard<a />
    </div>
</div>
        @endsection