<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
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

/*get*/

Route::get('/', [NavController::class, 'welcome']);
Route::get('soinTraditionnel', [NavController::class, 'care']);
Route::get('kinesiologie', [NavController::class, 'kinesiology']);
Route::get('coaching', [NavController::class, 'coaching']);
Route::get('massages', [NavController::class, 'massages']);
Route::get('evenements', [NavController::class, 'events']);
Route::get('services', [NavController::class, 'services']);
Route::get('formules', [NavController::class, 'formulas']);
Route::get('bonCadeau', [NavController::class, 'gifts']);
Route::get('/contact', [NavController::class, 'contact']);
Route::get('/nouveauMassage', [NavController::class, 'newMassage']);
Route::get('/listeMassages', [NavController::class, 'listMassages']);
Route::get('updateMassage{id}', [NavController::class, 'updateMassage']);
Route::get('/nouvelEvenement', [NavController::class, 'newEvent']);


/*post*/
Route::post('/addNewMassage', [ActionController::class, 'addNewMassage']);
Route::post('/updateMassage{id}', [ActionController::class, 'updateMassage']);
Route::post('/deleteMassage', [ActionController::class, 'deleteMassage']);
Route::post('/addNewEvent', [ActionController::class, 'addNewEvent']);
