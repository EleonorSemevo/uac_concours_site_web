<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualiteCrudController;

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

Route::get('/', function () {
    return view('actualite');
});

Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/accueil/actualite', function () {
    return view('actualite');
});
Route::get('/accueil/publication', function () {
    return view('publication');
});

Route::get('/accueil/galerie', function () {
    return view('galerie');
});

Route::get('/a-propos', function () {
    return view('apropos');
});

Route::get('/ressource/trucs-et-astuces', function () {
    return view('truc_astuce');
});

Route::get('/ressource/faq', function () {
    return view('faq');
});


Route::get('/user/register/etudiant', function () {
    return view('register_etudiant');
});

Route::get('/user/register/partenaire', function () {
    return view('register_partenaire');
});

Route::get('/opportunites/stages', function () {
    return view('stage');
});

Route::get('/opportunites/emplois', function () {
    return view('emplois');
});

Route::get('/enregistrer/type', function () {
    return view('choix_user');
});

Route::get('/accueil/article1', function () {
    return view('article1');
});

Route::get('/contact/contacter-conseiller-emploi', function () {
    return view('contacter_conseiller');
});

Route::get('/partenaires/entreprises', function () {
    return view('entreprise');
});

Route::get('/partenaires/institutions', function () {
    return view('institution');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/accueil/actualite', [App\Http\Controllers\ActualiteController::class, 'index']);

