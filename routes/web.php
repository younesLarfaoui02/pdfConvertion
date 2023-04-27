<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FournisseurController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clients',ClientController::class);
Route::resource('fournisseurs',FournisseurController::class);
Route::resource('revenu',AchatController::class);
Route::resource('employees',EmployeeController::class);
Route::get('/revenu/get-produits-by-category/{id}',[AchatController::class,'get_produit']);
Route::get('/revenu/get-produits-info/{id}',[AchatController::class,'info_produit']);
Route::get('/revenu/get-price-by-qte/{produit_qte}',[AchatController::class,'get_price']);
Route::post('/validate',[AchatController::class,'valider_achat']);
