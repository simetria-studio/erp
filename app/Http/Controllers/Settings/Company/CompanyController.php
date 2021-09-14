<?php

namespace App\Http\Controllers\Settings\Company;

use App\Models\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function viewCompany()
    {
        return View('settings.companies.create');
    }

    public function storeCompany(Request $request)
    {
        $company['user_id'] = auth()->user()->id;
        $company['corporate_name'] = $request->corporate_name;
        $company['fantasy_name'] = $request->fantasy_name;
        $company['address'] = $request->address;
        $company['number'] = $request->number;
        $company['zip_code'] = $request->zip_code;
        $company['address2'] = $request->address2;
        $company['city'] = $request->city;
        $company['state'] = $request->state;
        $company['country'] = $request->country;
        $company['kind_of_person'] = $request->kind_of_person;
        $company['document_number'] = $request->cnpj_cpf;
        $company['state_registration'] = $request->state_registration;
        $company['municipal_registration'] = $request->municipal_registration;
        $company['phone1'] = $request->phone1;
        $company['phone2'] = $request->phone2;
        $company['email'] = $request->email;
        $company['http'] = $request->http;
        $company['contact_name'] = $request->contact_name;
        $company['economic_activity'] = $request->economic_activity;

        $logo_path = $request->file('logo_path')->store('public/logos');
        $company['logo_path'] = $logo_path;

        $company = Company::create($company);
        $rota = route('setting.company.registration');
        $msg = 'Empresa registrada com Sucesso!';

        return view('success', compact('rota', 'msg'));
    }
}
