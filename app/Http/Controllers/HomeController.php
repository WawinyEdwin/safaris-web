<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\Video;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Highlight;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    //search 
    public function search(Request $request) 
    {
        //develop a query from the Model
        $tours = Tours::where([
            ['hotel', '!=', Null],
            [function ($query) use ($request) {
                if(($term = $request->item)) {
                    $query->orWhere('hotel', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])->orderBy("id", "desc")->paginate(10);

        //find categories
        $categories = Category::all();

        //find blogs
        $blogs =  Blog::latest()->limit(2)->get();

        $tours = Tours::inRandomOrder()->limit(3)->get();

        return view('tour.search',
            [
                'categories' => $categories,
                'tours' => $tours,
                'blogs' => $blogs,
            ], compact('tours'))->with('i', (request()->input('page', 1) -1) * 5);

    }
    //index page
    public function index() {

        //find categories
        $categories = Category::all();

        //find blogs 
        $blogs = Blog::latest()->limit(2)->get();

        $coverBlogs = Blog::latest()->limit(3)->get();

        $videos = Video::inRandomOrder()->limit(4)->get();

        //fetches tours
        $tours = Tours::inRandomOrder()->limit(3)->get();

        $holidayOffers = Tours::where('category', 'Exciting Holiday Offers')->limit(3)->get();
      
        $localTours = Tours::where('category', 'Local Tours')->limit(4)->get();

        $tembeaTours = Tours::where('category', 'Tembea Ujionee')->limit(3)->get();


        //to appear in carousel
        $highlights = Highlight::all();
    
        return view('home', [
            'categories' => $categories,
            'tours' => $tours,
            'blogs' => $blogs,
            'coverBlogs' => $coverBlogs,
            'videos' => $videos,
            'holidayOffers' => $holidayOffers,
            'localTours' => $localTours,
            'tembeaTours' => $tembeaTours,
            'highlights' => $highlights
        ]);
    }

    //dynamic category switch.
    public function tours($category) {

        $tours =  Tours::where('category', $category)->get();

        $categories = Category::all();

        $blogs =  Blog::latest()->limit(2)->get();

        // dd($categories);

        return view('tour.category',[
            'categories' => $categories,
            'category' => $category,
            'tours' => $tours,
            'blogs' => $blogs
        ]);
     }

     //dynamic subcategory switch.
    public function tour_cat($sub_category) {

        $tours =  Tours::where('sub_category', $sub_category)->get();
      
        $categories = Category::all();

        $blogs =  Blog::latest()->limit(2)->get();

        // dd($categories);

        return view('tour.sub_category',[
            'categories' => $categories,
            'tours' => $tours,
            'blogs' => $blogs
        ]);
     }


    //about page
    public function about()
    {
        $blogs = Blog::latest()->limit(2)->get();

        $categories = Category::all();

        return view('safaris.about-us',
        [
            'categories' => $categories,
            'blogs' => $blogs
        ]
    );
    }

    //careers page
    public function  careers()
    {
        $blogs = Blog::latest()->limit(2)->get();

        $categories = Category::all();

        return view('safaris.careers', 
    [
        'categories' => $categories,
        'blogs' => $blogs
    ]);
    }

    //faqs page
    public function faqs()
    {
        $blogs = Blog::latest()->limit(3)->get();

        $categories = Category::all();

        return view('safaris.faqs',
        [
            'categories' => $categories,
            'blogs' => $blogs
        ]);
    }
    
    //privacy policy page
    public function policy()
    {
        $blogs = Blog::latest()->limit(3)->get();

        $categories = Category::all();

        return view('safaris.policy',
        [
            'categories' => $categories,
            'blogs' => $blogs
        ]);
    }

    //admin homepage
    public function admin()
    {
        return view('admin.home');
    }

    //contact us page
    public function contact() {
        return view('safaris.contact-us');
    }

    //all blogs 
    public function blog() {
        return view('safaris.blog');
    }
}
