<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::All();
        return view('hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hotel::create($request->validate(['content=>required|string']));
        return redirect()->route('hotels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {

        return view('hotels.edit', compact('host'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Hotel $hotel)
    {
        $validated = $request->validate(['content=>required|string']);
        $validated['completed'] = $request->has('completed');

        $hotel->update($validated);
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}
