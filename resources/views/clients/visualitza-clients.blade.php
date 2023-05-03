@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Llista de clients</h2>
<p class="mt-3 text-center">Visualitza les dades de tots els clients</p>
<div class="container">
  <div class="mt-5">
    <table class="table table-bordered" style="width: 85%; background-color:white; border-radius:15px">
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
          <td class="text-left">
            <a href="{{ route('clients.edit', $client->dni)}}" class="btn btn-primary btn-sm">Edita</a>
            <form action="{{ route('clients.destroy', $client->dni)}}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm mt-1" type="submit">
                Esborra
              </button>
            </form>
            <a href="{{ route('clients.show', $client->dni)}}" class="btn btn-info btn-sm mt-1">Mostra</a>
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