<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolucionController extends Controller
{
    public function codigo(){
        return view('codigo');
    }
    public function solucion(Request $request){
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');

        $discriminante = $a * $a + $b * $b;
        $resultado = (sqrt($discriminante));

        return view('solucion', [
            'a'=> $a,
            'b'=> $b,
            'resultado'=>$resultado,
        ]);
    }
}
