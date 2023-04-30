<?php

use App\Http\Controllers\CepController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrcamentoController;
use App\Models\Orcamento;
use Illuminate\Support\Facades\Mail;
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



Route::get('/email', function () {
    $data = [
        'nome' => 'arthur.masterdevelop2gmil.com'
    ];

    Mail::to('arthur.masterdevelop@gmal.com')->send(new \App\Mail\SendOrcamento($data));
});

Route::get('/', function () {
    return view('form');
});

Route::get('/cep/{cep}', CepController::class);

Route::get('/dashboard/{orcamento?}', [DashboardController::class, 'show'])->name('dashboard');
Route::get('/dashboard/{orcamento?}', [DashboardController::class, 'show'])->name('dashboard');
Route::post('/cadastro-orcamento', [OrcamentoController::class, 'store'])->name('user.cadastro-orcamento');
