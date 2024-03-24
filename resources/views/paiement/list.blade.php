@extends('layouts.app')

@section('content')
    @component('components.menu')
    @endcomponent

    <!-- Le contenu spécifique de chaque page sera ici -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des paiements') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Montant</th>
                                {{-- Ajoutez ici les en-têtes pour les autres colonnes --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paiements as $paiement)
                            <tr>
                                <th scope="row">{{ $paiement->id }}</th>
                                <td>{{ $paiement->user->nom }}</td>
                                <td>{{ $paiement->montant }}</td>
                                {{-- Ajoutez ici les cellules pour les autres colonnes --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- @extends('layouts.app')

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

</div>
@endsection --}}
