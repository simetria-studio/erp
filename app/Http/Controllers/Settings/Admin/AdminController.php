<?php

namespace App\Http\Controllers\Settings\Admin;

use App\Models\MainAccess;
use App\Models\Module;
use App\Models\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_menu()
    {
        $main_access = MainAccess::all();
        $modules = Module::with('mainAccess')->get();
        $programs = Program::with('mainAccess', 'module')->get();
        return view('settings.admin.menu', compact('main_access', 'modules', 'programs'));
    }

    public function store_menu(Request $request)
    {
        switch($request->menu_create){
            case 'main_access':
                $main_access['menu_name'] = mb_convert_case($request->menu_name, MB_CASE_TITLE);
                $main_access['menu_route'] = mb_convert_case($request->menu_route, MB_CASE_LOWER);
                $main_access['icon'] = mb_convert_case($request->icon, MB_CASE_LOWER);

                $main_access = MainAccess::create($main_access);

                return response()->json([
                    'table' => '<tr class="tr-id-'.$main_access->id.'">
                        <td class="text-light">#'.$main_access->id.'</td>
                        <td class="text-light"><i class="'.$main_access->icon.'"></i></td>
                        <td class="text-light">'.$main_access->menu_name.'</td>
                        <td class="text-light">'.$main_access->menu_route.'</td>
                        <td class="text-light">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-apagar" data-tbody=".AcessoPrincipal" data-dados=\''.json_encode(['id' => $main_access->id, 'menu_create' => 'main_access']).'\' data-route="'.route('setting.admin.menu').'"><i class="ri-delete-bin-5-line"></i></button>
                                <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarAcessoPrincipal" data-dados=\''.json_encode($main_access).'\'><i class="ri-edit-box-line"></i></button>
                            </div>
                        </td>
                    </tr>'
                ]);
            break;
            case 'module':
                $main_access = MainAccess::find($request->main_access_id);
                $module['main_access_id'] = $request->main_access_id;
                $module['module_name'] = mb_convert_case($request->module_name, MB_CASE_TITLE);
                $module['module_route'] = mb_convert_case($request->module_route, MB_CASE_LOWER);

                $module = Module::create($module);

                return response()->json([
                    'table' => '<tr class="tr-id-'.$module->id.'">
                        <td class="text-light">#'.$module->id.'</td>
                        <td class="text-light">'.$main_access->menu_name.'</td>
                        <td class="text-light">'.$module->module_name.'</td>
                        <td class="text-light">'.$module->module_route.'</td>
                        <td class="text-light">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-apagar" data-tbody=".AcessoPrincipal" data-dados=\''.json_encode(['id' => $module->id, 'menu_create' => 'module']).'\' data-route="'.route('setting.admin.menu').'"><i class="ri-delete-bin-5-line"></i></button>
                                <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarAcessoPrincipal" data-dados=\''.json_encode($module).'\'><i class="ri-edit-box-line"></i></button>
                            </div>
                        </td>
                    </tr>'
                ]);
            break;
            case 'program':
                $module = Module::find($request->module_id);
                $main_access = MainAccess::find($module->main_access_id);
                $program['main_access_id'] = $main_access->id;
                $program['module_id'] = $request->module_id;
                $program['program_name'] = mb_convert_case($request->program_name, MB_CASE_TITLE);
                $program['function_name'] = $request->function_name;
                $program['program_route'] = mb_convert_case($request->program_route, MB_CASE_LOWER);
                $program['route_name'] = $request->route_name;
                $program['controller_name'] = $request->controller_name;
                $program['method_get'] = mb_convert_case($request->method_get, MB_CASE_LOWER);
                $program['method_post'] = mb_convert_case($request->method_post, MB_CASE_LOWER);
                $program['method_put'] = mb_convert_case($request->method_put, MB_CASE_LOWER);
                $program['method_delete'] = mb_convert_case($request->method_delete, MB_CASE_LOWER);

                $program = Program::create($program);
                geraRotas();

                return response()->json([
                    'table' => '<tr class="tr-id-'.$program->id.'">
                        <td class="text-light">#'.$program->id.'</td>
                        <td class="text-light">'.$main_access->menu_name.'</td>
                        <td class="text-light">'.$module->module_name.'</td>
                        <td class="text-light">'.$program->program_name.'</td>
                        <td class="text-light">
                            <span><b>Get:</b> '.($program->method_get == 'true' ? "view_".$program->function_name : "").'</span><br>
                            <span><b>Post:</b> '.($program->method_post == 'true' ? "store_".$program->function_name : "").'</span><br>
                            <span><b>Put:</b> '.($program->method_put == 'true' ? "update_".$program->function_name : "").'</span><br>
                            <span><b>Delete:</b> '.($program->method_delete == 'true' ? "destroy_".$program->function_name : "").'</span><br>
                        </td>
                        <td class="text-light">'.$program->program_route.'</td>
                        <td class="text-light">'.$program->route_name.'</td>
                        <td class="text-light">'.$program->controller_name.'</td>
                        <td class="text-light">
                            <span><b>Get:</b> '.($program->method_get == 'true' ? "SIM" : "NÃO").'</span><br>
                            <span><b>Post:</b> '.($program->method_post == 'true' ? "SIM" : "NÃO").'</span><br>
                            <span><b>Put:</b> '.($program->method_put == 'true' ? "SIM" : "NÃO").'</span><br>
                            <span><b>Delete:</b> '.($program->method_delete == 'true' ? "SIM" : "NÃO").'</span><br>
                        </td>
                        <td class="text-light">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Programa" data-dados=\''.json_encode(['id' => $program->id, 'menu_create' => 'program']).'\' data-route="'.route('setting.admin.menu').'"><i class="ri-delete-bin-5-line"></i></button>
                                <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarPrograma" data-dados=\''.json_encode($program).'\'><i class="ri-edit-box-line"></i></button>
                            </div>
                        </td>
                    </tr>'
                ]);
            break;
        }
    }

    public function update_menu(Request $request)
    {
        switch($request->menu_create){
            case 'main_access':
                $main_access['menu_name'] = mb_convert_case($request->menu_name, MB_CASE_TITLE);
                $main_access['menu_route'] = mb_convert_case($request->menu_route, MB_CASE_LOWER);
                $main_access['icon'] = mb_convert_case($request->icon, MB_CASE_LOWER);

                $mainaccess = MainAccess::find($request->id);
                $mainaccess->update($main_access);
                $main_access = $mainaccess->fresh();

                return response()->json([
                    'tb_id' => $main_access->id,
                    'tb_up' => '
                        <td class="text-light">#'.$main_access->id.'</td>
                        <td class="text-light"><i class="'.$main_access->icon.'"></i></td>
                        <td class="text-light">'.$main_access->menu_name.'</td>
                        <td class="text-light">'.$main_access->menu_route.'</td>
                        <td class="text-light">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-apagar" data-tbody=".AcessoPrincipal" data-dados=\''.json_encode(['id' => $main_access->id, 'menu_create' => 'main_access']).'\' data-route="'.route('setting.admin.menu').'"><i class="ri-delete-bin-5-line"></i></button>
                                <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarAcessoPrincipal" data-dados=\''.json_encode($main_access).'\'><i class="ri-edit-box-line"></i></button>
                            </div>
                        </td>'
                ]);
            break;
            case 'module':
                $main_access = MainAccess::find($request->main_access_id);
                $module['main_access_id'] = $request->main_access_id;
                $module['module_name'] = mb_convert_case($request->module_name, MB_CASE_TITLE);
                $module['module_route'] = mb_convert_case($request->module_route, MB_CASE_LOWER);

                $module_fresh = Module::find($request->id);
                $module_fresh->update($module);
                $module = $module_fresh->fresh();

                return response()->json([
                    'tb_id' => $module->id,
                    'tb_up' => '
                        <td class="text-light">#'.$module->id.'</td>
                        <td class="text-light">'.$main_access->menu_name.'</td>
                        <td class="text-light">'.$module->module_name.'</td>
                        <td class="text-light">'.$module->module_route.'</td>
                        <td class="text-light">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-apagar" data-tbody=".AcessoPrincipal" data-dados=\''.json_encode(['id' => $module->id, 'menu_create' => 'module']).'\' data-route="'.route('setting.admin.menu').'"><i class="ri-delete-bin-5-line"></i></button>
                                <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarAcessoPrincipal" data-dados=\''.json_encode($module).'\'><i class="ri-edit-box-line"></i></button>
                            </div>
                        </td>'
                ]);
            break;
            case 'program':
                $module = Module::find($request->module_id);
                $main_access = MainAccess::find($module->main_access_id);
                $program['main_access_id'] = $main_access->id;
                $program['module_id'] = $request->module_id;
                $program['program_name'] = mb_convert_case($request->program_name, MB_CASE_TITLE);
                $program['function_name'] = $request->function_name;
                $program['program_route'] = mb_convert_case($request->program_route, MB_CASE_LOWER);
                $program['route_name'] = $request->route_name;
                $program['controller_name'] = $request->controller_name;
                $program['method_get'] = mb_convert_case($request->method_get, MB_CASE_LOWER);
                $program['method_post'] = mb_convert_case($request->method_post, MB_CASE_LOWER);
                $program['method_put'] = mb_convert_case($request->method_put, MB_CASE_LOWER);
                $program['method_delete'] = mb_convert_case($request->method_delete, MB_CASE_LOWER);

                $program_fresh = Program::find($request->id);
                $program_fresh->update($program);
                $program = $program_fresh->fresh();
                geraRotas();

                return response()->json([
                    'tb_id' => $program->id,
                    'tb_up' => '
                        <td class="text-light">#'.$program->id.'</td>
                        <td class="text-light">'.$main_access->menu_name.'</td>
                        <td class="text-light">'.$module->module_name.'</td>
                        <td class="text-light">'.$program->program_name.'</td>
                        <td class="text-light">
                            <span><b>Get:</b> '.($program->method_get == 'true' ? "view_".$program->function_name : "").'</span><br>
                            <span><b>Post:</b> '.($program->method_post == 'true' ? "store_".$program->function_name : "").'</span><br>
                            <span><b>Put:</b> '.($program->method_put == 'true' ? "update_".$program->function_name : "").'</span><br>
                            <span><b>Delete:</b> '.($program->method_delete == 'true' ? "destroy_".$program->function_name : "").'</span><br>
                        </td>
                        <td class="text-light">'.$program->program_route.'</td>
                        <td class="text-light">'.$program->route_name.'</td>
                        <td class="text-light">'.$program->controller_name.'</td>
                        <td class="text-light">
                            <span><b>Get:</b> '.($program->method_get == 'true' ? "SIM" : "NÃO").'</span><br>
                            <span><b>Post:</b> '.($program->method_post == 'true' ? "SIM" : "NÃO").'</span><br>
                            <span><b>Put:</b> '.($program->method_put == 'true' ? "SIM" : "NÃO").'</span><br>
                            <span><b>Delete:</b> '.($program->method_delete == 'true' ? "SIM" : "NÃO").'</span><br>
                        </td>
                        <td class="text-light">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Programa" data-dados=\''.json_encode(['id' => $program->id, 'menu_create' => 'program']).'\' data-route="'.route('setting.admin.menu').'"><i class="ri-delete-bin-5-line"></i></button>
                                <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarPrograma" data-dados=\''.json_encode($program).'\'><i class="ri-edit-box-line"></i></button>
                            </div>
                        </td>'
                ]);
            break;
        }
    }

    public function destroy_menu(Request $request)
    {
        switch($request->menu_create){
            case 'main_access':
                $main_access = MainAccess::find($request->id)->delete();
                $module = Module::where('main_access_id', $request->id)->delete();
                $program = Program::where('main_access_id', $request->id)->delete();

                return response()->json($request->id);
            break;
            case 'module':
                $module = Module::find($request->id)->delete();
                $program = Program::where('module_id', $request->id)->delete();

                return response()->json($request->id);
            break;
            case 'program':
                $program = Program::find($request->id)->delete();

                return response()->json($request->id);
            break;
        }
    }

    public function view_release_access($user_id = null)
    {
        return view('settings.admin.releaseAccess');
    }
}
