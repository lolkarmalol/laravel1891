<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cousin;

class CousinController extends Controller
{
    public function formularioCalcularPrimo()
    {
        return view('frm_primos');
    }

    public function calcularPrimoStore(Request $request)
    {
        $number = $request->input('number');

        if ($number <= 1) {
            return "$number no es primo";
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return "$number no es primo";
            }
        }
        
        $cousin = new Cousin();
        $cousin->number = $number;
        $cousin->is_prime = true;
        $cousin->save();

        return "$number es primo";
    }
}