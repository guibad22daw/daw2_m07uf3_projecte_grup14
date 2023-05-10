@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista de reserves</h2>
<p class="mt-3 text-center">Visualitza les dades de totes les reserves</p>
<div class="container" style="max-width: 1500px;">
    <table class="table mt-5 shadow-sm sm:rounded-lg" style="width: 100%; background-color:white; border-radius:20px">
        <thead>
            <tr style="text-align:center; background-color: #bee5eb ;font-weight: bold; border-radius: 20px">
                <th>Núm. de reserva</th>
                <th>NIF</th>
                <th>Codi Habitació</th>
                <th>Data Entrada</th>
                <th>Data Sortida</th>
                <th>Pensió</th>
                <th>Preu dia</th>
                <th>Assegurança</th>
                <th>Opcions</th>
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
                <td class="text-center">
                    <a href="{{ route('reserves.edit', $reserva->rid)}}" class="btn btn-primary btn-sm" style="width: 70px;">Edita</a>
                    <form action="{{ route('reserves.destroy', $reserva->rid)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit" style="width: 70px;">
                            Esborra
                        </button>
                    </form>
                    <a href="{{ route('reserves.show', $reserva->rid)}}" class="btn btn-info btn-sm" style="width: 70px;">Mostra</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-5">
        <a href="{{ url('reserves') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna al dashboard
        </a>
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