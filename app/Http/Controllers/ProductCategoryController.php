<?php

namespace App\Http\Controllers;
use App\Product;

use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
      $productcategory = ProductCategory::where('slug', $slug)->firstOrFail();
      $productsWithParents = ProductCategory::where('parent',$this->id)->get();
      $products = Product::orderBy('id', 'desc')->get();
      // $productscategoryx = ProductCategory::where('parent', )
      return view('index')
      ->with('productcategory', $productcategory)
      ->with('products', $products)
      ->with('productsWithParents', $productsWithParents);

        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $productcategory = ProductCategory::where('slug', $slug)->firstOrFail();
        $productsWithParents = ProductCategory::where('parent',$productcategory->id)->get();
        $allcat = ProductCategory::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->get();
        return view('productcategory')->with('productcategory', $productcategory)
        ->with('products', $products)->with('allcat', $allcat)
        ->with('productsWithParents', $productsWithParents);
;

    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproducts($slug)
    {
        //
        $productcategory = ProductCategory::where('slug', $slug)->firstOrFail();
        $productsWithParents = ProductCategory::where('parent',$productcategory->id)->get();
        $allcat = ProductCategory::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->get();
        return view('categoryshowproducts')->with('productcategory', $productcategory)
        ->with('products', $products)->with('allcat', $allcat)
        ->with('productsWithParents', $productsWithParents);
;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
