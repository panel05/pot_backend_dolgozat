<?php

use App\Http\Controllers\ClubController;
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



//controllerek
Route::get('/api/clubs', [ClubController::class, 'index']);
Route::get('/api/clubs/{id}', [ClubController::class, 'show']);
Route::post('/api/clubs', [ClubController::class, 'store']);
Route::put('/api/clubs/{id}', [ClubController::class, 'update']);
Route::delete('/api/clubs/{id}', [ClubController::class, 'destroy']);

//view-k
Route::get('/clubs/new', [ClubController::class, 'newView']);
Route::get('clubs/edit/{id}', ClubController::class, 'editView');
Route::get('clubs/list', [ClubController::class, 'listView']);