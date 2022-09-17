<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Category;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    //show admin page
    public function admin() {

        return view('admin.home');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tours = Tours::latest()->paginate(20);
        return view('tours.index', compact('tours'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        return view('tours.create', 
        [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the input fields.
        $request->validate([
            'hotel' => 'required',
            'transport' => 'required',
            'image' => 'required|mimes:jpg,jpeg,svg,png,webp',
            'image1' => 'required|mimes:jpg,jpeg,svg,png,webp',
            'image2' => 'required|mimes:jpg,jpeg,svg,png,webp',
            'single_room' => 'required',
            'per_person_sharing' => 'required',
            'meals' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'location' => 'required',
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
        $tours->sub_category = $request->sub_category;
        $tours->additional_info = $request->additional_info;
        $tours->per_person_sharing = $request->per_person_sharing;
        $tours->image = $path;
        $tours->image1 = $path1;
        $tours->image2 = $path2;
        $tours->location = $request->location;

        $tours->save();

        return redirect()->route('tours')->with('success', 'You Added a Tour.');
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

        $categories = Category::all();

        $blogs = Blog::all();
        
        return view('tours.show', compact('tours'),
        [
            'categories' => $categories,
            'blogs' => $blogs
        ]);
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
        $categories = Category::all();

        return view('tours.edit',
            [
             'categories' => $categories,
             'tours' => $tours
            ]);
        
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
            'single_room' => 'required',
            'per_person_sharing' => 'required',
            'meals' => 'required',
            'category' => 'required',
            'sub_category' => 'required'
        ]);

        $tours = new Tours;
        $tours = Tours::find($id);

        //Check the presence of images first.
        if($request->hasFile('image') || $request->hasFile('image1') || $request->hasFile('image2')) 
        {
            $path = $request->image->store('images', 'public');
            $path1 = $request->image1->store('images', 'public');
            $path2 = $request->image2->store('images', 'public');
            $tours->image = $path;
            $tours->image1 = $path1;
            $tours->image2 = $path2;
            
        } else {

            unset($tours['image']);
            unset($tours['image1']);
            unset($tours['image2']);
        }

            $tours->hotel = $request->hotel;
            $tours->transport = $request->transport;
            $tours->single_room = $request->single_room;
            $tours->meals = $request->meals;
            $tours->category = $request->category;
            $tours->sub_category = $request->sub_category;
            $tours->per_person_sharing = $request->per_person_sharing;
            $tours->additional_info = $request->additional_info;
            
        
        $tours->update();

        return redirect()->route('tours')->with('success', 'You Updated a Tour.');
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

        return redirect()->route('tours')->with('success', 'You Deleted a Tour.');
    }
}
