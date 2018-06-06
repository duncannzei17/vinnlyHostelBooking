<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index') ;
    }

    public function about_us(){
        return view('pages.about_us');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function room_details(){
        return view('pages.room_details') ;
    }

    public function privacy(){
        return view('pages.privacy') ;
    }

    public function terms(){
        return view('pages.terms') ;
    }
}
