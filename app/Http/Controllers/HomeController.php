<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Banner;

class HomeController extends Controller
{
    public function index(){
        $topBanner = Banner::getBanner()->first();
        $gallerys = Banner::getBanner('gallery')->get();
        $shapes = Banner::getBanner('banner_shape')->get();


        // dd($topBanner);
        return view('frontend.home.index',compact('topBanner','shapes','gallerys'));
    }

    public function about(){
        return view('frontend.home.about');
        
    }


}
