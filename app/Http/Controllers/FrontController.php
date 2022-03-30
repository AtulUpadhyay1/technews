<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $posts = Post::where('status', 1)->where('delete_status', 0)->get();
        $category = Category::where('status', 1)->where('delete_status', 0)->get();
        return view('frontend.index', compact('posts', 'category'));
    }

    public function post($id){
        $post = Post::find($id);
        $comments = Comment::where('post_id', $id)->where('status', 1)->get();
        return view('frontend.post', compact('post', 'comments'));

    }
}
