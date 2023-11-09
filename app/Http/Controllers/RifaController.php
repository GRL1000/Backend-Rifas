<?php

namespace App\Http\Controllers;

use App\Models\Rifa;
use Illuminate\Http\Request;

class RifaController extends Controller
{
    public function create(Request $request) {
        if($request->id == 0) {
            $rifa = new Rifa();
        } else {
            $rifa = Rifa::find($request->id);
        }

        $rifa->nombre= $request->nombre;
        $rifa->descripcion= $request->descripcion;
        $rifa->fecha_inicio= $request->fecha_inicio;
        $rifa->fecha_fin= $request->fecha_fin;
        $rifa->costo= $request->costo;
        $rifa->num_boletos= $request->num_boletos;
        $rifa->activa= $request->activa;
        $rifa->save();

        return $rifa;
    }

    public function list() {
        $rifas = Rifa::all();
        return $rifas;
    }

    public function delete(Request $request) {
        $rifa = Rifa::find($request->id);
        $rifa->delete();
        return 'Ok';
    }
}
