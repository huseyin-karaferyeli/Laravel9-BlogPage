<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        $blog = Blog::find($pid);
        $images = DB::table('images') -> where('blog_id', $pid) -> get();

        return view('home.user.images', [
            'blog' => $blog,
            'images' => $images,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pid)
    {
        $data = new Image();

        $data -> blog_id = $pid;
        $data -> title = $request -> title;
        if($request -> file('image')){
            $data -> image = $request -> file('image') -> store('images');
        }

        $data -> save();

        return redirect() -> route('userpanel.image.index', ['pid' => $pid]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid, $id)
    {
        $data = Image::find($id);
        if($data -> image && Storage::disk('public') -> exists($data -> image)){
            Storage::delete($data -> image);
        }
        $data -> delete();

        return redirect() -> route('userpanel.image.index', ['pid' => $pid]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($pid, $id)
    {
        $blog = Blog::find($pid);
        $images = DB::table('images') -> where('blog_id', $id) -> get();

        return view('home.user.gallery', [
            'blog' => $blog,
            'images' => $images,
        ]);
    }
}
