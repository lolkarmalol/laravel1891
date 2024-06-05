<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;

class TruckController extends Controller
{
    public function create()
    {
        return view('trucks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255',
        ]);

        Truck::create($validated);

        return redirect()->route('trucks.index');
    }
}
