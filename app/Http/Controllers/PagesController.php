<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view ('pages.about');
    }

    public function index(){
        return view ('index');
    }
    public function property(){
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('pages.property')->with('posts', $posts);
    }
    public function aboutus(){
        return view ('pages.aboutus');
    }
    public function Ourpartner(){
        return view ('pages.OurPartner');
    }
    public function alltype(){
        return view ('pages.all-type');
    }
    public function ForSale(){
        return view ('pages.For-Sale');
    }
    public function News(){
        return view ('pages.News');
    }
    public function news1(){
        return view ('pages.news1');
    }
    public function news2(){
        return view ('pages.news2');
    }
    public function news3(){
        return view ('pages.news3');
    }
    public function news4(){
        return view ('pages.news4');
    }
    public function news5(){
        return view ('pages.news5');
    }
    public function news6(){
        return view ('pages.news6');
    }
    public function contact(){
        return view ('pages.contact');
    }
    public function Agent(){
        return view ('pages.Agent');
    }
    public function Admin(){
        return view ('pages.Admin');
    }
    public function ForRent(){
        return view ('pages.For-Rent');
    }
    public function NewsContent(){
        return view ('pages.NewsContent');
    }

    public function dashboard(){
        return view ('dashboard.dashboard');
    }
}
