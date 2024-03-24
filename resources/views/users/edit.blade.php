@extends('layouts.app')

@section('content')
    @component('components.menu')
    @endcomponent

    <!-- Le contenu spécifique de chaque page sera ici -->
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Modifier l'utilisateur</h3>
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>
                            <div class="form-group">
                                <label for="cni">CNI</label>
                                <input type="text" class="form-control" id="cni" name="cni" required>
                            </div>
                            <div class="form-group">
                                <label for="horaire">Horaire</label>
                                <input type="text" class="form-control" id="horaire" name="horaire" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="qrcode">QR Code</label>
                                <input type="text" class="form-control" id="qrcode" name="qrcode" required>
                            </div>
                            <div class="form-group">
                                <label for="cjm">CJM</label>
                                <input type="text" class="form-control" id="cjm" name="cjm" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profil">Profil</label>
                                <select class="form-control" id="profil" name="profil" required>
                                    <option value="">Sélectionner un profil</option>
                                    <option value="administrateur">Administrateur</option>
                                    <option value="employe">Employe</option>

                                    <!-- Ici, vous pouvez ajouter des options de sélection de profil -->
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- <div class="col-md-6">
                        <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" required>
                        </div>
                    </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="statusCompte">Statut compte</label>
                                <select class="form-control" id="statusCompte" name="statusCompte" required>
                                    <option value="">Etat du compte</option>
                                    <option value="active">Activite</option>
                                    <option value="desactive">Desactive</option>

                                    <!-- Ici, vous pouvez ajouter des options de sélection de profil -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 offset-5 mt-2">
                        <button type="submit"
                            class="btn btn-white bg-dark text-white ms-3"><strong>Modifier</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
