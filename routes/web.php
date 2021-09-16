<?php

use Illuminate\Support\Facades\Route;

use App\Models\MainAccess;
use App\Models\Module;
use App\Models\Program;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [PainelController::class, 'dashboard'])->name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('/my-profile', [PainelController::class, 'myProfile'])->name('profile.my');
        Route::get('/edit-profile', [PainelController::class, 'editProfile'])->name('profile.edit');
    });

    foreach(MainAccess::all() as $main_access){
        session(['main_access_id' => $main_access->id]); // Guardando sessão do id para recuperar dentro da rota
        Route::prefix($main_access->menu_route)->group(function () {
            foreach(Module::all() as $module){
                if($module->main_access_id == session()->get('main_access_id')){
                    session(['module_id' => $module->id]); // Guardando sessão do id para recuperar dentro da rota
                    Route::prefix($module->module_route)->group(function () {
                        foreach(Program::all() as $program){
                            if($program->module_id == session()->get('module_id')){
                                if($program->method_get == 'true') Route::get($program->program_route, [$program->controller_name.''::class, 'view_'.$program->function_name])->name($program->route_name);
                                if($program->method_post == 'true') Route::post($program->program_route, [$program->controller_name.''::class, 'store_'.$program->function_name])->name($program->route_name);
                                if($program->method_delete == 'true') Route::delete($program->program_route, [$program->controller_name.''::class, 'destroy_'.$program->function_name])->name($program->route_name);
                            }
                        }
                        session()->forget('module_id');
                    });
                }
            }
            session()->forget('main_access_id');
        });
    }
});