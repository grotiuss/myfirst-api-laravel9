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
            'posts' => Blog::all() //method provided by laravel automatically
        ];
    
        return view('blog', $data);
    }

    // pubilc function find()

    public function find(Blog $blog) {
        $data = [
            'title' => "Blog",
            'main_text' => "These datas are taken from a Blog Model",
            'posts' => $blog
        ];
        
        return view('blog_detail', $data);
    }

    public function create(Blog $blog) {
        Blog::create([
            'title' => 'First Note',
            'slug' => 'first-note',
            'excerpt' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit<p>",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, nam assumenda! Animi qui molestias doloremque laudantium velit accusamus voluptatem esse minima laborum eaque cumque perspiciatis rem, suscipit quae earum numquam!<p>"
        ]);
    }
}
