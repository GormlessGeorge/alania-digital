<?php

namespace App\Http\Controllers;

use App\Http\Requests\StreetRequest;
use App\Models\Street;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Moderator/Streets/Index',
            ['streets' => Street::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Moderator/Streets/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StreetRequest $request)
    {
        Street::create($request->validated());

        return redirect()->route('streets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Street $street)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Street $street)
    {
        return Inertia::render(
            'Moderator/Streets/Edit',
            ['street' => $street]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StreetRequest $request, Street $street)
    {
        $street->update($request->validated());
        return redirect()->route('streets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Street $street)
    {
        $street->delete();
        return redirect()->route('streets.index');
    }
}
