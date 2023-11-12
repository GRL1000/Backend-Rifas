<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::user();

            $token = $user->createToken('AppRifas')->plainTextToken;

            $arr = array('acceso' => "ok", 'error' => "", 'token' => $token);

            return json_encode($arr);
        }

        else {
            $arr = array('acceso' => "", 'error' => "No existe el usuario o la contraseña");
            return json_encode($arr);
        }
    }
}
