<?php

use App\Http\Controllers\AutheticationController;
use App\Http\Controllers\CepController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrcamentoController;
use Illuminate\Support\Facades\Auth;
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
    return view('form');
})->name('index');

Route::get('/login', [AutheticationController::class, 'login'])->name('auth.login');
Route::post('/login', [AutheticationController::class, 'logar'])->name('auth.logar');

Route::get('/cep/{cep}', CepController::class);

Route::get('/dashboard/{orcamento?}', [DashboardController::class, 'show'])->name('dashboard');
Route::post('/cadastro-orcamento', [OrcamentoController::class, 'store'])->name('user.cadastro-orcamento');
