<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Models\Region;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Moderator/Regions/Index',
            ['regions' => Region::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Moderator/Regions/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegionRequest $request)
    {
        Region::create($request->validated());
        return redirect()->route('regions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region)
    {
        return Inertia::render(
            'Moderator/Regions/Edit',
            ['region' => $region]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegionRequest $request, Region $region)
    {
        $region->update($request->validated());
        return redirect()->route('regions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('regions.index');
    }
}
