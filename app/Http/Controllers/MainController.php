<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Product;
use App\Category;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function category($slug) {

    	$category = Category::where('slug', $slug)->first();

    	return view('blog.category', [
    		'category' => $category,
    		'products' => $category->products()->where('published', 1)->paginate(12)
    	]);
    }

    public function product($slug) {
    	return view('blog.product', [
    		'product' => product::where('slug', $slug)->first()
    	]);
    }
}
