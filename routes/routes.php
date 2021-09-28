<?php

Route::prefix('settings')->group(function () {
	Route::prefix('admin')->group(function () {
		Route::get('menu', [App\Http\Controllers\Settings\Admin\AdminController::class, 'view_menu'])->name('setting.admin.menu');
		Route::post('menu', [App\Http\Controllers\Settings\Admin\AdminController::class, 'store_menu'])->name('setting.admin.menu');
		Route::put('menu', [App\Http\Controllers\Settings\Admin\AdminController::class, 'update_menu'])->name('setting.admin.menu');
		Route::delete('menu', [App\Http\Controllers\Settings\Admin\AdminController::class, 'destroy_menu'])->name('setting.admin.menu');

		Route::get('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'view_release_access'])->name('setting.admin.release_access');
		Route::post('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'store_release_access'])->name('setting.admin.release_access');
		Route::put('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'update_release_access'])->name('setting.admin.release_access');
		Route::delete('menu/release_access/{user_id?}', [App\Http\Controllers\Settings\Admin\AdminController::class, 'destroy_release_access'])->name('setting.admin.release_access');

	});

	Route::prefix('companies')->group(function () {
		Route::get('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'view_company'])->name('setting.company.registration');
		Route::get('registration/create', [App\Http\Controllers\Settings\Company\CompanyController::class, 'create_company'])->name('setting.company.registration.create');
		Route::post('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'store_company'])->name('setting.company.registration');
		Route::get('registration/edit/{id}', [App\Http\Controllers\Settings\Company\CompanyController::class, 'edit_company'])->name('setting.company.registration.edit');
		Route::put('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'update_company'])->name('setting.company.registration');
		Route::delete('registration', [App\Http\Controllers\Settings\Company\CompanyController::class, 'destroy_company'])->name('setting.company.registration');

	});

});

Route::prefix('registration')->group(function () {
	Route::prefix('commercial')->group(function () {
		Route::get('customer_provider', [App\Http\Controllers\Registration\Commercial\CustomerProviderController::class, 'view_customer_provider'])->name('registration.commercial.customer_provider');
		Route::get('customer_provider/create', [App\Http\Controllers\Registration\Commercial\CustomerProviderController::class, 'create_customer_provider'])->name('registration.commercial.customer_provider.create');
		Route::post('customer_provider', [App\Http\Controllers\Registration\Commercial\CustomerProviderController::class, 'store_customer_provider'])->name('registration.commercial.customer_provider');
		Route::get('customer_provider/edit/{id}', [App\Http\Controllers\Registration\Commercial\CustomerProviderController::class, 'edit_customer_provider'])->name('registration.commercial.customer_provider.edit');
		Route::put('customer_provider', [App\Http\Controllers\Registration\Commercial\CustomerProviderController::class, 'update_customer_provider'])->name('registration.commercial.customer_provider');
		Route::delete('customer_provider', [App\Http\Controllers\Registration\Commercial\CustomerProviderController::class, 'destroy_customer_provider'])->name('registration.commercial.customer_provider');

	});

	Route::prefix('stock')->group(function () {
		Route::get('product', [App\Http\Controllers\Registration\Stock\ProductController::class, 'view_product'])->name('registration.stock.product');
		Route::get('product/create', [App\Http\Controllers\Registration\Stock\ProductController::class, 'create_product'])->name('registration.stock.product.create');
		Route::post('product', [App\Http\Controllers\Registration\Stock\ProductController::class, 'store_product'])->name('registration.stock.product');
		Route::get('product/edit/{id}', [App\Http\Controllers\Registration\Stock\ProductController::class, 'edit_product'])->name('registration.stock.product.edit');
		Route::put('product', [App\Http\Controllers\Registration\Stock\ProductController::class, 'update_product'])->name('registration.stock.product');
		Route::delete('product', [App\Http\Controllers\Registration\Stock\ProductController::class, 'destroy_product'])->name('registration.stock.product');

		Route::get('product_group', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'view_product_group'])->name('registration.stock.product_group');
		Route::post('product_group', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'store_product_group'])->name('registration.stock.product_group');
		Route::put('product_group', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'update_product_group'])->name('registration.stock.product_group');
		Route::delete('product_group', [App\Http\Controllers\Registration\Stock\ProductGroupController::class, 'destroy_product_group'])->name('registration.stock.product_group');

		Route::get('deposited', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'view_deposited'])->name('registration.stock.deposited');
		Route::post('deposited', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'store_deposited'])->name('registration.stock.deposited');
		Route::put('deposited', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'update_deposited'])->name('registration.stock.deposited');
		Route::delete('deposited', [App\Http\Controllers\Registration\Stock\DepositedController::class, 'destroy_deposited'])->name('registration.stock.deposited');

	});

});

Route::prefix('commercial')->group(function () {
});

Route::prefix('stock')->group(function () {
});

Route::prefix('finance')->group(function () {
});

