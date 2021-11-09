<?php

use App\Models\MainAccess;
use App\Models\Module;
use App\Models\Program;
use App\Models\MenuAccess;

use App\Models\Company;

if(!function_exists('menuOptions')){
    function menuOptions(){
        if(auth()->user()->permission == 10){
            $access = [];
            foreach(MainAccess::orderBy('position', 'ASC')->get() as $main_access){
                $access[$main_access->id] = [
                    'id' => $main_access->id,
                    'menu_name' => $main_access->menu_name,
                    'menu_route' => $main_access->menu_route,
                    'icon' => $main_access->icon,
                ];
            }

            foreach(Module::orderBy('position', 'ASC')->get() as $modules){
                $access[$modules->main_access_id]['modules'][$modules->id] = [
                    'id' => $modules->id,
                    'main_access_id' => $modules->main_access_id,
                    'module_name' => $modules->module_name,
                    'module_route' => $modules->module_route,
                ];
            }

            foreach(Program::orderBy('position', 'ASC')->get() as $programs){
                $access[$programs->main_access_id]['modules'][$programs->module_id]['programs'][$programs->id] = [
                    'id' => $programs->id,
                    'program_name' => $programs->program_name,
                    'program_route' => $programs->program_route,
                    'route_name' => $programs->route_name,
                    'id' => $programs->id,
                ];
            }

            return json_decode(json_encode($access));
        }else{
            $access_limited = [];
            foreach(MenuAccess::where('user_id', auth()->user()->id)->get() as $menu_access){
                foreach(MainAccess::orderBy('position', 'ASC')->get() as $main_access){
                    if($menu_access->main_access_id == $main_access->id){
                        $access_limited[$main_access->id] = [
                            'id' => $main_access->id,
                            'menu_name' => $main_access->menu_name,
                            'menu_route' => $main_access->menu_route,
                            'icon' => $main_access->icon,
                        ];
                    }
                }

                foreach(Module::orderBy('position', 'ASC')->get() as $modules){
                    if($menu_access->module_id == $modules->id){
                        $access_limited[$modules->main_access_id]['modules'][$modules->id] = [
                            'id' => $modules->id,
                            'main_access_id' => $modules->main_access_id,
                            'module_name' => $modules->module_name,
                            'module_route' => $modules->module_route,
                        ];
                    }
                }

                foreach(Program::orderBy('position', 'ASC')->get() as $programs){
                    if($menu_access->program_id == $programs->id){
                        $access_limited[$programs->main_access_id]['modules'][$programs->module_id]['programs'][$programs->id] = [
                            'id' => $programs->id,
                            'program_name' => $programs->program_name,
                            'program_route' => $programs->program_route,
                            'route_name' => $programs->route_name,
                            'id' => $programs->id,
                        ];
                    }
                }
            }
            return json_decode(json_encode($access_limited));
        }
        // return json_decode(json_encode($main_access));
    }
}

if(!function_exists('geraRotas')){
    function geraRotas(){
        $rotas = "<?php\n\n";
        foreach(MainAccess::all() as $main_access){
            session(['main_access_id' => $main_access->id]); // Guardando sessão do id para recuperar dentro da rota
            $rotas .= "Route::prefix('$main_access->menu_route')->group(function () {\n";
                foreach(Module::all() as $module){
                    if($module->main_access_id == session()->get('main_access_id')){
                        session(['module_id' => $module->id]); // Guardando sessão do id para recuperar dentro da rota
                        $rotas .= "\tRoute::prefix('$module->module_route')->group(function () {\n";
                            foreach(Program::all() as $program){
                                if($program->module_id == session()->get('module_id')){
                                    if($program->method_get == 'true') $rotas .= "\t\tRoute::get('$program->program_route', [App\\Http\\Controllers\\$program->controller_name::class, 'view_$program->function_name'])->name('$program->route_name');\n";
                                    if($program->view_create == 'true') $rotas .= "\t\tRoute::get('".(str_replace(["/{id?}", "/{user_id?}"], '', $program->program_route))."/create', [App\\Http\\Controllers\\$program->controller_name::class, 'create_$program->function_name'])->name('$program->route_name.create');\n";
                                    if($program->method_post == 'true') $rotas .= "\t\tRoute::post('$program->program_route', [App\\Http\\Controllers\\$program->controller_name::class, 'store_$program->function_name'])->name('$program->route_name');\n";
                                    if($program->view_edit == 'true') $rotas .= "\t\tRoute::get('".(str_replace(["/{id?}", "/{user_id?}"], '', $program->program_route))."/edit/{id}', [App\\Http\\Controllers\\$program->controller_name::class, 'edit_$program->function_name'])->name('$program->route_name.edit');\n";
                                    if($program->method_put == 'true') $rotas .= "\t\tRoute::put('$program->program_route', [App\\Http\\Controllers\\$program->controller_name::class, 'update_$program->function_name'])->name('$program->route_name');\n";
                                    if($program->method_delete == 'true') $rotas .= "\t\tRoute::delete('$program->program_route', [App\\Http\\Controllers\\$program->controller_name::class, 'destroy_$program->function_name'])->name('$program->route_name');\n\n";
                                }
                            }
                            session()->forget('module_id');
                        $rotas .= "\t});\n\n";
                    }
                }
                session()->forget('main_access_id');
            $rotas .= "});\n\n";
        }
        $fp_access = fopen('../routes/routes.php', 'w');
        fwrite($fp_access, $rotas);
        fclose($fp_access);
    }
}

if(!function_exists('getPosition')){
    function getPosition($position, $id, $parent, $access){
        switch($access){
            case 'main_access':
                $main_accesses = MainAccess::where('position', '>=', $position)->orderBy('position', 'ASC')->get();

                $new_position = $position;
                foreach($main_accesses as $main_access){
                    if($main_access->id !== $id){
                        $new_position += 1;
                        MainAccess::find($main_access->id)->update(['position' => $new_position]);
                    }
                }
            break;
            case 'module':
                $modules = Module::where('main_access_id', $parent)->where('position', '>=', $position)->orderBy('position', 'ASC')->get();

                $new_position = $position;
                foreach($modules as $module){
                    if($module->id !== $id){
                        $new_position += 1;
                        Module::find($module->id)->update(['position' => $new_position]);
                    }
                }
            break;
            case 'program':
                $programs = Program::where('module_id', $parent)->where('position', '>=', $position)->orderBy('position', 'ASC')->get();

                $new_position = $position;
                foreach($programs as $program){
                    if($program->id !== $id){
                        $new_position += 1;
                        Program::find($program->id)->update(['position' => $new_position]);
                    }
                }
            break;
        }
    }
}

if(!function_exists('getCompanies')){
    function getCompanies($data = null){
        $companies = Company::where('user_id', auth()->user()->id)->with(
            'deposits',
            'productsGroups',
            'clientSuppliers',
            'products.deposit',
            'products.stocks',
            'products.providers',
            'products.images',
            'products.variations',
            'products.productVariations',
            'products.productVariations.parentVariations',
            'products.productVariations.deposit',
            'products.productVariations.stocks',
            'products.productVariations.providers',
            'products.productVariations.images',
        )
        ->with(['products' => function($query) {
            return $query->whereNull('parent_product_id')->where('status', 1);
        },'products.productVariations' => function($query) {
            return $query->where('status', 1);
        }]);

        return $companies;
    }
}

// Não esquecer de criar uma função que busqye as companias e seus relacioanmentos, porque o projeto vai ser muito grande para manutenção