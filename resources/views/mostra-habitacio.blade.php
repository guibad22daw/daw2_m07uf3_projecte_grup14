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
			<td>Codi Habitació</td>
			<td>{{$dades_habitacio->codiHab}}</td>
		</tr>
		<tr>
			<td>Capacitat</td>
			<td>{{$dades_habitacio->capacitat}}</td>
		</tr>
		<tr>
			<td>Mida</td>
			<td>{{$dades_habitacio->mida}}</td>
		</tr>
		<tr>
			<td>Pensió</td>
			<td>{{$dades_habitacio->pensio}}</td>
		</tr>
		<tr>
			<td>Vistes</td>
			<td>{{$dades_habitacio->vistes}}</td>
		</tr>
		<tr>
			<td>Llits</td>
			<td>{{$dades_habitacio->llits}}</td>
		</tr>
		<tr>
			<td>Nombre de llits</td>
			<td>{{$dades_habitacio->n_llits}}</td>
		</tr>
		<tr>
			<td>Terrassa</td>
			<td>{{$dades_habitacio->terrassa == "1" ? 'Sí':'No'}}</td>
		</tr>
		<tr>
			<td>Calefacció</td>
			<td>{{$dades_habitacio->calefaccio == "1" ? 'Sí':'No'}}</td>
		</tr>
		<tr>
			<td>Aire acondicionat</td>
			<td>{{$dades_habitacio->aire_acondicionat == "1" ? 'Sí':'No'}}</td>
		</tr>
		<tr>
			<td>Nens</td>
			<td>{{$dades_habitacio->nens == "1" ? 'Sí':'No'}}</td>
		</tr>
		<tr>
			<td>Animals</td>
			<td>{{$dades_habitacio->animals == "1" ? 'Sí':'No'}}</td>
		</tr>
		<tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>  
<div>
@endsection
