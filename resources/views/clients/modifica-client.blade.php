@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Modifica les dades del client</h2>
<p class="mt-3 text-center">Realitza modificacions als camps que es desitgin</p>
<div class="container" style="max-width: 800px;">
	<div class="card mt-5 shadow-sm sm:rounded-lg" style="border-radius: 20px">
		<div class="card-body">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form method="post" action="{{ route('clients.update', $dades_client->dni) }}">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="nif">NIF</label>
					<input type="text" class="form-control" name="dni" value="{{ $dades_client->dni }}" pattern="[0-9]{8}[A-Z]{1}" oninput="this.value = this.value.toUpperCase()"/>
					<small>Exemple: 12345678X</small>
				</div>
				<div class="form-group">
					<label for="nom_complet">Nom i cognoms</label>
					<input type="text" class="form-control" name="nom_complet" value="{{ $dades_client->nom_complet }}" pattern="[A-Za-zÀ-ÿ ]+"/>
					<small>No pot contenir números ni caràcters especials.</small>
				</div>
				<div class="form-group">
					<label for="edat">Edat</label>
					<input type="number" class="form-control" name="edat" value="{{ $dades_client->edat }}" min="0"/>
				</div>
				<div class="form-group">
					<label for="telefon">Telèfon</label>
					<input type="text" class="form-control" name="telefon" value="{{ $dades_client->telefon }}" pattern="[0-9]{9}" title="Introdueix un número de 9 xifres."/>
				</div>
				<div class="form-group">
					<label for="adreca">Adreça</label>
					<input type="text" class="form-control" name="adreca" value="{{ $dades_client->adreca }}" />
				</div>
				<div class="form-group">
					<label for="ciutat">Ciutat</label>
					<input type="text" class="form-control" name="ciutat" value="{{ $dades_client->ciutat }}"/>
				</div>
				<div class="form-group">
					<label for="pais">País</label>
					<input type="text" class="form-control" name="pais" value="{{ $dades_client->pais }}" />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" value="{{ $dades_client->email }}" />
				</div>
				<div class="row form-group mb-4">
					<div class="col-3">
						<label for="tipus_targeta">Tipus targeta</label>
						<select name="tipus_targeta" class="form-control">
							<option value="Dèbit" {{ $dades_client->tipus_targeta == "Dèbit" ? 'selected' : ''}}>Dèbit</option>
							<option value="Crèdit" {{ $dades_client->tipus_targeta == "Crèdit" ? 'selected' : ''}}>Crèdit</option>
						</select>
					</div>
					<div class="col">
						<label for="num_targeta">Número de targeta</label>
						<input type="number" class="form-control" name="num_targeta" value="{{ $dades_client->num_targeta }}" min="0"/>
					</div>
				</div>
				<button type="submit" class="btn btn-block btn-primary">Envia</button>
			</form>
		</div>
	</div>
	<br />
	<div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
		<a href="{{ url('clients/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
			Torna al dashboard
		</a>
	</div>
	<br><br>
</div>
@endsection