<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.main');
    }

    public function contact(){
        return view('home.contact');
    }
}
