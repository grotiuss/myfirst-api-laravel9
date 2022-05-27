<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => "HOME",
            'main_text' => "Hello world"
        ];
        return view('home', $data);
    }
}
