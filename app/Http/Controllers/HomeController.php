<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $comments = Comment::where('blog_id', $id) -> where('status', 'True') -> get();

        $data -> seen = $data -> seen + 1;

        $data -> save();

        return view('home.detail', [
            'data' => $data,
            'gallery' => $gallery,
            'comments' => $comments
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
        $setting = Setting::first();

        return view('home.contact', [
            'settings' => $setting
        ]);
    }

    public function storemessage(Request $request){

        $data = new Message();

        $data -> name = $request -> input('name');
        $data -> email = $request -> input('email');
        $data -> phone = $request -> input('phone');
        $data -> subject = $request -> input('subject');
        $data -> message = $request -> input('message');
        $data -> ip = request() -> ip();

        $data -> save();

        return redirect() -> route('contact') -> with('info', 'Your Message Has Been Sent, Thank You');
    }

    public function storecomment(Request $request){
        $comment = new Comment();

        $comment -> comment = $request -> input('comment');
        $comment -> rate = $request -> input('rate');
        $comment -> blog_id = $request -> input('blog_id');
        $comment -> user_id = Auth::id();
        $comment -> ip = request() -> ip();

        $comment -> save();

        return redirect() -> route('detail', ['id' => $request -> blog_id]) -> with('info', 'Your Comment Has Been Sent');
    }

    public function about(){
        $setting = Setting::first();

        return view('home.about', [
            'settings' => $setting
        ]);
    }

    public function references(){
        $setting = Setting::first();

        return view('home.references', [
            'settings' => $setting
        ]);
    }

    public function faq(){
        $setting = Setting::first();
        $faqs = Faq::all();

        return view('home.faq', [
            'settings' => $setting,
            'faqs' => $faqs
        ]);
    }

    public function logoutuser(Request $request){
        Auth::logout();

        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();

        return redirect() -> route('home');
    }


    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
