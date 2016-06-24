<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->paginate();

        return view('home.index', compact('categories'));
    }
}
