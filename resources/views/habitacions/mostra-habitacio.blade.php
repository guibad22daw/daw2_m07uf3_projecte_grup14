@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Dades de l'habitació</h2>
<p class="mt-3 text-center">Visualitza les dades de l'habitació</p>
<div class="container" style="max-width: 850px;">
	<table class="table table-striped table-bordered table-hover mt-5 shadow-sm sm:rounded-lg mostra" style="width: 100%; background-color:white; border-radius:20px; border: none">
		<thead class="thead-dark">
			<tr>
				<th scope="col" style="width: 20%">CAMP</td>
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
		</tbody>
	</table>
	<div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-5">
		<a href="{{ url('habitacions/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
			Torna enrere
		</a>
	</div>
</div>
@endsection