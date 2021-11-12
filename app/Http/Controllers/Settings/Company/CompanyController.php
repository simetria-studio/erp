<?php

namespace App\Http\Controllers\Settings\Company;

use App\Models\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function view_company()
    {
        $companies = getCompanies()->get();
        return View('settings.admin.companies.companies', get_defined_vars());
    }

    public function create_company()
    {
        return View('settings.admin.companies.create', get_defined_vars());
    }

    public function store_company(Request $request)
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
        $company['document_number'] = $request->document_number;
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

    public function edit_company($id)
    {
        $company = getCompanies()->find($id);
        return View('settings.admin.companies.edit', get_defined_vars());
    }

    public function update_company(Request $request)
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
        $company['document_number'] = $request->document_number;
        $company['state_registration'] = $request->state_registration;
        $company['municipal_registration'] = $request->municipal_registration;
        $company['phone1'] = $request->phone1;
        $company['phone2'] = $request->phone2;
        $company['email'] = $request->email;
        $company['http'] = $request->http;
        $company['contact_name'] = $request->contact_name;
        $company['economic_activity'] = $request->economic_activity;

        if($request->logo_path){
            $logo_path = $request->file('logo_path')->store('public/logos');
            $company['logo_path'] = $logo_path;
        }

        $company = Company::find($request->company_id)->update($company);
        $rota = route('setting.company.registration');
        $msg = 'Empresa atualizada com Sucesso!';

        return view('success', compact('rota', 'msg'));
    }

    public function destroy_company(Request $request)
    {
        $company = Company::find($request->id);
        \Storage::delete($company->logo_path);
        $company->delete();
        return response()->json($request->id);
    }
}
