<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

    public function index(){
        $title = "Welcome to Ike's Coding Hub";
        // return view('pages.index', compact('title', $title));
        return view('pages.index')->with('title', $title);
        // return view('pages.index');
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        return view('pages.services');
    }
}
