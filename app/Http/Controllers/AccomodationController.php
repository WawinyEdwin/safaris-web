<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomodation;
use Illuminate\Support\Facades\Auth;

class AccomodationController extends Controller
{

    public function category($category)
    {
        $accomodations =  Accomodation::where('category', $category)->get();
        return view('accomodations.index', compact('accomodations'));

    }

    public function all()
    {
        
        $accomodations = Accomodation::latest()->paginate(20);
        return view('admin.accomodations', compact('accomodations'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accomodations = Accomodation::latest()->paginate(20);
        return view('accomodations.index', compact('accomodations'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("accomodations.create");
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
            "rates" => "required",
            "description" => "required"
        ]);

        $accomodation = new Accomodation;
        $path = $request->image->store('images', 'public');
        $path_1 = $request->image2->store('images', 'public');
        
        if($request->image3 || $request->image4 || $request->image5 || $request->image6 )
        {
            $path_2 = $request->image3->store('images', 'public');
            $path_3= $request->image4->store('images', 'public');
            $path_4 = $request->image5->store('images', 'public');
            $path_5 = $request->image6->store('images', 'public');
            $accomodation->image4 = $path_3;
            $accomodation->image5 = $path_4;
            $accomodation->image6 = $path_5;
            $accomodation->image3 = $path_2;
        }
       
        $accomodation->image = $path;
        $accomodation->image2 = $path_1;
   
    
        $accomodation->name = $request->name;
        $accomodation->slug = str_replace(" ", "-", $request->name) ;
        $accomodation->category = $request->category;
        $accomodation->location = $request->location;
        $accomodation->rates = $request->rates;
        $accomodation->description = $request->description;
        $accomodation->user_id = Auth::id();
        $accomodation->save();
        return redirect()->route('accomodations.all');

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
        $accomodation = Accomodation::where("slug", $slug)->first();
        $accomodations = Accomodation::latest()->limit(5)->get();
        return view("accomodations.show", compact("accomodation", "accomodations"));
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
        $accomodation = Accomodation::find($id);
        return view("accomodations.edit", compact("accomodation"));
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

        $accomodation = Accomodation::find($id);
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
                $accomodation->image = $path;
                $accomodation->image2 = $path2;
                $accomodation->image3 = $path3;
                $accomodation->image4 = $path4;
                $accomodation->image5 = $path5;
                $accomodation->image6 = $path6;
                
            } else {
                unset($accomodation['image']);
                unset($accomodation['image2']);
                unset($accomodation['image3']);
                unset($accomodation['image4']);
                unset($accomodation['image5']);
                unset($accomodation['image6']);
            }

        $accomodation->name = $request->name;
        $accomodation->category = $request->category;
        $accomodation->location = $request->location;
        $accomodation->rates = $request->rates;
        $accomodation->description = $request->description;

        $accomodation->update();

        return redirect()->route("accomodations.all")->with("success", "accomodation Updated");
    
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
        $accomodation = Accomodation::find($id);
        $accomodation->delete();
        return redirect()->route('accomodations.all')->with('success', 'You Deleted accomodation.');
    }

    //Published toggle
    public function publish($id)
    {
        $accomodation = Accomodation::find($id);
        if ($accomodation->published == 0) {
            $accomodation->published = 1;
            $accomodation->update();
        } else {
            $accomodation->published = 0;
            $accomodation->update();
        }

        return redirect()->route('accomodations.all');
    }
}
