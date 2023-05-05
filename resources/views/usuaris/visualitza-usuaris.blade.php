@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista d'usuaris</h2>
<p class="mt-3 text-center">Visualitza les dades de tots els usuaris</p>
<div class="container" style="max-width: 1500px;">
  <table class="table mt-5 shadow-sm sm:rounded-lg" style="width: 100%; background-color:white; border-radius:20px">
    <thead>
      <tr class="table-info" style="text-align:center; font-weight: bold;">
        <th>Nom i cognoms</th>
        <th>Email</th>
        <th>Contrasenya</th>
        <th>Tipus</th>
        <th>Darrera hora de connexió</th>
        <th>Darrera hora de desconnexió </th>
        <th>Opcions</th>
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
        <td class="text-center">
          <a href="{{ route('usuaris.edit', $usuari->id)}}" class="btn btn-primary btn-sm" style="width: 70px;">Edita</a>
          <form action="{{ route('usuaris.destroy', $usuari->id)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm mt-1" type="submit" style="width: 70px;">
              Esborra
            </button>
          </form>
          <a href="{{ route('usuaris.show', $usuari->id)}}" class="btn btn-info btn-sm mt-1" style="width: 70px;">Mostra</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-5">
    <a href="{{ url('usuaris') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
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