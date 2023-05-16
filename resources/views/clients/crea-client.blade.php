@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Creació d'un nou client</h2>
<p class="mt-3 text-center">Emplena tots els camps del formulari</p>
<div class="container" style="max-width: 800px;">
	<div class="card mt-5 shadow-sm sm:rounded-lg" style="border-radius: 20px">
		<div class="card-body">
			@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form method="POST" action="/clients">
				@csrf
				<div class="form-group">
					<label for="dni">NIF</label>
					<input type="text" class="form-control" name="dni" pattern="[0-9]{8}[A-Z]{1}" oninput="this.value = this.value.toUpperCase()" />
					<small>Exemple: 12345678X</small>
				</div>
				<div class="form-group">
					<label for="nom_complet">Nom i cognoms</label>
					<input type="text" class="form-control" name="nom_complet" pattern="[A-Za-zÀ-ÿ ]+" required />
					<small>No pot contenir números ni caràcters especials.</small>
				</div>
				<div class="form-group">
					<label for="edat">Edat</label>
					<input type="number" class="form-control" name="edat" min="0" />
				</div>
				<div class="form-group">
					<label for="telefon">Telèfon</label>
					<input type="text" class="form-control" name="telefon" minlength="9" required />
					<small>Introdueixi un número de telèfon vàlid de 9 dígits</small>
				</div>
				<div class="form-group">
					<label for="adreca">Adreça</label>
					<input type="text" class="form-control" name="adreca" />
				</div>
				<div class="form-group">
					<label for="ciutat">Ciutat</label>
					<input type="text" class="form-control" name="ciutat" />
				</div>
				<div class="form-group">
					<label for="pais">País</label>
					<input type="text" class="form-control" name="pais" />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" />
				</div>
				<div class="row form-group">
					<div class="col-3 ">
						<label for="tipus_targeta">Tipus targeta</label>
						<select name="tipus_targeta" class="form-control">
							<option value="Dèbit">Dèbit</option>
							<option value="Crèdit">Crèdit</option>
						</select>
					</div>
					<div class="col">
						<label for="num_targeta">Núm. targeta</label>
						<input type="number" class="form-control" name="num_targeta" min="0" />
					</div>
				</div>
				<br />
				<button type="submit" class="btn btn-block btn-primary" style="border-radius: 15px">Envia</button>
			</form>
		</div>
	</div>
	<br />
	<div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
		<a href="{{ url('clients') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
			Torna al dashboard
		</a>
	</div>
	<br><br>
</div>
@endsection