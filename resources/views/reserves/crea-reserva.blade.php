@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Creació d'una nova reserva</h2>
<p class="mt-3 text-center">Emplena tots els camps del formulari</p>
<div class="container" style="max-width: 700px;">
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
            <form method="POST" action="/reserves">
                @csrf
                <!-- https://laravel.com/docs/10.x/csrf -->
                <div class="form-group">
                    <label for="dni">NIF</label>
                    <input type="text" class="form-control" name="dni" pattern="[0-9]{8}[A-Z]{1}"/>
                    <small>Exemple: 12345678X</small>
                </div>
                <div class="form-group">
                    <label for="codiHab">Codi d'habitació</label>
                    <input type="text" class="form-control" name="codiHab" pattern="[0-9]{4}[A-Z]{3}" oninput="this.value = this.value.toUpperCase()" required />
                    <small>Exemple: 1234ABC</small>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="data_entrada">Data d'entrada</label>
                        <input type="date" class="form-control" name="data_entrada" />
                    </div>
                    <div class="col">
                        <label for="data_sortida">Data de sortida</label>
                        <input type="date" class="form-control" name="data_sortida" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="pensio">Pensió</label>
                    <select name="pensio" class="form-control">
                        <option value="Només allotjament">Només allotjament</option>
                        <option value="Allotjament i esmorzar inclòs">Allotjament i esmorzar inclòs</option>
                        <option value="Mitja pensió">Mitja pensió</option>
                        <option value="Pensió completa">Pensió completa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="preu_dia">Preu dia</label>
                    <input type="number" class="form-control" name="preu_dia" min="0"/>
                </div>
                <div class="form-group mb-4">
                    <label for="asseguranca">Assegurança</label>
                    <select name="asseguranca" class="form-control">
                        <option value="Franquícia fins 500 euros">Franquícia fins 500 euros</option>
                        <option value="Franquícia fins 1000 euros">Franquícia fins 1000 euros</option>
                        <option value="Sense franquícia">Sense franquícia</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-block btn-primary" style="border-radius: 15px;">Envia</button>
            </form>
        </div>
    </div>
    <br />
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
        <a href="{{ url('reserves') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna al dashboard
        </a>
    </div>
    <br><br>
</div>
@endsection