<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthEducation extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function categoryItem(){
        return view('front-end.category.category-content');
    }
    public function categoryItem1(){
        return view('front-end.category.category-content1');
    }
}
