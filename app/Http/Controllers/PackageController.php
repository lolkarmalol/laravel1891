<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'addressee' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        Package::create($validated);

        return redirect()->route('packages.index');
    }
}
