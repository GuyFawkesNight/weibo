<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StaticPageController extends Controller
{
    public function home(){
        return view('static_page.home');
    }

    public function about(){
        return view('static_page.about');
    }

    public function help(){
        return view('static_page.help');
    }
}
