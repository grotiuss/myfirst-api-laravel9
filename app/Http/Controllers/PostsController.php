<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

class PostsController extends Controller
{
    public function index() {
        $data = [
            'title' => "Post",
            'main_text' => "These datas are taken from Posts model",
            'posts' => Posts::select()
        ];
    
        return $data;
    }

    public function select($slug) {
        $data = [
            'title' => "Post",
            'main_text' => "These datas are taken from Posts model",
            'posts' => Posts::select($slug)
        ];
    
        return $data;
    }
}
