@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista d'habitacions</h2>
<p class="mt-3 text-center">Visualitza les dades de totes les habitacions</p>
<div class="container">
  <div class="mt-5">
  <table class="table table-bordered" style="width: 85%; background-color:white; border-radius:15px">
    <thead>
      <tr class="table-info" style="text-align:center; font-weight: bold;">
        <td>Codi Habitació</td>
        <td>Capacitat</td>
        <td>Mida</td>
        <td>Pensió</td>
        <td>Vistes</td>
        <td>Llits</td>
        <td>Nombre de llits</td>
        <td>Terrassa</td>
        <td>Calefacció</td>
        <td>Aire acondicionat</td>
        <td>Nens</td>
        <td>Animals</td>
        <td>Opcions</td>
      </tr>
    </thead>
    <tbody>
      @foreach($dades_habitacions as $habitacio)
      <tr style="text-align:center;">
        <td>{{$habitacio->codiHab}}</td>
        <td>{{$habitacio->capacitat}}</td>
        <td>{{$habitacio->mida}}</td>
        <td>{{$habitacio->pensio}}</td>
        <td>{{$habitacio->vistes}}</td>
        <td>{{$habitacio->llits}}</td>
        <td>{{$habitacio->n_llits}}</td>
        <td>{{$habitacio->terrassa == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->calefaccio == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->aire_acondicionat == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->nens == "1" ? 'Sí':'No'}}</td>
        <td>{{$habitacio->animals == "1" ? 'Sí':'No'}}</td>
        <td class="text-left">
          <a href="{{ route('habitacions.edit', $habitacio->codiHab)}}" style="border-radius: 10px" class="btn btn-primary btn-sm">Edita</a>
          <form action="{{ route('habitacions.destroy', $habitacio->codiHab)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm mt-1"  style="border-radius: 10px" type="submit">
              Esborra
            </button>
          </form>
          <a href="{{ route('habitacions.show', $habitacio->codiHab)}}" style="border-radius: 10px" class="btn btn-info btn-sm mt-1">Mostra</a>
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
@if(session('message'))
<script>
  var alerta = function() {
    alert("{{session('message')}}");
  }

  window.onload = alerta;
</script>
@endif
@endsection