<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">GESTION POINTAGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    @if (Auth::user()->profil === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Gestion des Utilisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('paiements.index') }}">Gestion des Paiements</a>
                        </li>
                    @endif

                    @if (Auth::user()->profil === 'employe' || Auth::user()->profil === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pointages.index') }}">Gestion du Pointage</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('logout') }}">Déconnexion</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
