<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected $table ='posts';
    protected $fillable =['category_id','name','slug','description','yt_lframe','meta_title','meta_description','meta_keyword','status','created_by'];
       

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function comments(){
        return $this->hasMany(Comment::class ,'post_id','id');
    }
}



    