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
Route::get('/', [ContatoController::class, 'index'])->name('contatoIndex');
Route::get('/create',  [ContatoController::class, 'create'])->name('paginaAddContato');
Route::get('/list',  [ContatoController::class, 'list'])->name('paginaListaContato');
Route::post('/novo-contato', [ContatoController::class, 'store'])->name('formContato');
Route::get('/contato/{id}', [ContatoController::class, 'show'])->name('visualizarInfoContato');
Route::get('/edit/{id}', [ContatoController::class,'edit'])->name('editarContato');
Route::delete('/{id}', [ContatoController::class,'destroy'])->name('deletarContato');
Route::put('/update/{id}',[ContatoController::class,'update'])->name('atualizarContato');

/* Route::prefix('contato')->group(function()  {
    Route::get('/edit/{id}', 'ContatoController@edit')->name('editarContato');
    Route::delete('/{id}', 'ContatoController@destroy')->name('deletarContato');
    Route::put('/update/{id}','ContatoController@update')->name('atualizarContato');
});
 */

/* Route::controller(ContatoController::class)->group(function() {
});
 */

/* Route::get('/sair', [ContatoController::class, 'logout'])->name('logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ContatoController::class, 'dashboard'])->name('dashboard');
}); */