@extends('disseny')
@section('content')
<h1>Llista d'habitacions</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="table-primary">
          <td>Codi Habitació</td>
          <td>Capacitat</td>
          <td>Mida</td>
          <td>Pensió</td>
          <td>Vistes</td>
          <td>Llits</td>
          <td>Núm. llits</td>
          <td>Terrassa</td>
          <td>Calefacció</td>
          <td>Aire acondicionat</td>
          <td>Nens</td>
          <td>Animals</td>    
          <td>Opcions</td>    
        </tr>
    </thead>
    <tbody>
        @foreach($dades_habitacions as $habitacio)
        <tr>
            <td>{{$habitacio->codiHab}}</td>
            <td>{{$habitacio->capacitat}}</td>
            <td>{{$habitacio->mida}}</td>
            <td>{{$habitacio->pensio}}</td>
            <td>{{$habitacio->vistes}}</td>
            <td>{{$habitacio->llits}}</td>
            <td>{{$habitacio->n_llits}}</td>
            <td>{{$habitacio->terrassa == "1" ? 'Sí':'No'}}</td>
            <td>{{$habitacio->calefaccio == "1" ? 'Sí':'No'}}</td>
            <td>{{$habitacio->aire_acondicionat == "1" ? 'Sí':'No'}}</td>
            <td>{{$habitacio->nens == "1" ? 'Sí':'No'}}</td>
            <td>{{$habitacio->animals == "1" ? 'Sí':'No'}}</td>
            <td class="text-left">
				      <a href="{{ route('habitacions.edit', $habitacio->codiHab)}}" class="btn btn-primary btn-sm">Edita</a>
				      <form action="{{ route('habitacions.destroy', $habitacio->codiHab)}}" method="post" style="display: inline-block">
					      @csrf
					      @method('DELETE')
					      <button class="btn btn-danger btn-sm" type="submit">
						      Esborra
					      </button>					
				      </form>
				      <a href="{{ route('habitacions.show', $habitacio->codiHab)}}" class="btn btn-info btn-sm">Mostra</a>
			      </td>            
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>  
<div>
@endsection
