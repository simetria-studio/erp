<?php

namespace App\Http\Controllers\Settings\Admin;

use App\Models\MainAccess;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewMenu()
    {
        $main_access = MainAccess::all();
        return view('settings.admin.menu', compact('main_access'));
    }

    public function storeMenu(Request $request)
    {
        switch($request->menu_create){
            case 'main_access':
                $main_access['menu_name'] = mb_convert_case($request->menu_name, MB_CASE_TITLE);
                $main_access['menu_route'] = mb_convert_case($request->menu_route, MB_CASE_LOWER);

                if($request->id){
                    $mainaccess = MainAccess::find($request->id);
                    $mainaccess->update($main_access);
                    $main_access = $mainaccess->fresh();
                }else{
                    $main_access = MainAccess::create($main_access);

                    return response()->json([
                        'table' => '<tr class="tr-id-'.$main_access->id.'">
                            <td class="text-light">#'.$main_access->id.'</td>
                            <td class="text-light">'.$main_access->menu_name.'</td>
                            <td class="text-light">'.$main_access->menu_route.'</td>
                            <td class="text-light">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger btn-apagar" data-id="'.$main_access->id.'"><i class="ri-delete-bin-5-line"></i></button>
                                    <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarMenuPrincipal" data-dados=\''.json_encode($main_access).'\'><i class="ri-edit-box-line"></i></button>
                                </div>
                            </td>
                        </tr>'
                    ]);
                }
            break;
        }
    }
}
