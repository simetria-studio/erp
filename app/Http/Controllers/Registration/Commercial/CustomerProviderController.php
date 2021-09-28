<?php

namespace App\Http\Controllers\Registration\Commercial;

use App\Models\Company;
use App\Models\ClientSupplier;
use App\Models\ContactCS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerProviderController extends Controller
{
    public function view_customer_provider()
    {
        $companies = Company::with('clientSuppliers.contactCS')->where('user_id', auth()->user()->id)->get();
        return view('registration.commercial.customerProvider', compact('companies'));
    }

    public function create_customer_provider()
    {
        $companies = Company::where('user_id', auth()->user()->id)->get();
        return view('registration.commercial.customerProvider.create', compact('companies'));
    }

    public function store_customer_provider(Request $request)
    {
        $request->validate([
            'company_id' => 'required',
            'corporate_name' => 'required',
        ]);

        $client_supplier['company_id']              = $request->company_id;
        $client_supplier['corporate_name']          = $request->corporate_name;
        $client_supplier['fantasy_name']            = $request->fantasy_name;
        $client_supplier['type_person']             = $request->type_person;
        $client_supplier['document_number']         = $request->document_number;
        $client_supplier['tax_regime_code']         = $request->tax_regime_code;
        $client_supplier['customer_since']          = date('Y-m-d', strtotime(str_replace('/', '-', $request->customer_since)));
        $client_supplier['taxpayer']                = $request->taxpayer;
        $client_supplier['state_registration']      = $request->state_registration;
        $client_supplier['ie_exempt']               = $request->ie_exempt;
        $client_supplier['municipal_registration']  = $request->municipal_registration;
        $client_supplier['rg']                      = $request->rg;
        $client_supplier['issuing_agency']          = $request->issuing_agency;
        $client_supplier['client_type']             = $request->client_type;
        $client_supplier['zip_code']                = $request->zip_code;
        $client_supplier['state']                   = $request->state;
        $client_supplier['city']                    = $request->city;
        $client_supplier['address2']                = $request->address2;
        $client_supplier['address']                 = $request->address;
        $client_supplier['number']                  = $request->number;
        $client_supplier['complement']              = $request->complement;
        $client_supplier['status']                  = '1';

        $client_supplier = ClientSupplier::create($client_supplier);

        foreach ($request->contact as $contact){
            $contacts = [];
            $contacts['company_id']         = $request->company_id;
            $contacts['client_supplier_id'] = $client_supplier->id;
            $contacts['contact_name']       = $contact['contact_name'];
            $contacts['phone1']             = $contact['phone1'];
            $contacts['phone2']             = $contact['phone2'];
            $contacts['contact_email']      = $contact['contact_email'];

            $contacts = ContactCS::create($contacts);
        }

        $rota = route('registration.commercial.customer_provider');
        $msg = ($request->client_type == '0' ? 'Cliente' : 'Fornecedor').' registrada com Sucesso!';

        return view('success', compact('rota', 'msg'));
    }

    public function edit_customer_provider($id)
    {
        $companies = Company::where('user_id', auth()->user()->id)->get();
        $client_supplier = Company::with('clientSuppliers.contactCS')->where('user_id', auth()->user()->id)->whereHas('clientSuppliers', function($query) use ($id){
            return $query->where('id', $id);
        })->first()->clientSuppliers->first();

        return view('registration.commercial.customerProvider.edit', compact('companies', 'client_supplier'));
    }

    public function update_customer_provider(Request $request)
    {
        $request->validate([
            'company_id' => 'required',
            'corporate_name' => 'required',
        ]);

        $client_supplier['company_id']              = $request->company_id;
        $client_supplier['corporate_name']          = $request->corporate_name;
        $client_supplier['fantasy_name']            = $request->fantasy_name;
        $client_supplier['type_person']             = $request->type_person;
        $client_supplier['document_number']         = $request->document_number;
        $client_supplier['tax_regime_code']         = $request->tax_regime_code;
        $client_supplier['customer_since']          = date('Y-m-d', strtotime(str_replace('/', '-', $request->customer_since)));
        $client_supplier['taxpayer']                = $request->taxpayer;
        $client_supplier['state_registration']      = $request->state_registration;
        $client_supplier['ie_exempt']               = $request->ie_exempt;
        $client_supplier['municipal_registration']  = $request->municipal_registration;
        $client_supplier['rg']                      = $request->rg;
        $client_supplier['issuing_agency']          = $request->issuing_agency;
        $client_supplier['client_type']             = $request->client_type;
        $client_supplier['zip_code']                = $request->zip_code;
        $client_supplier['state']                   = $request->state;
        $client_supplier['city']                    = $request->city;
        $client_supplier['address2']                = $request->address2;
        $client_supplier['address']                 = $request->address;
        $client_supplier['number']                  = $request->number;
        $client_supplier['complement']              = $request->complement;
        $client_supplier['status']                  = '1';

        $client_supplier_up = ClientSupplier::find($request->id)->update($client_supplier);

        foreach ($request->contact as $contact){
            $contacts = [];
            $contacts['company_id']         = $request->company_id;
            $contacts['client_supplier_id'] = $request->id;
            $contacts['contact_name']       = $contact['contact_name'];
            $contacts['phone1']             = $contact['phone1'];
            $contacts['phone2']             = $contact['phone2'];
            $contacts['contact_email']      = $contact['contact_email'];

            if(isset($contact['id'])){
                $contacts = ContactCS::find($contact['id'])->update($contacts);
            }else{
                $contacts = ContactCS::create($contacts);
            }
        }

        $rota = route('registration.commercial.customer_provider');
        $msg = ($request->client_type == '0' ? 'Cliente' : 'Fornecedor').' alterado com Sucesso!';

        return view('success', compact('rota', 'msg'));
    }

    public function destroy_customer_provider(Request $request)
    {
        $client_supplier = ClientSupplier::find($request->id)->delete();
        $contactCS = ContactCS::whre('client_supplier_id',$request->id)->delete();
        return response()->json($request->id);
    }
}
