<?php

Route::prefix('settings')->group(function () {
	Route::prefix('admin')->group(function () {
		Route::get('menu/registration', [App\Http\Controllers\Settings\Admin\AdminController::class, 'view_menu'])->name('setting.admin.menu');
		Route::post('menu/registration', [App\Http\Controllers\Settings\Admin\AdminController::class, 'store_menu'])->name('setting.admin.menu');
		Route::put('menu/registration', [App\Http\Controllers\Settings\Admin\AdminController::class, 'update_menu'])->name('setting.admin.menu');
		Route::delete('menu/registration', [App\Http\Controllers\Settings\Admin\AdminController::class, 'destroy_menu'])->name('setting.admin.menu');

		Route::get('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'view_release_access'])->name('setting.admin.release_access');
		Route::post('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'store_release_access'])->name('setting.admin.release_access');
		Route::put('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'update_release_access'])->name('setting.admin.release_access');
		Route::delete('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'destroy_release_access'])->name('setting.admin.release_access');

	});

	Route::prefix('companies')->group(function () {
		Route::get('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'view_company'])->name('setting.company.registration');
		Route::post('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'store_company'])->name('setting.company.registration');
		Route::put('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'update_company'])->name('setting.company.registration');
		Route::delete('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'destroy_company'])->name('setting.company.registration');

	});

});

Route::prefix('registration')->group(function () {
	Route::prefix('commercial')->group(function () {
	});

	Route::prefix('stock')->group(function () {
		Route::get('product/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'view_product'])->name('registration.stock.product');
		Route::post('product/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'store_product'])->name('registration.stock.product');
		Route::put('product/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'update_product'])->name('registration.stock.product');
		Route::delete('product/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'destroy_product'])->name('registration.stock.product');

		Route::get('services/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'view_service'])->name('registration.stock.services');
		Route::post('services/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'store_service'])->name('registration.stock.services');
		Route::put('services/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'update_service'])->name('registration.stock.services');
		Route::delete('services/registration', [App\Http\Controllers\Registration\Stock\ProductController::class, 'destroy_service'])->name('registration.stock.services');

		Route::get('product_group/registration', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'view_product_group'])->name('registration.stock.product_group');
		Route::post('product_group/registration', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'store_product_group'])->name('registration.stock.product_group');
		Route::put('product_group/registration', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'update_product_group'])->name('registration.stock.product_group');
		Route::delete('product_group/registration', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'destroy_product_group'])->name('registration.stock.product_group');

		Route::get('deposited/registration', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'view_deposited'])->name('registration.stock.deposited');
		Route::post('deposited/registration', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'store_deposited'])->name('registration.stock.deposited');
		Route::put('deposited/registration', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'update_deposited'])->name('registration.stock.deposited');
		Route::delete('deposited/registration', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'destroy_deposited'])->name('registration.stock.deposited');

	});

});

Route::prefix('commercial')->group(function () {
});

Route::prefix('stock')->group(function () {
});

Route::prefix('finance')->group(function () {
});

