<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PainelController;
use App\Http\Controllers\Settings\Company\CompanyController;
use App\Http\Controllers\Settings\Admin\AdminController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [PainelController::class, 'dashboard'])->name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('/my-profile', [PainelController::class, 'myProfile'])->name('profile.my');
        Route::get('/edit-profile', [PainelController::class, 'editProfile'])->name('profile.edit');
    });

    Route::prefix('settings')->group(function () {
        Route::prefix('admin')->group(function () {
            // Menus
            Route::get('menu/registration', [AdminController::class, 'viewMenu'])->name('setting.admin.menu');
            Route::post('menu/registration', [AdminController::class, 'storeMenu'])->name('setting.admin.menu');
            Route::delete('menu/registration', [AdminController::class, 'destroyMenu'])->name('setting.admin.menu');
        });

        Route::prefix('companies')->group(function () {
            Route::get('registration', [CompanyController::class, 'viewCompany'])->name('setting.company.registration');
            Route::post('registration', [CompanyController::class, 'storeCompany'])->name('setting.company.registration');
        });
    });
});