<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\PaiementController;
use App\Http\Middleware\Authenticate; // Exemple de middleware
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Routes pour les utilisateurs



// Route pour la page d'accueil
Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Routes pour les utilisateurs
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');
Route::post('/users.store', [UserController::class, 'store'])->name('users.store')->middleware('auth');
Route::post('/register', [RegisterController::class, 'register'])->name('register')->middleware('auth');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('auth');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');

// Pour le Pointage Controller
Route::get('/pointage', [PointageController::class, 'index'])->name('pointages.index')->middleware('auth');
Route::get('/pointage/create', [PointageController::class, 'create'])->name('pointages.create')->middleware('auth');
Route::post('/pointage.store', [PointageController::class, 'store'])->name('pointages.store')->middleware('auth');

// PAIEMENT CONTROLLER
Route::get('/paiement', [PaiementController::class, 'index'])->name('paiements.index')->middleware('auth');
Route::get('/paiement/create', [PaiementController::class, 'create'])->name('paiements.create')->middleware('auth');
Route::post('/paiement.store', [PaiementController::class, 'store'])->name('paiements.store')->middleware('auth');
Route::get('/paiement/{paiement}', [PaiementController::class, 'show'])->name('paiements.show')->middleware('auth');
Route::put('/paiement/{paiement}', [PaiementController::class, 'update'])->name('paiements.update')->middleware('auth');
Route::delete('/paiement/{paiement}', [PaiementController::class, 'destroy'])->name('paiements.destroy')->middleware('auth');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
