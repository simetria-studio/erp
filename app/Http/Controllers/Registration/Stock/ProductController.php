<?php

namespace App\Http\Controllers\Registration\Stock;

use App\Models\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view_product()
    {
        return view('registration.stock.product');
    }

    public function create_product()
    {
        $companies = Company::where('user_id', auth()->user()->id)->with('deposits', 'productsGroups', 'clientSuppliers')->get();
        return view('registration.stock.product.create', compact('companies'));
    }

    public function store_product(Request $request)
    {
        # code...
    }

    public function edit_product($id)
    {
        # code...
    }

    public function update_product(Request $request)
    {
        # code...
    }

    public function destroy_product(Request $request)
    {
        # code...
    }
}
