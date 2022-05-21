<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function home(){
        $sliderdata = Blog::limit(4) -> get();
        $blogData = Blog::limit(6) -> get();
        $categories = Category::limit(3) -> get();

        return view('home.main', [
            'where' => 'main',
            'sliderdata' => $sliderdata,
            'blogData' => $blogData,
            'categories' => $categories
        ]);
    }

    public function contact(){
        return view('home.contact', ['where' => 'contact']);
    }

    public function blog(){
        return view('home.blog', ['where' => 'blog']);
    }
}
