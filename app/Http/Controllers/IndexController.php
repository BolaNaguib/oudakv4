<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::orderBy('id', 'desc')->take(3)->get();

        return view('index')->with('products', $products);
    }

}
