@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista d'habitacions</h2>
<p class="mt-3 text-center">Visualitza les dades de totes les habitacions</p>
<div class="container" style="max-width: 1600px;">
  <table class="table mt-5 shadow-sm sm:rounded-lg" style="width: 100%; background-color:white; border-radius:20px">
    <thead>
      <tr class="table-info" style="text-align:center; font-weight: bold;">
        <th>Codi Habitació</th>
        <th>Capacitat</th>
        <th>Mida</th>
        <th>Pensió</th>
        <th>Vistes</th>
        <th>Llits</th>
        <th style="width: 100px;">Nombre de llits</th>
        <th>Terrassa</th>
        <th>Calefacció</th>
        <th style="width: 50px;">Aire acondicionat</th>
        <th>Nens</th>
        <th>Animals</th>
        <th>Opcions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dades_habitacions as $habitacio)
      <tr style="text-align:center;">
        <td>{{$habitacio->codiHab}}</td>
        <td>{{$habitacio->capacitat}}</td>
        <td>{{$habitacio->mida}}</td>
        <td style="max-width: 180px;">{{$habitacio->pensio}}</td>
        <td>{{$habitacio->vistes}}</td>
        <td>{{$habitacio->llits}}</td>
        <td>{{$habitacio->n_llits}}</td>
        <td>{{$habitacio->terrassa == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->calefaccio == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->aire_acondicionat == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->nens == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->animals == "1" ? 'Sí':'No'}}</td>
        <td class="text-center">
          <a href="{{ route('habitacions.edit', $habitacio->codiHab)}}" style="border-radius: 10px; width: 70px;" class="btn btn-primary btn-sm">Edita</a>
          <form action="{{ route('habitacions.destroy', $habitacio->codiHab)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" style="border-radius: 10px; width: 70px;" type="submit">
              Esborra
            </button>
          </form>
          <a href="{{ route('habitacions.show', $habitacio->codiHab)}}" style="border-radius: 10px;width: 70px;" class="btn btn-info btn-sm">Mostra</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-5">
    <a href="{{ url('habitacions') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
      Torna al dashboard
    </a>
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