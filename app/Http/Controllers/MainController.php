<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'menus' => Menu::with('children')->where('parent_id', '0')->get(),
        ]);
    }
}
