<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\BannerHalf;
use App\Models\Iklan;
use App\Models\Product;
use App\Models\Testimoni;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::get();
        $product = Product::get();
        $testi = Testimoni::get();
        $iklan = Iklan::get();

        return view('index', compact('banner', 'product', 'testi', 'iklan'));
    }
}
