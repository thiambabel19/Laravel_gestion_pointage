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
                <h3 class="card-title text-center">POINTAGE</h3>
                <form action="{{ route('pointages.store') }}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="HA">Heure d'Arrivee :</label>
                        <input type="time" id="HA" name="HA" required>
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="HD">Heure de Depart :</label>
                        <input type="time" id="HD" name="HD" required>
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="dateJour">Heure :</label>
                        <input type="date" id="dateJour" name="dateJour">
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="userId">Utilisateur</label>
                      <select class="form-control" id="userId" name="userId" required>
                        <option value="">Sélectionner un utilisateur</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->prenom }} {{ $user->nom }}</option>
                        @endforeach
                      </select>
                    </div>

                  </div>
              </div>
            </div>
            <div class="col-md-12 offset-5 mt-2">
              <button type="submit" class="btn btn-white bg-dark text-white ms-3"><strong>Pointer</strong></button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection

