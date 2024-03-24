@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pointage</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pointage.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">Utilisateur</label>

                                <div class="col-md-6">
                                    <select id="user_id" class="form-control @error('user_id') is-invalid @enderror" name="user_id" required>
                                        <option value="">Sélectionnez un utilisateur</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
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
                                <label for="time" class="col-md-4 col-form-label text-md-right">Heure</label>

                                <div class="col-md-6">
                                    <input id="time" type="time" class="form-control @error('time') is-invalid @enderror" name="time" required>

                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer le pointage
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
