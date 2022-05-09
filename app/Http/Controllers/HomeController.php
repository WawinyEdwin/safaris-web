<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\Category;

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
