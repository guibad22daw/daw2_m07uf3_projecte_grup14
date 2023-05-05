@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Dades del client</h2>
<p class="mt-3 text-center">Visualitza les dades del client</p>
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
				<td>NIF</td>
				<td>{{$dades_client->dni}}</td>
			</tr>
			<tr>
				<td>Nom i cognoms</td>
				<td>{{$dades_client->nom_complet}}</td>
			</tr>
			<tr>
				<td>Edat</td>
				<td>{{$dades_client->edat}}</td>
			</tr>
			<tr>
				<td>Telefon</td>
				<td>{{$dades_client->telefon}}</td>
			</tr>
			<tr>
				<td>Adreça</td>
				<td>{{$dades_client->adreca}}</td>
			</tr>
			<tr>
				<td>Ciutat</td>
				<td>{{$dades_client->ciutat}}</td>
			</tr>
			<tr>
				<td>País</td>
				<td>{{$dades_client->pais}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$dades_client->email}}</td>
			</tr>
			<tr>
				<td>Tipus targeta</td>
				<td>{{$dades_client->tipus_targeta}}</td>
			</tr>
			<tr>
				<td>Núm. targeta</td>
				<td>{{$dades_client->num_targeta}}</td>
			</tr>
		</tbody>
	</table>
	<div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-5">
		<a href="{{ url('clients/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
			Torna enrere
		</a>
	</div>
</div>
@endsection