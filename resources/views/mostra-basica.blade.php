@extends('disseny')
@section('content')
<h1>Dades del treballador</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
	<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">CAMP</td>
			<th scope="col">VALOR</td>
        </tr>
	</thead>
	<tbody>
		<tr>
			<td>tid</td>
			<td>{{$dades_treballador->tid}}</td>
		</tr>
		<tr>
			<td>Nom</td>
			<td>{{$dades_treballador->nom}}</td>
		</tr>
		<tr>
			<td>Cognoms</td>
			<td>{{$dades_treballador->cognoms}}</td>
		</tr>		
		<tr>
			<td>Categoria</td>
			<td>{{$dades_treballador->categoria}}</td>
		</tr>
		<tr>
			<td>Nom de la feina</td>
			<td>{{$dades_treballador->nom_feina}}</td>
		</tr>		
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard-basic') }}">Torna al dashboard<a/>                     
  </div>  
<div>
@endsection