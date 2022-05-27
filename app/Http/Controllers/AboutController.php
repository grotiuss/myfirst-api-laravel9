<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $data = [
            'title' => "About",
            'main_text' => "Halaman About"
        ];
        return view('about', $data);
    }
}
