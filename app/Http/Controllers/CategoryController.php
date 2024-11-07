<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index($category)
    {
        $category = Category::with('article')->where('name', $category)->first();

        if(!$category)
        {
            abort(404);
        }
        return view('category', compact('category'));
    }
}
