<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(){
        return view('/');
    }

    function about(){
        return view('about');
    }  

    function blog(){
        return view('blog');
    }
    
    function rooms(){
        return view('rooms');
    }

    function services(){
        return view('services');
    }

    function gallery(){
        return view('gallery');
    }
    function error(){
        return view('404');
    }
    function contact(){
        return view('contact');
    }

    function gallerysingle(){
        return view('gallerysingle');
    }
    function blogpost(){
        return view('blogpost');
    }
}
