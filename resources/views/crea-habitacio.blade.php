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
        <form method="post" action="/habitacions">
            @csrf
            <!-- https://laravel.com/docs/10.x/csrf -->
            <div class="form-group">
                <label for="codiHab">Codi d'habitació</label>
                <input type="text" class="form-control" name="codiHab" />
            </div>
            <div class="form-group">
                <label for="capacitat">Capacitat</label>
                <input type="number" class="form-control" name="capacitat" min="1" max="6"/>
            </div>
            <div class="form-group">
                <label for="mida">Mida</label>
                <select name="mida">
                    <option value="Petita">Petita</option>
                    <option value="Normal">Normal</option>
                    <option value="Gran">Gran</option>
                </select>
            </div>
            <div class="form-group">
                <label for="vistes">Vistes</label>
                <select name="vistes">
                    <option value="Interior">interior</option>
                    <option value="Mar">Mar</option>
                    <option value="Muntanya">Muntanya</option>
                </select>
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
                <label for="llits">Llits</label>
                <select name="llits">
                    <option value="Individuals">Individuals</option>
                    <option value="Matrimoni">Matrimoni</option>
                </select>
            </div>
            <div class="form-group">
                <label for="n_llits">Nombre de llits</label>
                <input type="number" class="form-control" name="n_llits" />
            </div>                                   
            <div class="form-group">
                <label for="terrassa">Terrassa</label>
                <select name="terrassa">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="calefaccio">Calefacció</label>
                <select name="calefaccio">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="aire_acondicionat">Aire acondicionat</label>
                <select name="aire_acondicionat">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nens">Nens</label>
                <select name="nens">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="animals">Animals</label>
                <select name="animals">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
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