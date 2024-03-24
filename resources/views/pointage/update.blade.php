@extends('layouts.app')

@section('content')
    @component('components.menu')
    @endcomponent

    <!-- Le contenu spécifique de chaque page sera ici -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier un pointage') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pointages.update', $pointage->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="user_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>

                            <div class="col-md-6">
                                <select id="user_id" class="form-control @error('user_id') is-invalid @enderror"
                                    name="user_id" required>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            @if ($pointage->user_id == $user->id) selected @endif>{{ $user->nom }}</option>
                                    @endforeach
                                </select>

                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="heure_pointage"
                                class="col-md-4 col-form-label text-md-right">{{ __('Heure de pointage') }}</label>

                            <div class="col-md-6">
                                <input id="heure_pointage" type="datetime-local"
                                    class="form-control @error('heure_pointage') is-invalid @enderror" name="heure_pointage"
                                    value="{{ old('heure_pointage', $pointage->heure_pointage) }}" required>

                                @error('heure_pointage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <Ajoutez ici votre en-tête commun à toutes les pages -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">GESTION POINTAGE</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users.index') }}">Gestion des Utilisateurs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pointages.index') }}">Gestion du Pointage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('paiements.index') }}">Gestion des Paiements</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </header>
