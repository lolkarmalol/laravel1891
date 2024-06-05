<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TruckTrucker;
use App\Models\Trucker;
use App\Models\Truck;

class TruckTruckerController extends Controller
{
    public function asociar()
    {
        $truckers = Trucker::all();
        $trucks = Truck::all();
        return view('truck_trucker.asociar', compact('truckers', 'trucks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'trucker_id' => 'required|exists:truckers,id',
            'truck_id' => 'required|exists:trucks,id',
        ]);

        TruckTrucker::create($validated);

        return redirect()->route('truck_trucker.index');
    }
}
