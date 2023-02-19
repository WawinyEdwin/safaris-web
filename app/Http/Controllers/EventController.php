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
        $path_2 = $request->image3->store('images', 'public');
        $path_3 = $request->image4->store('images', 'public');
        $path_4 = $request->image5->store('images', 'public');
        $path_5 = $request->image6->store('images', 'public');
        $event->image = $path;
        $event->image2 = $path_1;
        $event->image3 = $path_2;
        $event->image4 = $path_3;
        $event->image5 = $path_4;
        $event->image6 = $path_5;
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
        $events = Event::latest()->get();
        return view("events.show", compact("event", "events"));
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
            if($request->hasFile('image') || $request->hasFile('image2') || $request->hasFile('image3') || $request->hasFile('image4') || $request->hasFile('image5') || $request->hasFile('image6')) 
            {
                $path = $request->image->store('images', 'public');
                $path2 = $request->image2->store('images', 'public');
                $path3 = $request->image3->store('images', 'public');
                $path4 = $request->image4->store('images', 'public');
                $path5 = $request->image5->store('images', 'public');
                $path6 = $request->image6->store('images', 'public');
                $event->image = $path;
                $event->image2 = $path2;
                $event->image3 = $path3;
                $event->image4 = $path4;
                $event->image5 = $path5;
                $event->image6 = $path6;
                
            } else {
                unset($event['image']);
                unset($event['image2']);
                unset($event['image3']);
                unset($event['image4']);
                unset($event['image5']);
                unset($event['image6']);
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
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('events.all')->with('success', 'You Deleted event.');
    }

    //Published toggle
    public function publish($id)
    {
        $event = Event::find($id);
        if ($event->published == 0) {
            $event->published = 1;
            $event->update();
        } else {
            $event->published = 0;
            $event->update();
        }

        return redirect()->route('events.all');
    }
}
