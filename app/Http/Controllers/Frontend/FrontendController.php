<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class FrontendController extends Controller
{
    public function index(){
      $setting =Setting::find(1);
       $all_category= Category::where('status','0')->get();
       $latest_posts =Post::where('status','0')->orderBy('created_at','DESC')->get()->take(15);
        return view ('frontend.index',compact('all_category','latest_posts','setting'));

    }

    public function viewcategoryPost($category_slug){
        $category =Category::where('slug',$category_slug)->where('status','0')->first();
     
        if($category){
          $post=Post::where('category_id',$category->id)->where('status','0')->paginate(2);
          return view('frontend.post.index',compact('post','category'));

        }else{
         return redirect('/');
        }
    }
    public function viewpost($category_slug, $post_slug){
        $category =Category::where('slug',$category_slug)->where('status','0')->first();
        if($category){
          $post=Post::where('category_id',$category->id)->where('status','0')->first();
          $latest_post=Post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->take(10)->get();

       
          return view('frontend.post.view',compact('post','latest_post'));

        }else{
         return redirect('/');
        }
    }
}
