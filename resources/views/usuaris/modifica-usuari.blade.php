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
        <form method="post" action="{{ route('user.update', $dades_user->id) }}">
			@csrf
            @method('PUT')
            <div class="form-group">           
				<label for="nom_complet">Nom i cognoms</label>
				<input type="text" class="form-control" name="nom_complet" value="{{ $dades_user->nom_complet }}" />
			</div>
			<div class="form-group">           
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" value="{{ $dades_user->email }}"/>
			</div>
			<div class="form-group">           
				<label for="password">Password</label>
				<input type="text" class="form-control" name="password" value="{{ $dades_user->password }}"/>
			</div>
			<div class="form-group">           
				<label for="tipus">Tipus</label>
				<input type="text" class="form-control" name="tipus" value="{{ $dades_user->tipus }}"/>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'empleats</a
@endsection
