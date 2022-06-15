<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $data = [
            'title' => "Blog",
            'main_text' => "These datas are taken from Blog Model",
            'posts' => Category::all() //method provided by laravel automatically
        ];
        return Category::all();
        // return view('blog', $data);
    }

    // pubilc function find()

    public function detail(Category $category) {
        $data = [
            'title' => "Blog",
            'main_text' => "These datas are taken from a Blog Model",
            'posts' => $category->blogs
        ];
        return $category->blogs;
        // return view('blog_detail', $data);
    }
}
