<?php

namespace App\Http\Controllers\Registration\Stock;

use App\Models\Deposit;
use App\Models\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function view_deposit()
    {
        $companies = Company::where('user_id', auth()->user()->id)->with('deposits')->get();
        return view('registration.stock.deposit', compact('companies'));
    }

    public function store_deposit(Request $request)
    {
        $deposit['company_id'] = mb_convert_case($request->company_id, MB_CASE_UPPER);
        $deposit['name'] = mb_convert_case($request->name, MB_CASE_UPPER);
        $deposit = Deposit::create($deposit);
        $deposit = Deposit::with('company')->find($deposit->id);

        return response()->json([
            'table' => '<tr class="tr-id-'.$deposit->id.'">
                <td>'.$deposit->id.'</td>
                <td>'.$deposit->company->corporate_name.'</td>
                <td>'.$deposit->name.'</td>
                <td>Ativo</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados=\''.json_encode(['id' => $deposit->id]).'\' data-route="'.route('registration.stock.deposit').'"><i class="ri-delete-bin-5-line"></i></button>
                        <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarDeposito" data-dados=\''.json_encode($deposit).'\'><i class="ri-edit-box-line"></i></button>
                    </div>
                </td>
            </tr>'
        ]);
    }

    public function update_deposit(Request $request)
    {
        $deposit_up['company_id'] = mb_convert_case($request->company_id, MB_CASE_UPPER);
        $deposit_up['name'] = mb_convert_case($request->name, MB_CASE_UPPER);
        $deposit = Deposit::with('company')->find($request->id);
        $deposit->update($deposit_up);;
        $deposit->fresh();

        return response()->json([
            'tb_id' => $deposit->id,
            'tb_up' => '
                <td>'.$deposit->id.'</td>
                <td>'.$deposit->company->corporate_name.'</td>
                <td>'.$deposit->name.'</td>
                <td>Ativo</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados=\''.json_encode(['id' => $deposit->id]).'\' data-route="'.route('registration.stock.deposit').'"><i class="ri-delete-bin-5-line"></i></button>
                        <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarDeposito" data-dados=\''.json_encode($deposit).'\'><i class="ri-edit-box-line"></i></button>
                    </div>
                </td>'
        ]);
    }

    public function destroy_deposit(Request $request)
    {
        Deposit::find($request->id)->delete();
        return response()->json($request->id);
    }
}
