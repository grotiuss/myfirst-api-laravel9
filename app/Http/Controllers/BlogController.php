<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $data = [
            'title' => "Blog",
            'main_text' => "These datas are taken from Blog Model",
            'posts' => Blog::select()
        ];
    
        return view('blog', $data);
    }

    public function select($slug) {
        $data = [
            'title' => "Blog",
            'main_text' => "These datas are taken from a Blog Model",
            'posts' => Blog::select($slug)
        ];
        
        return view('blog_detail', $data);
    }
}
