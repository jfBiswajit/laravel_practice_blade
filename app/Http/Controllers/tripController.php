<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tripController extends Controller
{
    public function home() {
      return view('home', ['title' => 'Home']);
    }
    
    public function about() {
      return view('about', ['title' => 'About']);
    }
    public function trips() {
      return view('trips', ['title' => 'Trips']);
    }
    public function blog() {
      return view('blog', ['title' => 'Blog']);
    }
    public function contact() {
      return view('contact', ['title' => 'Contact']);
    }

}
