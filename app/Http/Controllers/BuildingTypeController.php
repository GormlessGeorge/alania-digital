<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuildingTypeRequest;
use App\Models\BuildingType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BuildingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Moderator/BuildingTypes/Index',
            ['buildingTypes' => BuildingType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Moderator/BuildingTypes/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BuildingTypeRequest $request)
    {
        BuildingType::create($request->validated());
        return redirect()->route('building-types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BuildingType $buildingType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BuildingType $buildingType)
    {
        return Inertia::render(
            'Moderator/BuildingTypes/Edit',
            ['buildingType' => $buildingType]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BuildingTypeRequest $request, BuildingType $buildingType)
    {
        $buildingType->update($request->validated());
        return redirect()->route('building-types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BuildingType $buildingType)
    {
        $buildingType->delete();
        return redirect()->route('building-types.index');
    }
}
