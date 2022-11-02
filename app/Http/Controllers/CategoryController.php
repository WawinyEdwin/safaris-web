<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $categories = Category::latest()->paginate(10);
        return view('categories.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required'
        ]);

        $category = new Category;
        
        $category->category_name = $request->category_name;
        $category->sub_category = $request->sub_category;
        $category->sub_category1 = $request->sub_category1;
        $category->sub_category2 = $request->sub_category2;

        $category->save();

        return redirect()->route('categories')->with('success', 'Category Saved!');
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
            'category_name' => 'required'
        ]);
        $category = new Category;
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->sub_category = $request->sub_category;
        $category->sub_category1 = $request->sub_category1;
        $category->sub_category2 = $request->sub_category2;
        $category->update();
        return redirect()->route('categories')->with('success', 'Category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);

        $category->delete();

        return redirect()->route('categories')->with('success', 'Deleted Successfully');

    }

}
