<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coverBlogs = Blog::latest()->paginate(6);

        $blogs = Blog::latest()->limit(2)->get();

        return view('blogs.index',
        [
            'blogs' => $blogs,
            'coverBlogs' => $coverBlogs
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
        $blogs = Blog::all();
        return view('blogs.create', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);

        //
        $blog = new Blog;

        $path = $request->image->store('images', 'public');

        $blog->title = $request->title;
        $blog->image = $path;
        $blog->content = $request->content;

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Content Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        $blogs = Blog::latest()->limit(2)->get();
        $coverBlogs = Blog::latest()->limit(4)->get();

        return view('blogs.show',compact('blog'),[
            'blogs' => $blogs,
            'coverBlogs' => $coverBlogs 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        //
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        //
         //validate the request
         $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);

        //
        $blog = Blog::find($id);


        $path = $request->image->store('images', 'public');

        $blog->title = $request->title;
        $blog->image = $path;
        $blog->content = $request->content;

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Content Created Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        //
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blogs')->with('success', 'Content Deleted');

    }
}
