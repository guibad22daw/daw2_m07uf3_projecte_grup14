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
			<tr>
		</tbody>
	</table>
	<div class="p-6 bg-white border-b border-gray-200">
		<a href="{{ url('clients') }}">Torna al dashboard<a />
	</div>
	<div>
		@endsection