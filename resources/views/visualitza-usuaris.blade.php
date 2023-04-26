@extends('disseny')
@section('content')
<h1>Llista d'usuari</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="table-primary">
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
        <tr>
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
					      <button class="btn btn-danger btn-sm" type="submit">
						      Esborra
					      </button>					
				      </form>
				      <a href="{{ route('usuaris.show', $usuari->id)}}" class="btn btn-info btn-sm">Mostra</a>
			      </td>            
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>  
<div>
@endsection
