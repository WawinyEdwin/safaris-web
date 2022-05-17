<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Booking;
use App\Models\Tours;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        //
        $bookings = Booking::latest()->paginate(10);
        return view('bookings.index', compact('bookings'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $tours =  Tours::where('category', $category)->get();
        $tours = Tours::latest()->limit(3)->get();


        // dd($tours);
    
        $categories = Category::all();

        $blogs = Blog::all();

        return view('bookings.create',
            [
                'categories' => $categories,
                'tours' => $tours,
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'arrival_date' => 'required',
            'adults' => 'required',
            'kids' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if($request->email1 == $request->email2 ) 
        {
            $email = $request->email1;
        } else {
           
            return redirect()->route('bookings.create')->with('failure', 'please provide matching emails');
        }

     
        $booking = new Booking;
        $booking->first_name = $request->first_name;
        $booking->last_name = $request->last_name;
        $booking->email = $email;
        $booking->arrival_date = $request->arrival_date;
        $booking->adults = $request->adults;
        $booking->kids = $request->kids;
        $booking->phone_number = $request->phone_number;
        $booking->country = $request->country;
        $booking->special_requirements = $request->special_requirements;

        $booking->save();

        
        // $successMessage = [
        //     'title' => 'Booking Success!',
        //     'body' => 'We have recieved your booking confirmation and one of our customer representatives will get back to you with further details.'
        // ];
    
        // \Mail::to('crud3swift@gmail.com')->send( new \App\Mail\BookingMail($successMessage));

        return redirect()->route('bookings.create')->with('success', 'Booking has been successfull!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
        return view('tours.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
        return view('tours.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
         //
         $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'arrival_date' => 'required',
            'adults' => 'required',
            'kids' => 'required',

        ]);

        Booking::update($request->all());

        return redirect()->route('tours.bookings')->with('success', 'Booking updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking, $id)
    {
        //
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('bookings')->with('success', 'Booking deleted successfully!');
    }
}
