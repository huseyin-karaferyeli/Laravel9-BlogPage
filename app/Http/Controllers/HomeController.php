<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    protected $appends =['ReadTime'];

    public static function ReadTime(int $hours, int $minutes, int $seconds){
        if($minutes >= 60){
            $hours += $minutes / 60;
            return HomeController::ReadTime($hours, $minutes / 60, $seconds);
        }
        else if($seconds >= 60){
            $minutes += $seconds / 60;
            return HomeController::ReadTime($hours, $minutes, $seconds / 60);
        }
        else{
            if($hours == 0)
                return $minutes. ' Minutes '. $seconds. ' Seconds.';
            else if($minutes == 0)
                return $seconds. ' Seconds.';
            else
                return $hours. ' Hours '. $minutes. ' Minutes '. $seconds. ' Seconds.';
        }
    }

    public static function mainCategoryList(){
        return Category::where('parentId', 0) -> get();
    }

    public function home(){
        $sliderdata = Blog::limit(4) -> get();
        $blogData = Blog::limit(6) -> get();
        $categories = Category::limit(6) -> get();
        $settings = Setting::first();

        return view('home.main', [
            'sliderdata' => $sliderdata,
            'settings' => $settings,
            'blogData' => $blogData,
            'categories' => $categories
        ]);
    }

    public function detail($id){
        $data = Blog::find($id);
        $gallery = DB::table('images') -> where('blog_id', $id) -> get();

        $data -> seen = $data -> seen + 1;

        $data -> save();

        return view('home.detail', [
            'data' => $data,
            'gallery' => $gallery
        ]);
    }

    public function like($id){
        $data = Blog::find($id);

        $data -> likes = $data -> likes + 1;

        $data -> save();

        return redirect() -> route('detail', ['id' => $id]);
    }

    private function getBlogsFromCategory($id){
        $blogs = DB::table('blogs') -> where('category_id', $id) -> get();

        //Hocaya sor!!!
    }

    public function category($id){

        $category = Category::find($id);
        $blogs = DB::table('blogs') -> where('category_id', $id) -> get();

        return view('home.category', [
            'category' => $category,
            'blogs' => $blogs
        ]);
    }

    public function contact(){
        return view('home.contact');
    }
}
