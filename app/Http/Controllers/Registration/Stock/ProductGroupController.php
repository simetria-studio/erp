<?php

namespace App\Http\Controllers\Registration\Stock;

use App\Models\ProductGroup;
use App\Models\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductGroupController extends Controller
{
    public function view_product_group()
    {
        $companies = Company::where('user_id', auth()->user()->id)->with('productsGroups')->get();
        return view('registration.stock.productGroup', compact('companies'));
    }

    public function store_product_group(Request $request)
    {
        $product_group['company_id'] = mb_convert_case($request->company_id, MB_CASE_UPPER);
        $product_group['name'] = mb_convert_case($request->name, MB_CASE_UPPER);
        $product_group = ProductGroup::create($product_group);
        $product_group = ProductGroup::with('company')->find($product_group->id);

        return response()->json([
            'table' => '<tr class="tr-id-'.$product_group->id.'">
                <td>'.$product_group->id.'</td>
                <td>'.$product_group->company->corporate_name.'</td>
                <td>'.$product_group->name.'</td>
                <td>Ativo</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados=\''.json_encode(['id' => $product_group->id]).'\' data-route="'.route('registration.stock.product_group').'"><i class="ri-delete-bin-5-line"></i></button>
                        <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarGrupoProduto" data-dados=\''.json_encode($product_group).'\'><i class="ri-edit-box-line"></i></button>
                    </div>
                </td>
            </tr>'
        ]);
    }

    public function update_product_group(Request $request)
    {
        $product_group_up['company_id'] = mb_convert_case($request->company_id, MB_CASE_UPPER);
        $product_group_up['name'] = mb_convert_case($request->name, MB_CASE_UPPER);
        $product_group = ProductGroup::with('company')->find($request->id);
        $product_group->update($product_group_up);;
        $product_group->fresh();

        return response()->json([
            'tb_id' => $product_group->id,
            'tb_up' => '
                <td>'.$product_group->id.'</td>
                <td>'.$product_group->company->corporate_name.'</td>
                <td>'.$product_group->name.'</td>
                <td>Ativo</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Deposito" data-dados=\''.json_encode(['id' => $product_group->id]).'\' data-route="'.route('registration.stock.product_group').'"><i class="ri-delete-bin-5-line"></i></button>
                        <button type="button" class="btn btn-info btn-editar" data-toggle="modal" data-target="#editarGrupoProduto" data-dados=\''.json_encode($product_group).'\'><i class="ri-edit-box-line"></i></button>
                    </div>
                </td>'
        ]);
    }

    public function destroy_product_group(Request $request)
    {
        ProductGroup::find($request->id)->delete();
        return response()->json($request->id);
    }
}
