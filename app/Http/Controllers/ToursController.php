<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use App\Models\Booking;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings = Booking::latest()->paginate(5);
        return view('admin.home', compact('bookings'))->with('i', (request()->input('page', 1) - 1) * 5);

        $tours = Tours::latest()->paginate(5);
        return view('admin.home', compact('tours'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'hotel' => 'required',
            'transport' => 'required',
            'image' => 'required | jpg, jpeg, png',
            'single_room' => 'required',
            'meals' => 'required',
            'category' => 'required'
        ]);

        $newImg = 





        Tours::create($request->all());

        return redirect()->route('admin.tours')->with('success', 'You Added a Tour.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function show(Tours $tours)
    {
        //
        return view('tours.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function edit(Tours $tours)
    {
        //
        return view('tours.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tours $tours)
    {
        //
        $request->validate([
            'hotel' => 'required',
            'transport' => 'required',
            'per_person_sharing' => 'required',
            'single_room' => 'required',
            'meals' => 'required',
        ]);

        Tours::create($request->all());

        return redirect()->route('admin.tours')->with('success', 'You Updated a Tour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tours $tours)
    {
        //
        $tours->delete();

        return redirect()->route('admin.tours')->with('success', 'You Deleted a Tour.');
    }
}
