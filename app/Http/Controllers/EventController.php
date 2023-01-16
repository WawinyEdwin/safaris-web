<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function category($category)
    {
        $events =  Event::where('category', $category)->get();
        return view('events.index', compact('events'));

    }

    public function all()
    {
        
        $events = Event::latest()->paginate(20);
        return view('admin.events', compact('events'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::latest()->paginate(20);
        return view('events.index', compact('events'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("events.create");
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
        // dd($request);
        $request->validate([
            "name" => "required",
            "category" => "required",
            "image" => "required",
            "location" => "required",
            "price" => "required",
            "when" => "required",
            "starts" => "required",
            "ends" => "required",
            "description" => "required"
        ]);

        $event = new Event;
        $path = $request->image->store('images', 'public');
        $path_1 = $request->image2->store('images', 'public');
        $event->image = $path;
        $event->image2 = $path_1;
        $event->name = $request->name;
        $event->slug = str_replace(" ", "-", $request->name) ;
        $event->category = $request->category;
        $event->location = $request->location;
        $event->price = $request->price;
        $event->when = $request->when;
        $event->starts = $request->starts;
        $event->ends = $request->ends;
        $event->description = $request->description;
        $event->user_id = Auth::id();
        $event->save();
        return redirect()->route('events.all')->with('success', 'You Added a Product.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $event = Event::where("slug", $slug)->first();
        return view("events.show", compact("event"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Event::find($id);
        return view("events.edit", compact("event"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{

        $event = Event::find($id);
        //
            //Check the presence of images first.
            if($request->hasFile('image') || $request->hasFile('image2')) 
            {
                $path = $request->image->store('images', 'public');
                $path2 = $request->image2->store('images', 'public');
                $event->image = $path;
                $event->image2 = $path2;
                
            } else {
                unset($event['image']);
                unset($event['image2']);
            }

        $event->name = $request->name;
        $event->slug = $request->slug;
        $event->category = $request->category;
        $event->location = $request->location;
        $event->price = $request->price;
        $event->when = $request->when;
        $event->starts = $request->starts;
        $event->ends = $request->ends;
        $event->description = $request->description;

        $event->update();

        return redirect()->route("events.all")->with("success", "event Updated");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Event::find($id);
        $product->delete();
        return redirect()->route('events.all')->with('success', 'You Deleted event.');
    }

    //Published toggle
    public function publish($id)
    {
        $product = Event::find($id);
        if ($product->published == 0) {
            $product->published = 1;
            $product->update();
        } else {
            $product->published = 0;
            $product->update();
        }

        return redirect()->route('events.all');
    }
}
