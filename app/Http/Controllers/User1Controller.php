<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class User1Controller extends Controller
{
    public function formularioUsuario()
    {
        return view('frm_usuario');
    }

    public function usuarioStore(Request $request)
    {
        $frase = $request->input('text');
        $fraseInvertida = strrev($frase);

      
        User1::create(['text' => $fraseInvertida]);

        return $fraseInvertida;
    }
}
