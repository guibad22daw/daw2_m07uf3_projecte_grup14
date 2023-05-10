@extends('disseny')
@section('content')
<h2 class="mt-5 text-center">Modifica les dades de l'habitació</h2>
<p class="mt-3 text-center">Realitza modificacions als camps que es desitgin</p>
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
            <form method="post" action="{{ route('user.update', $dades_user->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nom_complet">Nom i cognoms</label>
                    <input type="text" class="form-control" name="nom_complet" value="{{ $dades_user->nom_complet }}" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $dades_user->email }}" />
                </div>
                <div class="form-group">
                    <label for="password">Contrasenya</label>
                    <input type="password" class="form-control" name="password" value="{{ $dades_user->password }}" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" title="La contrasenya ha de tenir un mínim de 8 caràcters, 1 majúscula, 1 minúscula, 1 número i 1 símbol."/>
                </div>
                <div class="form-group">
                    <label for="tipus">Tipus</label>
                    <input type="text" class="form-control" name="tipus" value="{{ $dades_user->tipus }}" />
                </div>
                <button type="submit" class="btn btn-block btn-primary">Envia</button>
            </form>
        </div>
    </div>
    <br />
    <div style="display: flex; align-items: center; justify-content: center; gap: 20px;" class="mt-3">
        <a href="{{ url('usuaris/visualitza') }}" style="width: 200px; border-radius: 15px;" class="btn btn-primary btn">
            Torna enrere
        </a>
    </div>
    <br><br>
</div>
@endsection