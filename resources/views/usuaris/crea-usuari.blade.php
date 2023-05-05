@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Creació d'un nou usuari</h2>
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
            <form method="post" action="/usuaris">
                @csrf
                <div class="form-group">
                    <label for="nom_complet">Nom i cognoms</label>
                    <input type="text" class="form-control" name="nom_complet" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" />
                </div>
                <div class="form-group">
                    <label for="password">Contrasenya</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <div class="form-group">
                    <label for="tipus">Tipus</label>
                    <select name="tipus" class="form-control">
                        <option value="Gerent">Gerent</option>
                        <option value="Treballador">Treballador</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-block btn-primary" style="border-radius: 15px;">Envia</button>
            </form>
        </div>
    </div>
    <br />
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
        <a href="{{ url('usuaris') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna al dashboard
        </a>
    </div>
    <br><br>
</div>
@endsection