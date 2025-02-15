<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestEventController;
use App\Http\Controllers\GameController;

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

Route::get('/test', [TestEventController::class, 'testingEvent']);

Route::get('/games', [GameController::class, 'index'])->name('input.score');
Route::get('/games/log', [GameController::class, 'log'])->name('log.score');
Route::get('/games/public', [GameController::class, 'public'])->name('public');
Route::get('/games/show/{id}', [GameController::class, 'show'])->name('show.score');
Route::get('/games/showPenonton/{id}', [GameController::class, 'showPenonton'])->name('show.scorePenonton');
Route::post('/games/{game}/score', [GameController::class, 'updateScore']);