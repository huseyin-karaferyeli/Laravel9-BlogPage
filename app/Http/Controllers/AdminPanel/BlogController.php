<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::all();

        return view('admin.blog.main', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.blog.create', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Blog();

        $data -> category_id = $request -> category_id;
        $data -> user_id = 0; //$request -> user_id;
        $data -> title = $request -> title;
        $data -> keywords = $request -> keywords;
        $data -> description = $request -> description;
        $data -> image = $request -> image;
        $data -> detail = $request -> detail;
        $data -> file = $request -> file;
        $data -> likes = 0;
        $data -> seen = 0;
        $data -> read_time = strlen($request -> detail);
        $data -> status = $request -> status;

        $data -> save();

        return redirect('/admin/blog');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, $id)
    {
        $data = Blog::find($id);

        return view('admin.blog.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $data = Blog::find($id);
        $datalist = Category::all();

        return view('admin.blog.edit', [
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        $data = Blog::find($id);

        $data -> category_id = $request -> category_id;
        $data -> user_id = 0; //$request -> user_id;
        $data -> title = $request -> title;
        $data -> keywords = $request -> keywords;
        $data -> description = $request -> description;
        $data -> image = $request -> image;
        $data -> detail = $request -> detail;
        $data -> file = $request -> file;
        $data -> status = $request -> status;

        $data -> save();

        return redirect('/admin/blog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        $data = Blog::find($id);
        //Storage::delete($data -> image);
        $data -> delete();
        return redirect('/admin/blog');
    }
}
