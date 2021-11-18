<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function about(){
        return view('home/about');
    }

    public function tataCara(){
        return view('home/tataCara');
    }

    public function faq(){
        return view('home/faq');
    }
}