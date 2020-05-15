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

    public function product()
    {
        return view('pages.product', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function category()
    {
        return view('pages.category', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function cart()
    {
        return view('pages.cart', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function checkout()
    {
        return view('pages.checkout', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    /* Страницы с заглушкой */

    public function women()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }
    
    public function men()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function jewelry()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function sneakers()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function sandals()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function shoes()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function boots()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function flops()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function blog()
    {
        return view('errors.redirect', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
            'products' => Product::orderBy('created_at', 'desc')->paginate(8),
            'categories' => Category::orderBy('created_at', 'asc')->get(),
        ]);
    }
}
