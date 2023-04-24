@extends('disseny')
@section('content')
<h1>Llista d'empleats</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="table-primary">
          <td>tid</td>
          <td>Nom</td>
          <td>Cognoms</td>          
          <td>Accions sobre la taula</td>          
        </tr>
    </thead>
    <tbody>
        @foreach($dades_treballadors as $treb)
        <tr>
            <td>{{$treb->tid}}</td>
            <td>{{$treb->nom}}</td>
            <td>{{$treb->cognoms}}</td>                      
            <td class="text-left">
			    <a href="{{ route('trebs.show_basic', $treb->tid) }}" class="btn btn-info btn-sm">Mostra</a>
		    </td>            
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard-basic') }}">Torna al dashboard<a/>                     
  </div>  
<div>
@endsection