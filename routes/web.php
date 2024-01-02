<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
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

Route::get('/principal', [HomeController::class, 'principal'])->name('principal');
Route::get('/contato', [HomeController::class, 'contato'])->name('contato');
Route::get('/sobre-nos', [HomeController::class, 'sobreNos'])->name('sobreNos');

Route::prefix('/app')->group(function () {
    Route::get('/login', function() {
        return 'login';
    })->name('login');

    Route::get('/cliente', function() {
        return 'cliente';
    })->name('cliente');

    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');

    Route::get('/produtos', function() {
        return 'produtos';
    })->name('produtos');
});

Route::fallback(function() {
    echo 'A rota acessada não existe';
});

