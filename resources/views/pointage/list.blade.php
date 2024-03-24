@extends('layouts.app')

@section('content')
    @component('components.menu')
    @endcomponent

    <!-- Le contenu spécifique de chaque page sera ici -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des pointages') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Heure de pointage</th>
                                {{-- Ajoutez ici les en-têtes pour les autres colonnes --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pointages as $pointage)
                                <tr>
                                    <th scope="row">{{ $pointage->id }}</th>
                                    <td>{{ $pointage->user->nom }}</td>
                                    <td>{{ $pointage->heure_pointage }}</td>
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
