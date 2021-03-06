<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PainelController;

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

Route::get('cep/{cep}', [PainelController::class, 'cepConsulta'])->name('cep');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [PainelController::class, 'dashboard'])->name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('/my-profile', [PainelController::class, 'myProfile'])->name('profile.my');
        Route::get('/edit-profile', [PainelController::class, 'editProfile'])->name('profile.edit');
        Route::post('/save-profile', [PainelController::class, 'saveProfile'])->name('profile.save');
    });

    // Rotas geradas
    include "routes.php";
});