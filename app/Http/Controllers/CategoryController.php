<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub_category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sub_categories = Sub_category::latest()->paginate(10);
        
        $categories = Category::latest()->paginate(10);
        return view('categories.index',['sub_categories' => $sub_categories ], compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    //create form for sub category
    public function sub_create()
    {
        //
        return view('categories.sub_create');
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
            'category' => 'required'
        ]);

        $category = new Category;
        $category->category = $request->category;

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category Saved!');
    }

    //sub category db additi
    public function store_sub(Request $request)
    {
        //
        $request->validate([
            'sub_category' => 'required'
        ]);

        $sub_category = new Sub_category;
        $sub_category->sub_category = $request->sub_category;

        $sub_category->save();

        return redirect()->route('categories.index')->with('success', 'Category Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    //subcategory edit form
    public function sub_edit($id)
    {
        //
        $sub_category = Sub_category::find($id);

        return view('categories.sub_edit', compact('sub_category'));
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
        //
        $request->validate([
            'category' => 'required'
        ]);

        $category = new Category;
        $category = Category::find($id);
        $category->category = $request->category;
        
        $category->update();

        return redirect()->route('categories.index')->with('success', 'Category Updated!');
    }

    //update sub category
    public function update_sub(Request $request, $id)
    {
        //
        $request->validate([
            'sub_category' => 'required'
        ]);

        $sub_category = new Sub_category;
        $sub_category = Sub_category::find($id);

        $sub_category->sub_category = $request->sub_category;

        $sub_category->update();

        return redirect()->route('categories.index')->with('success', 'Sub category Updated!');
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
      
        $category= Category::find($id);

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Deleted Successfully');

    }

    public function destroy_sub($id)
    {
        //
        $sub_category = Sub_category::find($id);

        $sub_category->delete();

        return redirect()->route('categories.index')->with('success', 'Deleted Successfully');

    }
}
