<?php

namespace App\Http\Controllers;

use App\Http\Requests\TownRequest;
use App\Models\Town;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Moderator/Towns/Index',
            ['towns' => Town::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Moderator/Towns/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TownRequest $request)
    {
        Town::create($request->validated());

        return redirect()->route('towns.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Town $town)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Town $town)
    {
        return Inertia::render(
            'Moderator/Towns/Edit',
            ['town' => $town]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TownRequest $request, Town $town)
    {
        $town->update($request->validated());
        return redirect()->route('towns.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Town $town)
    {
        $town->delete();
        return redirect()->route('towns.index');
    }
}
