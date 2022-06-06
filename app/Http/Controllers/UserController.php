<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();

        return view('home.user.index', [
            'settings' => $settings
        ]);
    }

    public function comments(){
        $settings = Setting::first();
        $comments = Comment::where('user_id', '=', Auth::id()) -> get();

        return view('home.user.comments', [
            'settings' => $settings,
            'comments' => $comments
        ]);
    }

    public function blogs(){
        $settings = Setting::first();
        $blogs = Blog::where('user_id', '=', Auth::id()) -> get();

        return view('home.user.blogs', [
            'settings' => $settings,
            'blogs' => $blogs
        ]);
    }

    public function createblog(){
        $settings = Setting::first();
        $categories = Category::all();

        return view('home.user.createblog', [
            'settings' => $settings,
            'categories' => $categories
        ]);
    }

    public function storeblog(Request $request){
        $data = new Blog();

        $data -> category_id = $request -> input('category_id');
        $data -> user_id = $request -> input('user_id');
        $data -> title = $request -> input('title');
        $data -> keywords = $request -> input('keywords');
        $data -> description = $request -> input('description');

        if($request -> file('image')){
            $data -> image = $request -> file('image') -> store('images');
        }

        $data -> detail = $request -> input('detail');
        $data -> file = $request -> input('file');
        $data -> likes = 0;
        $data -> seen = 0;
        $data -> read_time = strlen($request -> input('detail'));
        $data -> status = $request -> input('status');

        $data -> save();

        return redirect() -> route('userpanel.blogs');
    }

    public function editblog($id){
        $blog = Blog::find($id);

        if(Auth::id() == $blog -> user_id){

            $categories = Category::all();
            $settings = Setting::first();

            return view('home.user.editblog', [
                'blog' => $blog,
                'categories' => $categories,
                'settings' => $settings
            ]);
        }
    }

    public function updateblog(Request $request, $id){
        $data = Blog::find($id);

        $data -> category_id = $request -> input('category_id');
        $data -> user_id = $request -> input('user_id');
        $data -> title = $request -> input('title');
        $data -> keywords = $request -> input('keywords');
        $data -> description = $request -> input('description');

        if($request -> file('image')){
            $data -> image = $request -> file('image') -> store('images');
        }

        $data -> detail = $request -> input('detail');
        $data -> file = $request -> input('file');
        $data -> likes = 0;
        $data -> seen = 0;
        $data -> read_time = strlen($request -> input('detail'));
        $data -> status = $request -> input('status');

        $data -> save();

        return redirect() -> route('userpanel.blogs');
    }

    public function deleteblog($id){
        $data = Blog::find($id);

        if($data -> image && Storage::disk('public') -> exists($data -> image)){
            Storage::delete($data -> image);
        }

        $data -> delete();

        return redirect() -> route('userpanel.blogs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment -> delete();

        return redirect() -> route('userpanel.comments');
    }
}
