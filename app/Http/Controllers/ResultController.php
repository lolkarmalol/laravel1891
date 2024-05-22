<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function formularioCuadratica()
    {
        return view('frm_cuadratica');
    }

    public function calculateStore(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
    
        $delta = ($b ** 2) - (4 * $a * $c);
    
        if ($delta < 0) {
            return "No hay soluciones reales";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
    
            $result = new Result([
                'a' => $a,
                'b' => $b,
                'c' => $c,
                'x1' => $x1,
                'x2' => $x2,
            ]);
    
            $result->save();
            return $result; 
            
        }
    }
}