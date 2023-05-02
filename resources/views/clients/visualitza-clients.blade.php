@extends('disseny')
@section('content')
<h1>Llista de clients</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr class="table-primary">
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
      <tr>
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
            <button class="btn btn-danger btn-sm" type="submit">
              Esborra
            </button>
          </form>
          <a href="{{ route('clients.show', $client->dni)}}" class="btn btn-info btn-sm">Mostra</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard<a />
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