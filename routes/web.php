<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use App\Models\Joueur;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/','/equipe');

Route::resource('/equipe', EquipeController::class);

Route::resource('/equipe/{equipe}/joueur', JoueurController::class);

// route::get('/equipe/{equipe}/create/{joueur}',[JoueurController::class,'create']);