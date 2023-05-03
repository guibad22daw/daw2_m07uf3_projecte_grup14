@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista de reserves</h2>
<p class="mt-3 text-center">Visualitza les dades de totes les reserves</p>
<div class="container">
    <div class="mt-5">
        <table class="table table-bordered" style="width: 85%; background-color:white; border-radius:15px">
            <thead>
                <tr class="table-info" style="text-align:center; font-weight: bold;">
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
                <tr style="text-align:center;">
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
                            <button class="btn btn-danger btn-sm mt-1" type="submit">
                                Esborra
                            </button>
                        </form>
                        <a href="{{ route('reserves.show', $reserva->rid)}}" class="btn btn-info btn-sm mt-1">Mostra</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
            <a href="{{ url('habitacions') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
                Torna al dashboard
            </a>
        </div>
    </div>
</div>
</div>
@if(session('message'))
<script>
    var alerta = function() {
        alert("{{session('message')}}");
    }

    window.onload = alerta;
</script>
@endif
@endsection