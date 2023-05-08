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
    <div class="mt-5 botons-mostra">
        <a href="{{ url('usuaris/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-danger btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m-9.5 8.5c0 .8-.7 1.5-1.5 1.5H7v2H5.5V9H8c.8 0 1.5.7 1.5 1.5v1m5 2c0 .8-.7 1.5-1.5 1.5h-2.5V9H13c.8 0 1.5.7 1.5 1.5v3m4-3H17v1h1.5V13H17v2h-1.5V9h3v1.5m-6.5 0h1v3h-1v-3m-5 0h1v1H7v-1Z"/></svg>
            Descarregar PDF
        </a>
        <a href="{{ url('clients/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna enrere
        </a>
    </div>
	<br><br>
</div>
@endsection