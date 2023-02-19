<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function category($category)
    {
        $products =  Product::where('category', $category)->get();
        return view('products.index', compact('products'));

    }
    public function all()
    {
        
        $products = Product::latest()->paginate(20);
        return view('admin.products', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
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
        $path_2 = $request->image3->store('images', 'public');
        $path_3 = $request->image4->store('images', 'public');
        $path_4 = $request->image5->store('images', 'public');
        $path_5 = $request->image6->store('images', 'public');
        $product->image = $path;
        $product->image2 = $path_1;
        $product->image3 = $path_2;
        $product->image4 = $path_3;
        $product->image5 = $path_4;
        $product->image6 = $path_5;
        $product->name = $request->name;
        $product->slug = str_replace(" ", "-", $request->name) ;
        $product->category = $request->category;
        $product->location = $request->location;
        $product->price = $request->price;
        $product->quantity_available = $request->quantity_available;
        $product->description = $request->description;
        $product->user_id = Auth::id();
        $product->save();
        return redirect()->route('products.all')->with('success', 'You Added a Product.');

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
        $product = Product::where("slug", $slug)->first();
        $products = Product::latest()->limit(5)->get();
        return view("products.show", compact("product", "products"));
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
        return view("products.edit", compact("product"));
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

        $product = Product::find($id);
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
                $product->image = $path;
                $product->image2 = $path2;
                $product->image3 = $path3;
                $product->image4 = $path4;
                $product->image5 = $path5;
                $product->image6 = $path6;
                
            } else {
                unset($product['image']);
                unset($product['image2']);
                unset($product['image3']);
                unset($product['image4']);
                unset($product['image5']);
                unset($product['image6']);
            }

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->category = $request->category;
        $product->location = $request->location;
        $product->price = $request->price;
        $product->quantity_available = $request->quantity_available;
        $product->description = $request->description;

        $product->update();

        return redirect()->route("products.all")->with("success", "Product Updated");
    
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
        return redirect()->route('products.all')->with('success', 'You Deleted Product.');
    }

    //Published toggle
    public function publish($id)
    {
        $product = Product::find($id);
        if ($product->published == 0) {
            $product->published = 1;
            $product->update();
        } else {
            $product->published = 0;
            $product->update();
        }

        return redirect()->route('products.all');
    }
}
