<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index page
    public function index() {
        return view('home');
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
}
