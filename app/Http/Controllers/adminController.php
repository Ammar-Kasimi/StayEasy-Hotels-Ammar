<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::All();

        // dd($hotels);
        return view('admin.hotel.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return redirect()->route('admin.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hotel::create($request->validate(['name' => 'string', 'address' => '', 'status' => 'string', 'img' => '']));
        return redirect()->route('admin.hotel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $hotel = Hotel::find($id);
        // return view('admin.hotel.show', compact('hotels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {

        return view('admin.hotel.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Hotel $hotel)
    {
        
        $validated = $request->validate(['name' => 'required|string', 'address' => ['required', 'string'], 'img' => 'required', 'status' => 'string']);
        $validated['completed'] = $request->has('completed');

        $hotel->update($validated);

        return redirect()->route('admin.hotel.index');
    }
    public function updateStatus(Request $request,Hotel $hotel)
    {
       
        $validated = $request->validate(rules: ['status' => 'required']);
        $validated['completed'] = $request->has('completed');

        $hotel->update($validated);
        return redirect()->route('admin.hotel.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('admin.hotel.index');
        //return redirect()->route('admin.hotel.index');
    }
}
