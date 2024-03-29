<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\Video;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Enquiry;
use App\Models\Event;
use App\Models\Highlight;
use App\Models\Product;
use App\Models\Service;
use Carbon\Carbon;

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
        $coverBlogs = Blog::latest()->limit(4)->get();
        $videos = Video::inRandomOrder()->limit(3)->get();
        //fetches tours
        $tours = Tours::inRandomOrder()->get();
        //to appear in carousel
        $highlights = Highlight::all();
        //products
        $products = Product::orderBy('id','desc')->get();
        // services
        $services = Service::orderBy('id','desc')->get();
        // accomodations
        $accomodations = Accomodation::orderBy('id','desc')->get();
        //events
        $date = Carbon::today();
        $events = Event::orderBy('id','desc')->whereDate("when", "=>", $date );
       
    

    
        return view('home', compact("products",
         "services", 
         "categories", 
         "accomodations",
         "tours", 
         "blogs", 
         "coverBlogs", 
        "videos", "events", "highlights"));
    }

    //dynamic category switch.
    public function tours($category) 
    {
        $tours =  Tours::where('category', $category)->get();
        $categories = Category::all();
        $blogs =  Blog::latest()->limit(2)->get();
        $info = Tours::where('category', $category)->latest()->first();
        return view('tour.category',[
            'categories' => $categories,
            'category' => $category,
            'tours' => $tours,
            'blogs' => $blogs,
            'info' => $info
        ]);
     }
     //dynamic subcategory switch.
    public function tour_cat($sub_category) {
        $info = Tours::where('sub_category', $sub_category)->latest()->first();
        $tours =  Tours::where('sub_category', $sub_category)->get();
        $categories = Category::all();
        $blogs =  Blog::latest()->limit(2)->get();
        return view('tour.sub_category',[
            'categories' => $categories,
            'tours' => $tours,
            'blogs' => $blogs,
            'sub_category' => $sub_category,
            'info' => $info
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
        $safaris = Tours::all()->count();
        $accomodations = Accomodation::all()->count();
        $videos = Video::all()->count();
        $blogs = Blog::all()->count();
        $categories = Category::all()->count();
        $products = Product::all()->count();
        $events = Event::all()->count();
        $services = Service::all()->count();
        $bookings = Booking::all()->count();
        $highlights = Highlight::all()->count();
        $enquiries = Enquiry::all()->count();


        return view('admin.dashboard', compact("safaris", "enquiries", "bookings", "categories", "accomodations", "videos", "blogs", "events", "products", "services", "highlights"));
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
