<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pointage;
use App\Models\User;

class PointageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // Récupérer tous les pointages
        $pointages = Pointage::all();
        return view('pointage.index', compact('pointages', 'users'));
    }
    public function create()
    {

        $users = User::all();
        // Afficher le formulaire pour créer un nouveau pointage
        return view('pointage.create', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'HA' => 'required|date_format:H:i',
            'HD' => 'required|date_format:H:i',
            'dateJour' => 'required|date',
            'userId' => 'required|exists:users,id',
        ]);

        Pointage::create([
            'HA' => $request->HA,
            'HD' => $request->HD,
            'dateJour' => $request->dateJour,
            'userId' => $request->userId,
        ]);
        return redirect()->route('pointages.index')->with('success', 'Pointage créé avec succès.');
    }
}
