<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request){
        
        if(Auth::check()){
          $validator =Validator::make($request->all(),[
            'comment_body'=>'required|String'
        
          ]);
          if($validator->fails()){
            return redirect()->back()->with('message','comment Area is mandetroy');
          }
           $post =Post::where('slug',$request->post_slug)->where('status','0')->first();
           if($post){
             Comment::create([
                'post_id'=>$post->id,
                'user_id'=>Auth::user()->id,
                'comment_body'=>$request->comment_body

             ]);
             return redirect()->back()->with('message','commented Sucessfuly');

           }else{
              return redirect()->back()->with('message','No Such Post Found');
           }
            
        }else{
           return  redirect('login')->with('message','Login first to comment');

        }

    }

    public function destroy(Request $request,$comment_id){
     
      if(Auth::check()){
       $comment =Comment::where('id',$request->comment_id)->where('user_id',Auth::user()->id)->first();
       
       if($comment){
       $comment->delete();

       return redirect()->back()->with('status','commente deleted Sucessfuly');


       }else{
        return redirect()->back()->with(['status'=>'Something went Wrong']);
       }

      }else{
        return redirect()->back()->with(['status'=>'Login to delete this comment ']);
      }
    }
}
