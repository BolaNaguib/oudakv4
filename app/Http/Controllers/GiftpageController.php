<?php

namespace App\Http\Controllers;

use App\giftpage;
use App\Product;
use Illuminate\Http\Request;

class GiftpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $giftProducts = Product::where('gift','1')->get();
        $giftMedia = giftpage::get();
        return view('pages.gift')
        ->with('giftProducts', $giftProducts)
        ->with('giftMedia', $giftMedia);
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
     * @param  \App\giftpage  $giftpage
     * @return \Illuminate\Http\Response
     */
    public function show(giftpage $giftpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\giftpage  $giftpage
     * @return \Illuminate\Http\Response
     */
    public function edit(giftpage $giftpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\giftpage  $giftpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, giftpage $giftpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\giftpage  $giftpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(giftpage $giftpage)
    {
        //
    }
}
