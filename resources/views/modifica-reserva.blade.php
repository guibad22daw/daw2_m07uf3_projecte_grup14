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
        <form method="post" action="{{ route('reserves.update', $dades_reserva->codiHab) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="dni">NIF</label>
				<input type="text" class="form-control" name="dni" value="{{ $dades_reserva->dni }}"/>
			</div>
            <div class="form-group">           
				<label for="nom">Codi habitació</label>
				<input type="text" class="form-control" name="codiHab" value="{{ $dades_reserva->codiHab }}" />
			</div>
            <div class="form-group">           
				<label for="data_entrada">Data entrada</label>
				<input type="text" class="form-control" name="data_entrada" value="{{ $dades_reserva->data_entrada }}"/>
			</div>
            <div class="form-group">           
				<label for="data_sortida">Data sortida</label>
				<input type="text" class="form-control" name="data_sortida" value="{{ $dades_reserva->data_sortida }}"/>
			</div>
			<div class="form-group">           
				<label for="pensio">Pensió</label>
				<select name="pensio">					
					<option value="Allotjament" {{ $dades_reserva->pensio == "Allotjament" ? 'selected' : ''}}>Només allotjament</option>
					<option value="Allotjament i esmorzar inclòs" {{ $dades_reserva->pensio == "Allotjament i esmorzar inclòs" ? 'selected' : ''}}>Allotjament i esmorzar inclòs</option>				    
					<option value="Mitja pensió" {{ $dades_reserva->pensio == "Mitja pensió" ? 'selected' : ''}}>Mitja pensió</option>				    
					<option value="Pensió completa" {{ $dades_reserva->pensio == "Pensió completa" ? 'selected' : ''}}>Pensió completa</option>				    
				</select>
			</div>
            <div class="form-group">           
				<label for="preu_dia">Preu dia</label>
				<input type="text" class="form-control" name="preu_dia" value="{{ $dades_reserva->preu_dia }}"/>
			</div>
            <div class="form-group">           
				<label for="asseguranca">Assegurança</label>
				<select name="asseguranca">					
					<option value="Franquíca fins 500 Euros" {{ $dades_reserva->asseguranca == "Franquíca fins 500 Euros" ? 'selected' : ''}}>Franquíca fins 500 Euros</option>
					<option value="Franquíca fins 1000 Euros" {{ $dades_reserva->asseguranca == "Franquíca fins 1000 Euros" ? 'selected' : ''}}>Franquíca fins 1000 Euros</option>				    
					<option value="Sense franquícia" {{ $dades_reserva->asseguranca == "Sense franquícia" ? 'selected' : ''}}>Sense franquícia</option>				    
				</select>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('reserva') }}">Accés directe a la Llista d'empleats</a
@endsection
