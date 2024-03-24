@extends('layouts.app')

@section('content')
    @component('components.menu')
    @endcomponent

    <!-- Le contenu spécifique de chaque page sera ici -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <h2>Liste des Pointages</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Heure d'arrivee </th>
                            <th scope="col">Heure de depart</th>
                            <th scope="col"> Date du jour</th>
                            <th scope="col"> Employe</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pointages as $pointage)
                            <tr>
                                <td class="align-middle">{{ $pointage->HA }}</td>
                                <td class="align-middle">{{ $pointage->HD }}</td>
                                <td class="align-middle">{{ $pointage->dateJour }}</td>
                                <td class="align-middle">
                                    @foreach ($users as $user)
                                        {{ $user->nom }} {{ $user->prenom }}
                                    @endforeach
                                </td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('pointages.create') }}" class="btn btn-success">Ajouter un Pointage</a>
            </div>
        </div>
    </div>
@endsection
