@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista de clients</h2>
<p class="mt-3 text-center">Visualitza les dades de tots els clients</p>
<div class="container" style="max-width: 1500px;">
  <table class="table mt-5 shadow-sm sm:rounded-lg" style="width: 100%; background-color:white; border-radius:20px">
    <thead>
      <tr class="table-info" style="text-align:center; font-weight: bold;">
        <td>NIF</td>
        <td>Nom i cognoms</td>
        <td>Edat</td>
        <td>Telefon</td>
        <td>Adreça</td>
        <td>Ciutat</td>
        <td>País</td>
        <td>Email</td>
        <td>Tipus targeta</td>
        <td>Núm. targeta</td>
        <td>Opcions</td>
      </tr>
    </thead>
    <tbody>
      @foreach($dades_clients as $client)
      <tr style="text-align:center;">
        <td>{{$client->dni}}</td>
        <td>{{$client->nom_complet}}</td>
        <td>{{$client->edat}}</td>
        <td>{{$client->telefon}}</td>
        <td>{{$client->adreca}}</td>
        <td>{{$client->ciutat}}</td>
        <td>{{$client->pais}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->tipus_targeta}}</td>
        <td>{{$client->num_targeta}}</td>
        <td class="text-center">
          <a href="{{ route('clients.edit', $client->dni)}}" class="btn btn-primary btn-sm" style="width: 70px;">Edita</a>
          <form action="{{ route('clients.destroy', $client->dni)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit" style="width: 70px;">
              Esborra
            </button>
          </form>
          <a href="{{ route('clients.show', $client->dni)}}" class="btn btn-info btn-sm" style="width: 70px;">Mostra</a>
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