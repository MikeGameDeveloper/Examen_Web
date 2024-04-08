<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreThingRequest;
use App\Http\Requests\UpdateThingRequest;

class VehicleController extends Controller
{
    public function index(): View
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index', ['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->type = $request->type;
        $vehicle->capacity = $request->capacity;
        $vehicle->year = $request->year;
        $vehicle->status = $request->status;
        $vehicle->save();
        return redirect()->back()->with('success', 'Inregistrare cu success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return view('frontend.show', [
            'vehicle' => $vehicle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle):View
    {
        return view('frontend.edit', [
            'vehicle' => $vehicle,
        ]); 
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->name = $request->name;
        $vehicle->type = $request->type;
        $vehicle->capacity = $request->capacity;
        $vehicle->year = $request->year;
        $vehicle->status = $request->status;
        $vehicle->save();
        return redirect()->back()->with('success', 'Inregistrare cu success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle): RedirectResponse
    {
        $vehicle->delete();
        return redirect()->back()->with('success', 'Stergere cu success!');
    }

}
