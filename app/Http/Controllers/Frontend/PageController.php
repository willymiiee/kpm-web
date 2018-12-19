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
    public function showSupplier(){
        return view('frontend.pages.supplier');
    }
    public function showInfrastructure(){
        return view('frontend.pages.infrastructure');
    }
    public function showProduct(){
        return view('frontend.pages.product');
    }
}
