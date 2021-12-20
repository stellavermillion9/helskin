<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;

class HomeController extends Controller
{
    public function show_data()
    {
        $banner = \App\Models\Banner::all();
        return view('index', ['banner' => $banner]);
    }
}
