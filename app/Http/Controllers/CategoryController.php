<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }


    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
        ]);

        $category = Category::create($input);
        return $category;
    }
}
