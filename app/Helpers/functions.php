<?php

use App\Models\MainAccess;
use App\Models\Module;
use App\Models\Program;
use App\Models\MenuAccess;

if(!function_exists('menuOptions')){
    function menuOptions(){
        if(auth()->user()->permission == 10){
            $access = [];
            foreach(MainAccess::all() as $main_access){
                $access[$main_access->id] = [
                    'id' => $main_access->id,
                    'menu_name' => $main_access->menu_name,
                    'menu_route' => $main_access->menu_route,
                    'icon' => $main_access->icon,
                ];
            }

            foreach(Module::all() as $modules){
                $access[$modules->main_access_id]['modules'][$modules->id] = [
                    'id' => $modules->id,
                    'main_access_id' => $modules->main_access_id,
                    'module_name' => $modules->module_name,
                    'module_route' => $modules->module_route,
                ];
            }

            foreach(Program::all() as $programs){
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
                foreach(MainAccess::all() as $main_access){
                    if($menu_access->main_access_id == $main_access->id){
                        $access_limited[$main_access->id] = [
                            'id' => $main_access->id,
                            'menu_name' => $main_access->menu_name,
                            'menu_route' => $main_access->menu_route,
                            'icon' => $main_access->icon,
                        ];
                    }
                }

                foreach(Module::all() as $modules){
                    if($menu_access->module_id == $modules->id){
                        $access_limited[$modules->main_access_id]['modules'][$modules->id] = [
                            'id' => $modules->id,
                            'main_access_id' => $modules->main_access_id,
                            'module_name' => $modules->module_name,
                            'module_route' => $modules->module_route,
                        ];
                    }
                }

                foreach(Program::all() as $programs){
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