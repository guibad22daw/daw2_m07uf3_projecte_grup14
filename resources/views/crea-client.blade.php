@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Afegeix una nova habitació
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
        <form method="post" action="/clients">
            @csrf
            <div class="form-group">           
				<label for="nif">NIF</label>
				<input type="text" class="form-control" name="dni"/>
			</div>
			<div class="form-group">           
				<label for="nom_complet">Nom i cognoms</label>
				<input type="text" class="form-control" name="nom_complet"/>
			</div>
			<div class="form-group">           
				<label for="edat">Edat</label>
				<input type="number" class="form-control" name="edat"/>
			</div>
			<div class="form-group">           
				<label for="telefon">Telefon</label>
				<input type="number" class="form-control" name="telefon"/>
			</div>
			<div class="form-group">
				<label for="adreca">Adreça</label>
				<input type="text" class="form-control" name="adreca"/>
			</div>
			<div class="form-group">
				<label for="ciutat">Ciutat</label>
				<input type="text" class="form-control" name="ciutat"/>
			</div>
			<div class="form-group">
				<label for="pais">País</label>
				<input type="text" class="form-control" name="pais"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email"/>
			</div>
			<div class="form-group">
				<label for="tipus_targeta">Tipus targeta</label>
				<select name="tipus_targeta">					
					<option value="Dèbit">Dèbit</option>
					<option value="Crèdit">Crèdit</option>				    			    
				</select>
			</div>
            <div class="form-group">
				<label for="num_targeta">Núm. targeta</label>
				<input type="number" class="form-control" name="num_targeta"/>
			</div>
            <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard<a />
    </div>
</div>
@endsection