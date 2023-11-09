<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    public function hola() 
    {
        return view('hola');
    }

    public function practica3_get() {
        return "hola mundo desde api";
    }

    public function practica3_post(Request $req) {
        return $req->mensaje;
    }

    public function practica3_json_get() {

        $data = [
            "menssage" => "hola mundo"
        ];

        return response()->json($data);
    }

    public function practica3_json_post(Request $req) {
        $data = [
            "message" => $req->mensaje
        ];

        return response()->json($data);
    }
}
