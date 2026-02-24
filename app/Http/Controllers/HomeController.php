<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // DB query
        $title = "Hello world!";
        return view('welcome' , compact('title'));
    }
}
