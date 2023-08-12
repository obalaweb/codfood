<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function about() {
        return view('frontend.about');
    }

    public function gallery () {
        return view('frontend.gallery');
    }

    public function faq() {
        return view('frontend.faq');
    }


    public function menu()
    {
        $menus = Menu::all();
        $categories = Category::all();
        return view('frontend.menu', compact('categories', 'menus'));
    }

}
