<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EventController;
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

Route::get('/', [ContatoController::class, 'index'])->name('contato.index');
Route::get('/contato/create',[ContatoController::class, 'create'])->name('contato.create');
Route::get('/contato/{id}', [ContatoController::class, 'show'])->name('contato.show');
Route::post('/contato', [ContatoController::class, 'store']);
Route::delete('/contato/{id}',[ContatoController::class, 'destroy'])->name('contato.destroy');
Route::get('/contato/edit/{id}', [ContatoController::class, 'edit'])->name('contato.edit');
Route::put('/contato/update/{id}', [ContatoController::class, 'update'])->name('contato.update');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ContatoController::class, 'dashboard'])->name('dashboard');
});