<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('profile.myProfile', get_defined_vars());
    }

    public function editProfile()
    {
        # code...
    }
}