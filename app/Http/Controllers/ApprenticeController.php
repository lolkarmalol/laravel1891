<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
     
    public function formularioAprendiz(){

        return view('frm_aprendiz');

    }

    public function apprenticeStore(Request $request){

        $apprentice = new Apprentice();

        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->phone = $request->phone;

        $apprentice->save();

        return $apprentice;

    }

}
