@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Afegeix una nova reserva
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
        <form method="post" action="/reserves">
            @csrf
            <!-- https://laravel.com/docs/10.x/csrf -->
            <div class="form-group">
                <label for="dni">NIF</label>
                <input type="text" class="form-control" name="dni" />
            </div>
            <div class="form-group">
                <label for="codiHab">Codi d'habitació</label>
                <input type="text" class="form-control" name="codiHab" />
            </div>
            <div class="form-group">
                <label for="data_entrada">Data entrada</label>
                <input type="text" class="form-control" name="data_entrada" />
            </div>
            <div class="form-group">
                <label for="data_sortida">Data sortida</label>
                <input type="text" class="form-control" name="data_sortida" />
            </div>
            <div class="form-group">
                <label for="pensio">Pensió</label>
                <select name="pensio">
                    <option value="Només allotjament">Només allotjament</option>
                    <option value="Allotjament i esmorzar inclòs">Allotjament i esmorzar inclòs</option>
                    <option value="Mitja pensió">Mitja pensió</option>
                    <option value="Pensió completa">Pensió completa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="preu_dia">Preu dia</label>
                <input type="text" class="form-control" name="preu_dia" />
            </div>
            <div class="form-group">
                <label for="asseguranca">Assegurança</label>
                <select name="asseguranca">
                    <option value="Franquíca fins 500 Euros">Franquíca fins 500 Euros</option>
                    <option value="Franquíca fins 1000 Euros">Franquíca fins 1000 Euros</option>
                    <option value="Sense franquícia">Sense franquícia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard') }}">Torna al dashboard<a />
    </div>
</div>
@endsection