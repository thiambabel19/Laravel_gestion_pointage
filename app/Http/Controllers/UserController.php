<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;



class UserController extends Controller
{

    public function index()
    {
        $users = User::all(); // Utilisation du modèle User au lieu de Post
        return view('users.index', compact('users'));
    }

    public function app()
    {
        $users = User::all(); // Utilisation du modèle User au lieu de Post
        return view('users.app', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function show($id)
    {
        // Logique pour récupérer et afficher les détails de l'utilisateur avec l'ID donné
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }


    public function store(Request $request)
    {
        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        return redirect()->route('users.index')
            ->with('success', 'Utilisateur créé avec succés');
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $request['password'] = Hash::make($request['password']);
        $user->update($request->all());
        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::find($id); // Utilisation du modèle User au lieu de Post
        $user->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.'); // Modification du message de succès si nécessaire
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
