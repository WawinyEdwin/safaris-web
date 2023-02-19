<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    
    public function category($category)
    {
        $services =  Service::where('category', $category)->get();
        return view('services.index', compact('services'));

    }

    public function all()
    {
        
        $services = Service::latest()->paginate(20);
        return view('admin.services', compact('services'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

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
        if($request->image3)
        {
            $path_2 = $request->image3->store('images', 'public');
            $service->image3 = $path_2;
        }
        if($request->image4)
        {
            $path_3 = $request->image4->store('images', 'public');
            $service->image4 = $path_3;
        }
        if($request->image5)
        {
            $path_4 = $request->image5->store('images', 'public');
            $service->image5 = $path_4;
        }
        if($request->image6)
        {
            $path_5 = $request->image6->store('images', 'public');
            $service->image6 = $path_5;
        }
        $service->name = $request->name;
        $service->slug = str_replace(" ", "-", $request->name) ;
        $service->category = $request->category;
        $service->location = $request->location;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->user_id = Auth::id();

        $service->save();

        return redirect()->route('services.all')->with('success', 'You Added a service.');

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
        $service = Service::where("slug", $slug)->first();
        $services = Service::latest()->get();
        return view("services.show", compact("service", "services"));
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
        return view("services.edit", compact("service"));
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

        $service = Service::find($id);
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
                $service->image = $path;
                $service->image2 = $path2;
                $service->image3 = $path3;
                $service->image4 = $path4;
                $service->image5 = $path5;
                $service->image6 = $path6;
                
            } else {
                unset($service['image']);
                unset($service['image2']);
                unset($service['image3']);
                unset($service['image4']);
                unset($service['image5']);
                unset($service['image6']);
            }
        $service->name = $request->name;
        $service->category = $request->category;
        $service->location = $request->location;
        $service->price = $request->price;
        $service->description = $request->description;

        $service->update();

        return redirect()->route("services.all")->with("success", "Product Updated");
    
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
        return redirect()->route('services.all')->with('success', 'You Deleted Service.');
    }


    /*
    * Publish Service.
     */

     //Published toggle
     public function publish($id)
     {
         $service = Service::find($id);
         if ($service->published == 0) {
             $service->published = 1;
             $service->update();
         } else {
             $service->published = 0;
             $service->update();
         }
 
         return redirect()->route('services.all');
     }
}
