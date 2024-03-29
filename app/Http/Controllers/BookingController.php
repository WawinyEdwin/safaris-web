<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Models\Booking;
use App\Models\Tours;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function profile()
    {
        $bookings = Booking::where('user_id', Auth::user()->id )->latest()->paginate(10);
        return view('users.profile', compact('bookings'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($destination)
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
                'blogs' => $blogs,
                'destination' => $destination
            ])->with('success', 'you must be logged in to book a destination.');

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
            'destination' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'transaction_code' => 'required'
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
        $booking->destination = $request->destination;
        $booking->transaction_code = $request->transaction_code;
        $booking->special_requirements = $request->special_requirements;
        $booking->user_id = Auth::user()->id;
        $booking->save();
        return redirect()->route('profile')->with('success', 'Booking has been successfull, We will contact you within 24hrs!');
        
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

        $booking->update($request->all());
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


     //Published toggle
     public function confirm($id)
     {
         $booking = Booking::find($id);
         if ($booking->status == 0) {
             $booking->status = 1;
             $booking->update();
         } else {
             $booking->status = 0;
             $booking->update();
         }
 
         return redirect()->route('bookings')->with('success', 'Booking deleted successfully!');
     }
}
