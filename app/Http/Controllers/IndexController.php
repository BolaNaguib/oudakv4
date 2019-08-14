<?php

namespace App\Http\Controllers;
use App\HomeFourBlock;
use App\HomeThreeImages;
use App\MainSlider;
use App\Product;
use Illuminate\Http\Request;
use Pvtl\VoyagerBlog\BlogPost;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_slider = MainSlider::get() ;

        $products = Product::orderBy('id', 'desc')->take(3)->get();
        $HomeFourBlock = HomeFourBlock::orderBy('id', 'desc')->first();
        $post = BlogPost::orderBy('id', 'desc')->first();
        $longImages = HomeThreeImages::orderBy('id', 'desc')->take(3)->get();

        return view('index')
            ->with('products', $products)
            ->with('main_slider',$main_slider)
            ->with('post',$post)
            ->with('longImages',$longImages)
            ->with('HomeFourBlock',$HomeFourBlock);
    }

}
