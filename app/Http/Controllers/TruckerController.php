<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trucker;
use App\Models\Package;

class TruckerController extends Controller
{
    public function create()
    {
        $packages = Package::all();
        return view('truckers.create', compact('packages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'dni' => 'required|string|max:255',
            'population' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'package_id' => 'nullable|exists:packages,id',
        ]);

        Trucker::create($validated);

        return redirect()->route('truckers.index');
    }
}
