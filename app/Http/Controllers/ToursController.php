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
        
        $tours = Tours::latest()->paginate(20);
        return view('tours.index', compact('tours'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('tours.index', ['tours' => $tours]);
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
        // //
        $request->validate([
            'hotel' => 'required',
            'transport' => 'required',
            'image' => 'required',
            'image1' => 'required ',
            'image2' => 'required ',
            'single_room' => 'required',
            'per_person_sharing' => 'required',
            'meals' => 'required',
            'category' => 'required',
            'location' => 'required'
        ]);

       

        $tours = new Tours;
        $path = $request->image->store('images', 'public');
        $path1 = $request->image1->store('images', 'public');
        $path2 = $request->image2->store('images', 'public');
        $tours->hotel = $request->hotel;
        $tours->transport = $request->transport;
        $tours->single_room = $request->single_room;
        $tours->meals = $request->meals;
        $tours->category = $request->category;
        $tours->per_person_sharing = $request->per_person_sharing;
        $tours->image = $path;
        $tours->image1 = $path1;
        $tours->image2 = $path2;
        $tours->location = $request->location;

        $tours->save();

        return redirect()->route('tours.index')->with('success', 'You Added a Tour.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function show(Tours $tours, $id)
    {
        //
        $tours = Tours::find($id);
        return view('tours.show', compact('tours'), ['tours' => $tours]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function edit(Tours $tours, $id)
    {
        //
        $tours = Tours::find($id);
        return view('tours.edit', compact('tours'), ['tours' => $tours]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tours $tours, $id)
    {
        //

        $request->validate([
            'hotel' => 'required',
            'transport' => 'required',
            'image' => 'required ',
            'image1' => 'required ',
            'image2' => 'required ',
            'single_room' => 'required',
            'per_person_sharing' => 'required',
            'meals' => 'required',
            'category' => 'required'
        ]);

        $tours = new Tours;
        $tours = Tours::find($id);
        $path1 = $request->image1->store('images', 'public');
        $path2 = $request->image2->store('images', 'public');
        $path = $request->image->store('images', 'public');
        $tours->hotel = $request->hotel;
        $tours->transport = $request->transport;
        $tours->single_room = $request->single_room;
        $tours->meals = $request->meals;
        $tours->category = $request->category;
        $tours->per_person_sharing = $request->per_person_sharing;
        $tours->image = $path;
        $tours->image1 = $path1;
        $tours->image2 = $path2;

        $tours->update();

        return redirect()->route('admin.tours')->with('success', 'You Updated a Tour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tours $tours, $id)
    {
        //
        $tours = Tours::find($id);

        $tours->delete();

        return redirect()->route('tours.index')->with('success', 'You Deleted a Tour.');
    }

    public function tours($category) {

        $tours =  Tours::where('category', $category)->get();
      
        // $tours =  Tours::where('category', $category)->first();

        return view('tour.category', compact('tours'), ['category' => $category]);
     }

     public function admin() {
         return view('admin.home');
     }
}
