<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Product;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(16)
        ]);
    }
}
