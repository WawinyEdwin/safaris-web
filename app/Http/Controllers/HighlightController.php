<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $highlights = Highlight::all();
        return view('highlights.index', 
        [
            'highlights' => $highlights
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('highlights.create');
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
            'image' => 'required'
        ]);

        $highlight = new Highlight;
        $path = $request->image->store('images', 'public');
        $highlight->image = $path;

        $highlight->save();

        return redirect()->route('highlights.index')->with('success', 'Added Succesfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function show(Highlight $highlight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function edit(Highlight $highlight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Highlight $highlight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highlight $highlight, $id)
    {
        //
        $highlight = Highlight::find($id);

        $highlight->delete();

        return redirect()->route('highlights.index')->with('success', 'Deleted!');
    }
}
