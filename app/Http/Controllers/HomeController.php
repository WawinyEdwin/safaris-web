<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //index page
    public function index() {

        $categories = Category::all();

        $olderTours = Tours::latest()->limit(3)->get();
      
        $tuas = Tours::inRandomOrder()->limit(4)->get();

        $tours = Tours::inRandomOrder()->limit(3)->get();

        return view('home', ['categories' => $categories, 'tours' => $tours, 'olderTours' => $olderTours, 'tuas' => $tuas]);
    }

    public function tours($category) {

        $tours =  Tours::where('category', $category)->get();
      
        $categories = Category::all();

        return view('tour.category',['categories' => $categories], ['tours' => $tours]);
     }


     //credentials page
    public function updateView() {
        return view('auth.register');
    }

     //credentials update
    public function update(Request $request, User $user,  $id)
     {
       
        if($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Password does not match');
        }


        $user = new User;
 
         $user = User::find($id);

         $user->name = $request->name;

         $user->email = $request->email;

         $user->password = Hash::make($request->password);
         
         $user->update();

         return redirect()->route('admin')->with('success', 'Credentials updated successfully');
    }

    //about page
    public function about()
    {
        return view('safaris.about-us');
    }

    public function affiliations() 
    {
        return view ('safaris.affiliations');
    }

    public function  careers()
    {
        return view('safaris.careers');
    }

    public function faqs()
    {
        return view('safaris.faqs');
    }
    
    public function awards()
    {
        return view('safaris.awards');
    }

    public function policy()
    {
        return view('safaris.policy');
    }

    public function help()
    {
        return view('safaris.help');
    }

    public function travel()
    {
        return view('safaris.travel');
    }

    public function testimonies()
    {
        return view('safaris.testimonies');
    }

    public function team()
    {
        return view('safaris.team');
    }

    public function admin()
    {
        return view('admin.home');
    }

    public function featured() {
        return view('tour.featured-tour');
    }
    
    public function contact() {
        return view('safaris.contact-us');
    }

    public function blog() {
        return view('safaris.blog');
    }
}
