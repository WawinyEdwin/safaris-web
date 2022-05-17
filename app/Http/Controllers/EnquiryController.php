<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Mail\EnquiryMail;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $enquiries = Enquiry::latest()->paginate(10);
        return view('enquiries.index', compact('enquiries'))->with('i', (request()->input('page', 1) - 1) * 5);

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

        return view('enquiries.create',
        [
            'blogs' => $blogs
        ]);
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
            'full_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',
            'destinations' => 'required',
            'adults' => 'required',
            'kids' => 'required',
            'nationality' => 'required',
            'travel_date' => 'required',
            'budget' => 'required',
            'medium' => 'required',
            'luxury' => 'required'
        ]);

        $enquiry = new Enquiry;

        $enquiry->full_name = $request->full_name;
        $enquiry->email_address = $request->email_address;
        $enquiry->phone_number = $request->phone_number;
        $enquiry->destinations = $request->destinations;
        $enquiry->adults = $request->adults;
        $enquiry->kids = $request->kids;
        $enquiry->nationality = $request->nationality;
        $enquiry->travel_date = $request->travel_date;
        $enquiry->budget = $request->budget;
        $enquiry->medium = $request->medium;
        $enquiry->luxury = $request->luxury;
        $enquiry->additional_info = $request->additional_info;

        
        $enquiry->save();

        // $successMessage = [
        //     'title' => 'Success!',
        //     'body' => 'We have recieved your enquiry and one of our representatives will get back to you with further details.'
        // ];
    
        // \Mail::to('crud3swift@gmail.com')->send( new \App\Mail\EnquiryMail($successMessage));
        
        return redirect()->route('enquiries.create')->with('success', 'We have recieved your Message, Thank You');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
        $enquiry = Enquiry::find($enquiry->id);

        $enquiry->delete();

        return redirect()->route('enquiries.index')->with('success', 'Enquiry Deleted Successfully');
    }
}
