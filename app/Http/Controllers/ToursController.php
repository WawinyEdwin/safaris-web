<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToursController extends Controller
{
    //show admin page
    public function admin()
    {
        return view('admin.home');

    }

    // safaris
    public function safaris() 
    {
        $categories = Category::all();
        $blogs =  Blog::latest()->limit(2)->get();
        $safaris = Tours::inRandomOrder()->paginate(20);
        return view("safaris.index", compact("categories", "blogs", "safaris"));
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
        $path3 = $request->image3->store('images', 'public');
        $path4 = $request->image4->store('images', 'public');
        $path5 = $request->image5->store('images', 'public');
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
        $tours->image3 = $path3;
        $tours->image4 = $path4;
        $tours->image5 = $path5;
       
        $tours->location = $request->location;
        $tours->user_id = Auth::id();

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
        if($request->hasFile('image') || $request->hasFile('image2') || $request->hasFile('image3') || $request->hasFile('image4') || $request->hasFile('image5') || $request->hasFile('image6')) 
        {
            $path = $request->image->store('images', 'public');
            $path2 = $request->image2->store('images', 'public');
            $path3 = $request->image3->store('images', 'public');
            $path4 = $request->image4->store('images', 'public');
            $path5 = $request->image5->store('images', 'public');
            $path6 = $request->image6->store('images', 'public');
            $tours->image = $path;
            $tours->image2 = $path2;
            $tours->image3 = $path3;
            $tours->image4 = $path4;
            $tours->image5 = $path5;
            $tours->image6 = $path6;
            
        } else {
            unset($tours['image']);
            unset($tours['image2']);
            unset($tours['image3']);
            unset($tours['image4']);
            unset($tours['image5']);
            unset($tours['image6']);
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

       //Published toggle
       public function publish($id)
       {
           $tour = Tours::find($id);

           if ($tour->published == 0) {
               $tour->published = 1;
               $tour->update();
           } else {
               $tour->published = 0;
               $tour->update();
           }
   
           return redirect()->route('tours');
       }
   
   
}
