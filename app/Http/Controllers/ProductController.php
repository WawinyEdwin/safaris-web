<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::latest()->paginate(20);
        return view('products.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("products.create");
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
            "quantity_available" => "required",
            "description" => "required"
        ]);

        $product = new Product;
        $path = $request->image->store('images', 'public');
        $path_1 = $request->image2->store('images', 'public');
        $product->image = $path;
        $product->image2 = $path_1;
        $product->name = $request->name;
        $product->slug = str_replace(" ", "-", $request->name) ;
        $product->category = $request->category;
        $product->location = $request->location;
        $product->price = $request->price;
        $product->quantity_available = $request->quantity_available;
        $product->description = $request->description;
        $product->user_id = Auth::id();
        $product->save();
        return redirect()->route('admin')->with('success', 'You Added a Product.');

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
        $product = Product::find($slug);
        return view("products.show", compact("product"));
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
        $product = Product::find($id);
        return view("products.show", compact("product"));
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
            "quantity_available" => "required",
            "description" => "required"
        ]);


        $product = Product::find($id);
        //
            //Check the presence of images first.
            if($request->hasFile('image') || $request->hasFile('image2')) 
            {
                $path = $request->image->store('images', 'public');
                $path2 = $request->image2->store('images', 'public');
                $product->image = $path;
                $product->image2 = $path2;
                
            } else {
                unset($product['image']);
                unset($product['image2']);
            }

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->category = $request->category;
        $product->location = $request->location;
        $product->price = $request->price;
        $product->quantity_available = $request->quantity_available;
        $product->description = $request->description;

        $product->update();

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
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products')->with('success', 'You Deleted Product.');
    }
}
