<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function blogs() {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs', compact('blogs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
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
        $path_1 = $request->image2->store('images', 'public');
        $path_2 = $request->image3->store('images', 'public');
        $path_3 = $request->image4->store('images', 'public');
        $path_4 = $request->image5->store('images', 'public');
        $path_5 = $request->image6->store('images', 'public');

        $blog->title = $request->title;
        $blog->image = $path;
        $blog->image2 = $path_1;
        $blog->image3 = $path_2;
        $blog->image4 = $path_3;
        $blog->image5 = $path_4;
        $blog->image6 = $path_5;
        $blog->content = $request->content;
        $blog->user_id = Auth::id();

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Content Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, $id)
    {
        //
        $blogs = Blog::latest()->limit(2)->get();

        $blog = Blog::find($id);

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

        if($request->hasFile('image') || $request->hasFile('image2') || $request->hasFile('image3') || $request->hasFile('image4') || $request->hasFile('image5') || $request->hasFile('image6')) 
        {
            $path = $request->image->store('images', 'public');
            $path2 = $request->image2->store('images', 'public');
            $path3 = $request->image3->store('images', 'public');
            $path4 = $request->image4->store('images', 'public');
            $path5 = $request->image5->store('images', 'public');
            $path6 = $request->image6->store('images', 'public');
            $blog->image = $path;
            $blog->image2 = $path2;
            $blog->image3 = $path3;
            $blog->image4 = $path4;
            $blog->image5 = $path5;
            $blog->image6 = $path6;
            
        } else {
            unset($blog['image']);
            unset($blog['image2']);
            unset($blog['image3']);
            unset($blog['image4']);
            unset($blog['image5']);
            unset($blog['image6']);
        }

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = Auth::id();
        $blog->update();
        return redirect()->route('all-blogs')->with('success', 'Content updated Successfully!');
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

        //Published toggle
        public function publish($id)
        {
            $blog = Blog::find($id);
 
            if ($blog->published == 0) {
                $blog->published = 1;
                $blog->update();
            } else {
                $blog->published = 0;
                $blog->update();
            }
    
            return redirect()->route('blogs');
        }
    
}
