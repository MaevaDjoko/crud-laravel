<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AccueilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/update-etudiant/{id}', [EtudiantController::class, 'updateEtudiants']);
Route::post('/update/traitement', [EtudiantController::class, 'updateEtudiantstraitement']);

Route::get('/etudiant', [EtudiantController::class, 'listeEtudiants']);
Route::get('/ajouter', [EtudiantController::class, 'ajouterEtudiants']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouterEtudiantstraitement'])->name('/ajouter/traitement');

Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'deleteEtudiants']);

Route::post('/connexion/traitement', [AccueilController::class, 'connexionAdmin']);
Route::get('/connexion', [AccueilController::class, 'connAd']);
Route::get('/inscrire', [AccueilController::class, 'insAd']);
Route::post('/inscrire/traitement', [AccueilController::class, 'inscrireAdmin']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
