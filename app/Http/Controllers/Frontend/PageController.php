<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function showHomepage(){
        return view('frontend.pages.homepage');
    }
    public function showAbout(){
        return view('frontend.pages.about');
    }
    public function showPrinciple(){
        return view('frontend.pages.principle');
    }
    public function showInfrastructure(){
        return view('frontend.pages.infrastructure');
    }
    public function showProducts(){
        return view('frontend.pages.products');
    }
}
