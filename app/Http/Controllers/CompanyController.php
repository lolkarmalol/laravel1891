<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
     
    public function formularioEmpresa(){

        return view('frm_empresa');

    }

    public function companyStore(Request $request){

        $company = new Company();

        $company->name = $request->name;
        $company->NIT = $request->NIT;
        $company->phone = $request->phone;

        $company->save();

        return $company;

    }

}
