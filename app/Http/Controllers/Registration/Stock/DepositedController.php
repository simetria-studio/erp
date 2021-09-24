<?php

namespace App\Http\Controllers\Registration\Stock;

use App\Models\Deposited;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositedController extends Controller
{
    public function view_deposited()
    {
        $depositeds = Deposited::all();
        return view('registration.stock.deposited', compact('depositeds'));
    }

    public function store_deposited(Request $request)
    {
        $deposited['name'] = mb_convert_case($request->name, MB_CASE_UPPER);
        $deposited = Deposited::create($deposited);

        return response()->json([
            'table' => '<tr class="tr-id-'.$deposited->id.'">
                <td>'.$deposited->id.'</td>
                <td>'.$deposited->name.'</td>
                <td>Ativo</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados=\''.json_encode(['id' => $deposited->id]).'\' data-route="'.route('registration.stock.deposited').'"><i class="ri-delete-bin-5-line"></i></button>
                        <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarDeposito" data-dados=\''.json_encode($deposited).'\'><i class="ri-edit-box-line"></i></button>
                    </div>
                </td>
            </tr>'
        ]);
    }

    public function update_deposited(Request $request)
    {
        $deposited_up['name'] = mb_convert_case($request->name, MB_CASE_UPPER);
        $deposited = Deposited::find($request->id);
        $deposited->update($deposited_up);;
        $deposited->fresh();

        return response()->json([
            'tb_id' => $deposited->id,
            'tb_up' => '
                <td>'.$deposited->id.'</td>
                <td>'.$deposited->name.'</td>
                <td>Ativo</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados=\''.json_encode(['id' => $deposited->id]).'\' data-route="'.route('registration.stock.deposited').'"><i class="ri-delete-bin-5-line"></i></button>
                        <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarDeposito" data-dados=\''.json_encode($deposited).'\'><i class="ri-edit-box-line"></i></button>
                    </div>
                </td>'
        ]);
    }

    public function destroy_deposited(Request $request)
    {
        Deposited::find($request->id)->delete();
        return response()->json($request->id);
    }
}
