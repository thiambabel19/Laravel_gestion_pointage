<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GESTION POINTAGE')</title>
    <!-- Ajoutez ici vos liens CSS, scripts, etc. -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Exemple de lien vers un fichier CSS local -->
    <!-- link href="{{ asset('css/style.css') }}" rel="stylesheet" -->
</head>

<body>
    <header>
        <Ajoutez ici votre en-tête commun à toutes les pages -->
        <!--nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        </nav-->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Ajoutez ici votre pied de page commun à toutes les pages -->
    </footer>

    <!-- Ajoutez ici vos scripts JavaScript, jQuery, etc. -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
