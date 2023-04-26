@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>
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
            @method('PATCH')
            <div class="form-group">           
				<label for="nif">NIF</label>
				<input type="text" class="form-control" name="dni" value="{{ $dades_client->dni }}" />
			</div>
			<div class="form-group">           
				<label for="nom_complet">Nom i cognoms</label>
				<input type="text" class="form-control" name="nom_complet" value="{{ $dades_client->nom_complet }}"/>
			</div>
			<div class="form-group">           
				<label for="edat">Edat</label>
				<input type="number" class="form-control" name="edat" value="{{ $dades_client->edat }}"/>
			</div>
			<div class="form-group">           
				<label for="telefon">Telefon</label>
				<input type="number" class="form-control" name="telefon" value="{{ $dades_client->telefon }}"/>
			</div>
			<div class="form-group">
				<label for="adreca">Adreça</label>
				<input type="text" class="form-control" name="adreca" value="{{ $dades_client->adreca }}"/>
			</div>
			<div class="form-group">
				<label for="ciutat">Ciutat</label>
				<input type="text" class="form-control" name="ciutat" value="{{ $dades_client->ciutat }}"/>
			</div>
			<div class="form-group">
				<label for="pais">País</label>
				<input type="text" class="form-control" name="pais" value="{{ $dades_client->pais }}"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" value="{{ $dades_client->email }}"/>
			</div>
			<div class="form-group">
				<label for="tipus_targeta">Tipus targeta</label>
				<select name="tipus_targeta">					
					<option value="Dèbit" {{ $dades_client->tipus_targeta == "Dèbit" ? 'selected' : ''}}>Dèbit</option>
					<option value="Crèdit" {{ $dades_client->tipus_targeta == "Crèdit" ? 'selected' : ''}}>Crèdit</option>				    			    
				</select>
			</div>
			<div class="form-group">
				<label for="num_targeta">Número de targeta</label>
				<input type="number" class="form-control" name="num_targeta" value="{{ $dades_client->num_targeta }}"/>
			</div>    
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('habitacio') }}">Accés directe a la Llista d'empleats</a
@endsection
