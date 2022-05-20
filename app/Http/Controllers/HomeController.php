<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function home(){
        $sliderdata = Blog::limit(4) -> get();
        return view('home.main', [
            'where' => 'main',
            'sliderdata' => $sliderdata
        ]);
    }

    public function contact(){
        return view('home.contact', ['where' => 'contact']);
    }

    public function blog(){
        return view('home.blog', ['where' => 'blog']);
    }
}
