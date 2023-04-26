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
        <form method="post" action="{{ route('habitacio.update', $dades_habitacio->codiHab) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="nom">Codi habitació</label>
				<input type="text" class="form-control" name="codiHab" value="{{ $dades_habitacio->codiHab }}" />
			</div>
			<div class="form-group">           
				<label for="cognoms">Capacitat</label>
				<input type="text" class="form-control" name="capacitat" value="{{ $dades_habitacio->capacitat }}"/>
			</div>
			<div class="form-group">           
				<label for="mida">Mida</label>
				<select name="mida">					
					<option value="Petita" {{ $dades_habitacio->mida == "Petita" ? 'selected' : ''}}>Petita</option>
					<option value="Normal" {{ $dades_habitacio->mida == "Normal" ? 'selected' : ''}}>Normal</option>				    			    
					<option value="Gran" {{ $dades_habitacio->mida == "Gran" ? 'selected' : ''}}>Gran</option>				    			    
				</select>
			</div>
			<div class="form-group">           
				<label for="vistes">Vistes</label>
				<select name="vistes">					
					<option value="Interior" {{ $dades_habitacio->vistes == "Interior" ? 'selected' : ''}}>Interior</option>
					<option value="Mar" {{ $dades_habitacio->vistes == "Mar" ? 'selected' : ''}}>Mar</option>				    			    
					<option value="Muntanya" {{ $dades_habitacio->vistes == "Muntanya" ? 'selected' : ''}}>Muntanya</option>				    			    
				</select>
			</div>
			<div class="form-group">           
				<label for="pensio">Pensió</label>
				<select name="pensio">					
					<option value="Allotjament" {{ $dades_habitacio->pensio == "Allotjament" ? 'selected' : ''}}>Només allotjament</option>
					<option value="Allotjament i esmorzar inclòs" {{ $dades_habitacio->pensio == "Allotjament i esmorzar inclòs" ? 'selected' : ''}}>Allotjament i esmorzar inclòs</option>				    
					<option value="Mitja pensió" {{ $dades_habitacio->pensio == "Mitja pensió" ? 'selected' : ''}}>Mitja pensió</option>				    
					<option value="Pensió completa" {{ $dades_habitacio->pensio == "Pensió completa" ? 'selected' : ''}}>Pensió completa</option>				    
				</select>
			</div>
			<div class="form-group">           
				<label for="llits">Llits</label>
				<select name="llits">					
					<option value="Individuals" {{ $dades_habitacio->llits == "Individuals" ? 'selected' : ''}}>Individuals</option>
					<option value="Matrimoni" {{ $dades_habitacio->llits == "Matrimoni" ? 'selected' : ''}}>Matrimoni</option>				    			    
				</select>
			</div>
			<div class="form-group">           
				<label for="n_llits">Nombre de llits</label>
				<input type="number" class="form-control" name="n_llits"  value="{{ $dades_habitacio->n_llits }}"/>
			</div>    
			<div class="form-group">           
				<label for="terrassa">Terrassa</label>
				<select name="terrassa">					
					<option value="1" {{ $dades_habitacio->terrassa == "1" ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_habitacio->terrassa == "0" ? 'selected' : ''}}>No</option>				    			    
				</select>
			</div>
			<div class="form-group">           
				<label for="calefaccio">Calefaccio</label>
				<select name="calefaccio">					
					<option value="1" {{ $dades_habitacio->calefaccio == "1" ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_habitacio->calefaccio == "0" ? 'selected' : ''}}>No</option>				    			    
				</select>
			</div>
			<div class="form-group">           
				<label for="aire_acondicionat">Aire acondicionat</label>
				<select name="aire_acondicionat">					
					<option value="1" {{ $dades_habitacio->aire_acondicionat == "1" ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_habitacio->aire_acondicionat == "0" ? 'selected' : ''}}>No</option>				    			    
				</select>
			</div>
			<div class="form-group">           
				<label for="nens">Nens</label>
				<select name="nens">					
					<option value="1" {{ $dades_habitacio->nens == "1" ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_habitacio->nens == "0" ? 'selected' : ''}}>No</option>				    			    
				</select>
			</div>
			<div class="form-group">           
				<label for="animals">Animals</label>
				<select name="animals">					
					<option value="1" {{ $dades_habitacio->animals == "1" ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_habitacio->animals == "0" ? 'selected' : ''}}>No</option>				    			    
				</select>
			</div>    
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('habitacio') }}">Accés directe a la Llista d'empleats</a
@endsection
