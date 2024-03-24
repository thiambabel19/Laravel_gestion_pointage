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
                            <th scope="col"> Heure du Travail</th>
                            <th scope="col">Date du paiement</th>
                            <th scope="col">Montant du Paiement</th>
                            <th scope="col">Employes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paiements as $paiement)
                            <tr>
                                <td class="align-middle">{{ $paiement->heureTravail }}H</td>
                                <td class="align-middle">{{ $paiement->datePaiement }}</td>
                                <td class="align-middle">{{ $paiement->montant }}</td>
                                <td class="align-middle">
                                    @foreach ($users as $user)
                                        {{ $user->prenom }} {{ $user->nom }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('paiements.create') }}" class="btn btn-success">Ajouter un Paiement</a>
            </div>
        </div>
    </div>
@endsection
