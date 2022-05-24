<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(){
        return view('admin.main');
    }

    public function setting(){
        $data = Setting::first();

        if($data == null){
            $data = new Setting();
            $data -> title = 'Project Title';

            $data -> save();
            $data = Setting::first();
        }

        return view('admin.setting', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function settingUpdate(Request $request){

        $settings = Setting::first();

        $settings -> title = $request -> title;
        $settings -> keywords = $request -> keywords;
        $settings -> description = $request -> description;
        $settings -> company = $request -> company;
        $settings -> address = $request -> address;
        $settings -> phone = $request -> phone;
        $settings -> fax = $request -> fax;
        $settings -> email = $request -> email;
        $settings -> smtp_server = $request -> smtp_server;
        $settings -> smtp_email = $request -> smtp_email;
        $settings -> smtp_password = $request -> smtp_password;
        $settings -> smtp_port = $request -> smtp_port;
        $settings -> facebook = $request -> facebook;
        $settings -> instagram = $request -> instagram;
        $settings -> twitter = $request -> twitter;
        $settings -> youtube = $request -> youtube;
        $settings -> about_us = $request -> about_us;
        $settings -> contact = $request -> contact;
        $settings -> references = $request -> references;
        if($request -> file('icon')){
            $settings -> icon = $request -> file('icon') -> store('images');
        }

        $settings -> save();

        return redirect() -> route('admin.setting');
    }
}
