<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PainelController extends Controller
{
    public function cepConsulta($cep)
    {
        function consultaCep($cep){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/$cep/json/");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_POST, FALSE);

            $response = json_decode(curl_exec($ch), true);
            curl_close($ch);

            return $response;
        }

        return response()->json(consultaCep($cep));
    }

    public function dashboard()
    {
        // auth()->guard('user')->logout();
        return view('dashboard');
    }

    public function myProfile()
    {
        $companies = getCompanies()->get();
        return view('profile.myProfile', get_defined_vars());
    }

    public function editProfile()
    {
        return view('profile.editProfile', get_defined_vars());
    }

    public function saveProfile(Request $request)
    {
        // dd($request->all());
        $user['name'] = $request->name;
        $user['sex'] = $request->sex;
        $user['document_number'] = $request->document_number;
        $user['reg'] = $request->reg;
        $user['phone1'] = $request->phone1;
        $user['phone2'] = $request->phone2;
        $user['language'] = $request->language;
        $user['theme'] = $request->theme;
        if($request->password) $user['password'] = Hash::make($request->password);

        User::find(auth()->user()->id)->update($user);

        $rota = route('profile.my');
        $msg = 'Alteração Concluida com Sucesso!';

        return view('success', get_defined_vars());
    }
}