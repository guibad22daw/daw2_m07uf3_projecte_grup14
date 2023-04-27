@extends('disseny')
@section('content')
<h1>Llista reserves</h1>
<div class="mt-5">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="table-primary">
                <td>Núm. de reserva</td>
                <td>NIF</td>
                <td>Codi Habitació</td>
                <td>Data Entrada</td>
                <td>Data Sortida</td>
                <td>Pensió</td>
                <td>Preu dia</td>
                <td>Assegurança</td>
                <td>Opcions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($dades_reserves as $reserva)
            <tr>
                <td>{{$reserva->rid}}</td>
                <td>{{$reserva->dni}}</td>
                <td>{{$reserva->codiHab}}</td>
                <td>{{$reserva->data_entrada}}</td>
                <td>{{$reserva->data_sortida}}</td>
                <td>{{$reserva->pensio}}</td>
                <td>{{$reserva->preu_dia}}</td>
                <td>{{$reserva->asseguranca}}</td>
                <td class="text-left">
                    <a href="{{ route('reserves.edit', $reserva->rid)}}" class="btn btn-primary btn-sm">Edita</a>
                    <form action="{{ route('reserves.destroy', $reserva->rid)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">
                            Esborra
                        </button>
                    </form>
                    <a href="{{ route('reserves.show', $reserva->rid)}}" class="btn btn-info btn-sm">Mostra</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard</a>
    </div>
</div>
@endsection