<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;
use App\Models\User;

class PaiementController extends Controller
{

    public function index()
    {
        $users = User::all();
        // Récupérer tous les paiements
        $paiements = Paiement::all();
        return view('paiement.index', compact('paiements', 'users'));
    }


    public function create()
    {
        $users = User::all();
        // Afficher le formulaire pour créer un nouveau paiement
        return view('paiement.create', compact('users'));
    }


    public function store(Request $request)
    {

        $montant =  $request->cjm * $request->heureTravail;
        $paiement = new Paiement();
        $paiement->userId = $request->userId;
        $paiement->cjm = $request->cjm;
        $paiement->heureTravail = $request->heureTravail;
        $paiement->montant = $montant;
        $paiement->datePaiement = $request->datePaiement;
        $paiement->save();

        return redirect()->route('paiements.index')
            ->with('success', 'Utilisateur créé avec succés');
    }



    public function edit($id)
    {
        // Récupérer le paiement à mettre à jour
        $paiement = Paiement::findOrFail($id);
        return view('paiement.update', compact('paiement'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'user_id' => 'required',
            'montant' => 'required|numeric',
            'date_paiement' => 'required|date',
        ]);

        $paiement = Paiement::findOrFail($id);
        $paiement->update($validatedData);
        return redirect()->route('paiement.index')->with('success', 'Paiement mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $paiement = Paiement::findOrFail($id);
        $paiement->delete();
        return redirect()->route('paiement.index')->with('success', 'Paiement supprimé avec succès.');
    }
}
