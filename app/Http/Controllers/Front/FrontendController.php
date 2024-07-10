<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('front.home.home');
    }

    public function aboutUs()
    {
        return view('front.about.about-us');
    }

    public function blogHome()
    {
        return view('front.blog.blog-home');
    }

    public function contactUs()
    {
        return view('front.contact.contact');
    }
}
