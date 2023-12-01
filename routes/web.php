<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test route';
});

Route::get('/equipes', [EquipeController::class, 'index']);
Route::get('/equipes/{equipeId}', [EquipeController::class, 'show']);
Route::get('/ajouter-equipe', [EquipeController::class, 'ajouterEquipe']);
