<?php

use App\Http\Controllers\PessoaController;
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

Route::prefix('pessoas')->group(function(){
    Route::get('/', [PessoaController::class, 'index'])->name('pessoa.index');
    Route::get('/create', [PessoaController::class, 'create'])->name('pessoa.create');
    Route::post('/', [PessoaController::class, 'store'])->name('pessoa.store');

    Route::get('/{id}/edit',[PessoaController::class, 'edit'])->name('pessoa.edit');
    Route::put('/{id}',[PessoaController::class, 'update'])->name('pessoa.update');

    Route::delete('/{id}',[PessoaController::class, 'destroy'])->name('pessoa.destroy');

    Route::get('/sorteio', [PessoaController::class, 'sorteio'])->name('pessoa.sorteio');



});