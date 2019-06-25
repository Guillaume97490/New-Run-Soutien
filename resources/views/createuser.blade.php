@extends('layouts.layout')
@section('content')


<form action="/listusers" method="POST">
    @csrf
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" name="nom" required placeholder="Entrer nom">
        </div>

        @if ($errors->has('nom'))
            <span class="help-block">
                <strong class="text-danger"> {{ $errors->first('nom') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" name="prenom" required placeholder="Entrer prenom">
        </div>

        @if ($errors->has('prenom'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('prenom') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="text" class="form-control" name="phone" required placeholder="Entrer téléphone">
        </div>

        @if ($errors->has('phone'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('phone') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" name="email" required placeholder="Entrer adresse mail">
        </div>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" name="password" minlength="8" required placeholder="Entrer mot de passe">
        </div>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

@endsection
