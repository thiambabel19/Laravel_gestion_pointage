<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@extends('layouts.app')

@section('content')
    @component('components.menu')
    @endcomponent

    <!-- Le contenu spécifique de chaque page sera ici -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card-group shadow rounded py-2">
                    <div class="card-body bg-dark text-white">
                        <h3 class="card-title text-center">PAIEMENT</h3>
                        <form action="{{ route('paiements.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="heureTravail">Heure Travail :</label>
                                        <input type="number" id="heureTravail" name="heureTravail">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="datePaiement">Date Paiement :</label>
                                        <input type="date" id="datePaiement" name="datePaiement">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cjm">Cout Moyen :</label>
                                        <input type="number" id="cjm" name="cjm" value="2000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userId">Utilisateur</label>
                                    <select class="form-control" id="userId" name="userId" required>
                                        <option value="">Sélectionner un utilisateur</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->prenom }} {{ $user->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                    </div>
                </div>
                <div class="col-md-12 offset-5 mt-2">
                    <button type="submit" class="btn btn-white bg-dark text-white ms-3"><strong>Ajouter</strong></button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
