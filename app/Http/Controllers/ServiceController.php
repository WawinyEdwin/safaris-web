<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::latest()->paginate(20);
        return view('services.index', compact('services'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("services.create");
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
            "name" => "required",
            "category" => "required",
            "image" => "required",
            "location" => "required",
            "price" => "required",
            "description" => "required"
        ]);

        $service = new Service;
        $path = $request->image->store('images', 'public');
        $path_1 = $request->image->store('images', 'public');
        $service->image = $path;
        $service->image2 = $path_1;
        $service->name = $request->name;
        $service->slug = str_replace(" ", "-", $request->name) ;
        $service->category = $request->category;
        $service->location = $request->location;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->user_id = Auth::id();

        $service->save();

        return redirect()->route('services')->with('success', 'You Added a service.');

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
        $service = Service::find($slug);
        return view("services.show", compact("service"));
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
        $service = Service::find($id);
        return view("services.show", compact("service"));
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
        $request->validate([
            "name" => "required",
            "category" => "required",
            "location" => "required",
            "price" => "required",
            "description" => "required"
        ]);


        $service = Service::find($id);
        //
            //Check the presence of images first.
            if($request->hasFile('image') || $request->hasFile('image2')) 
            {
                $path = $request->image->store('images', 'public');
                $path2 = $request->image2->store('images', 'public');
                $service->image = $path;
                $service->image2 = $path2;
                
            } else {
                unset($service['image']);
                unset($service['image2']);
            }

        $service->name = $request->name;
        $service->category = $request->category;
        $service->location = $request->location;
        $service->price = $request->price;
        $service->quantity_available = $request->quantity_available;
        $service->description = $request->description;

        $service->update();

        return redirect()->route("services")->with("success", "Product Updated");
    
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
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services')->with('success', 'You Deleted Service.');
    }


    /*
    * Publish Service.
     */

     public function publish($id)
     {

     }
}
