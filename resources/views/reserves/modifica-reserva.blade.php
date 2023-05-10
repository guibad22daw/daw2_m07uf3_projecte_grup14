@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Modifica les dades de la reserva</h2>
<p class="mt-3 text-center">Realitza modificacions als camps que es desitgin</p>
<div class="container" style="max-width: 700px;">
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
			<form method="post" action="{{ route('reserves.update', $dades_reserva->rid) }}">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="dni">NIF</label>
					<input type="text" class="form-control" name="dni" value="{{ $dades_reserva->dni }}" readonly />
				</div>
				<div class="form-group">
					<label for="nom">Codi habitació</label>
					<input type="text" class="form-control" name="codiHab" value="{{ $dades_reserva->codiHab }}" readonly />
				</div>
				<div class="row form-group">
					<div class="col">
						<label for="data_entrada">Data d'entrada</label>
						<input type="date" class="form-control" name="data_entrada" value="{{ $dades_reserva->data_entrada }}" />
					</div>
					<div class="col">
						<label for="data_sortida">Data de sortida</label>
						<input type="date" class="form-control" name="data_sortida" value="{{ $dades_reserva->data_sortida }}" />
					</div>
				</div>
				<div class="form-group">
					<label for="pensio">Pensió</label>
					<select name="pensio" class="form-control">
						<option value="Només allotjament" {{ $dades_reserva->pensio == "Només allotjament" ? 'selected' : ''}}>Només allotjament</option>
						<option value="Allotjament i esmorzar inclòs" {{ $dades_reserva->pensio == "Allotjament i esmorzar inclòs" ? 'selected' : ''}}>Allotjament i esmorzar inclòs</option>
						<option value="Mitja pensió" {{ $dades_reserva->pensio == "Mitja pensió" ? 'selected' : ''}}>Mitja pensió</option>
						<option value="Pensió completa" {{ $dades_reserva->pensio == "Pensió completa" ? 'selected' : ''}}>Pensió completa</option>
					</select>
				</div>
				<div class="form-group">
					<label for="preu_dia">Preu dia</label>
					<input type="number" class="form-control" name="preu_dia" value="{{ $dades_reserva->preu_dia }}" min="0"/>
				</div>
				<div class="form-group mb-4">
					<label for="asseguranca">Assegurança</label>
					<select name="asseguranca" class="form-control">
						<option value="Franquícia fins 500 euros" {{ $dades_reserva->asseguranca == "Franquícia fins 500 euros" ? 'selected' : ''}}>Franquícia fins 500 euros</option>
						<option value="Franquícia fins 1000 euros" {{ $dades_reserva->asseguranca == "Franquícia fins 1000 euros" ? 'selected' : ''}}>Franquícia fins 1000 euros</option>
						<option value="Sense franquícia" {{ $dades_reserva->asseguranca == "Sense franquícia" ? 'selected' : ''}}>Sense franquícia</option>
					</select>
				</div>
				<button type="submit" class="btn btn-block btn-primary">Envia</button>
			</form>
		</div>
	</div>
	<br />
	<div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
		<a href="{{ url('reserves/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
			Torna al dashboard
		</a>
	</div>
	<br><br>
</div>
@endsection