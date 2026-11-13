<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\MuridStoreRequest;
use App\Http\Requests\MuridUpdateRequest;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murids = Murid::latest()->paginate(5);
        return view('murids.index', compact('murids'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('murids.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MuridStoreRequest $request)
    {
        Murid::create($request->validated());
        return redirect()->route('murids.index')
            ->with('success', 'Murid created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Murid $murid)
    {
        return view('murids.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murid $murid)
    {
        return view('murids.edit', compact('murid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MuridUpdateRequest $request, Murid $murid)
    {
        $murid->update($request->validated());
        return redirect()->route('murids.index')
            ->with('success', 'Murid updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid)
    {
        $murid->delete();
        return redirect()->route('murids.index')
            ->with('success', 'Murid deleted successfully.');
    }
}
