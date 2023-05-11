@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Creació d'una nova habitació</h2>
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
            <form method="post" action="/habitacions">
                @csrf
                <!-- https://laravel.com/docs/10.x/csrf -->
                <div class="form-group">
                    <label for="codiHab">Codi d'habitació</label>
                    <input type="text" class="form-control" name="codiHab" pattern="[0-9]{4}[A-Z]{3}" oninput="this.value = this.value.toUpperCase()" required />
                    <small>El codi d'habitació ha de tenir 3 lletres i 4 xifres. Exemple: 1234ABC</small>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="mida">Mida</label>
                        <select class="form-control" name="mida">
                            <option value="Petita">Petita</option>
                            <option value="Normal">Normal</option>
                            <option value="Gran">Gran</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="capacitat">Capacitat</label>
                        <select class="form-control" name="capacitat">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="vistes">Vistes</label>
                    <select class="form-control" name="vistes">
                        <option value="Interior">Interior</option>
                        <option value="Mar">Mar</option>
                        <option value="Muntanya">Muntanya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pensio">Pensió</label>
                    <select class="form-control" name="pensio">
                        <option value="Només allotjament">Només allotjament</option>
                        <option value="Allotjament i esmorzar inclòs">Allotjament i esmorzar inclòs</option>
                        <option value="Mitja pensió">Mitja pensió</option>
                        <option value="Pensió completa">Pensió completa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="llits">Llits</label>
                    <select class="form-control" name="llits">
                        <option value="Individuals">Individuals</option>
                        <option value="Matrimoni">Matrimoni</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="n_llits">Nombre de llits</label>
                    <input type="number" class="form-control" name="n_llits" min="0" />
                </div>
                <div class="form-group">
                    <label for="terrassa">Terrassa</label>
                    <select class="form-control" name="terrassa">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="calefaccio">Calefacció</label>
                        <select class="form-control" name="calefaccio">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="aire_acondicionat">Aire acondicionat</label>
                        <select class="form-control" name="aire_acondicionat">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="nens">Nens</label>
                        <select class="form-control" name="nens">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="animals">Animals</label>
                        <select class="form-control" name="animals">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <br />
                <button type="submit" class="btn btn-block btn-primary" style="border-radius: 15px;">Envia</button>
            </form>
        </div>
    </div>
    <br />
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
        <a href="{{ url('habitacions') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna al dashboard
        </a>
    </div>
    <br><br>
</div>
@endsection