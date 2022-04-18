<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends = ['getParentsTree'];

    public static function getParentsTree($category, $title){
        if($category -> parentId == 0){
            return $title;
        }

        $parent = Category::find($category -> parentId);
        $title = $parent -> title . ' > ' . $title;

        return CategoryController::getParentsTree($parent, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.category.main', [
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
        //
        $data = Category::all();
        return view('admin.category.create', [
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
        $data = new Category();

        $data -> parentId = $request -> parentId;
        $data -> title = $request -> title;
        $data -> keywords = $request -> keywords;
        $data -> description = $request -> description;
        $data -> status = $request -> status;

        $data -> save();

        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
        $data = Category::find($id);

        return view('admin.category.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $data = Category::find($id);
        $datalist = Category::all();

        return view('admin.category.edit', [
           'data' => $data,
            'datalist' => $datalist
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        $data = Category::find($id);

        $data -> parentId = $request -> parentId;
        $data -> title = $request -> title;
        $data -> keywords = $request -> keywords;
        $data -> description = $request -> description;
        $data -> status = $request -> status;

        $data -> save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $data = Category::find($id);
        //Storage::delete($data -> image);
        $data -> delete();
        return redirect('/admin/category');
    }
}
