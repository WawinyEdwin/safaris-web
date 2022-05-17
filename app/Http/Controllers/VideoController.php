<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Blog;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $videos = Video::latest()->paginate(6);
        $blogs = Blog::all();

        return view('videos.index', 
        [
            'videos' => $videos,
            'blogs' => $blogs,
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
        return view('videos.create');
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
            'url' => 'required',
            'name' => 'required'
        ]);

        $video = new Video;

        $split_url = explode("/",$request->url);

        $video->url = end($split_url);
        $video->name = $request->name;

        $video->save();

        

        return redirect()->route('videos')->with('success', 'Video Added Succsfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video, $id)
    {
     
        $video = Video::find($id);
        $video->delete();

        return redirect()->route('videos')->with('success', 'Deleted!');
    }
}
