@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista d'usuaris</h2>
<p class="mt-3 text-center">Visualitza les dades de tots els usuaris</p>
<div class="container">
  <div class="mt-5">
    <table class="table table-bordered" style="width: 85%; background-color:white; border-radius:15px">
      <thead>
        <tr class="table-info" style="text-align:center; font-weight: bold;">
          <td>Nom i cognoms</td>
          <td>Email</td>
          <td>Contrasenya</td>
          <td>Tipus</td>
          <td>Darrera hora de connexió</td>
          <td>Darrera hora de desconnexió </td>
          <td>Opcions</td>
        </tr>
      </thead>
      <tbody>
        @foreach($dades_users as $usuari)
        <tr style="text-align:center;">
          <td>{{$usuari->nom_complet}}</td>
          <td>{{$usuari->email}}</td>
          <td>{{$usuari->password}}</td>
          <td>{{$usuari->tipus}}</td>
          <td>{{$usuari->darrera_hora_entrada}}</td>
          <td>{{$usuari->darrera_hora_sortida}}</td>
          <td class="text-left">
            <a href="{{ route('usuaris.edit', $usuari->id)}}" class="btn btn-primary btn-sm">Edita</a>
            <form action="{{ route('usuaris.destroy', $usuari->id)}}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm mt-1" type="submit">
                Esborra
              </button>
            </form>
            <a href="{{ route('usuaris.show', $usuari->id)}}" class="btn btn-info btn-sm mt-1">Mostra</a>
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