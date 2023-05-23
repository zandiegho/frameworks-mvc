<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function category(Category $category){
        return $this->sucessResponse($category->posts);
    }

    public function url_clean(String $url_clean){
        $post = Post::where('url_clean',$url_clean)->get();
        $post->image;
        $post->category;
        return $this->sucessResponse($post);
    }
}
