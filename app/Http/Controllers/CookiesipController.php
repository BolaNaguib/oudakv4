<?php

namespace App\Http\Controllers;

use App\cookiesip;
use Illuminate\Http\Request;

class CookiesipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('acceptcookies');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
      $cookies =  cookiesip::create([
        'ip'                   => $request->getClientIp(),
        'cookiesaccepted'      => 'yes'
                  ]);
                  // dd($cookies);
              return back()->with('success_message','Thanks For Accepting Cookies');
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
     * @param  \App\cookiesip  $cookiesip
     * @return \Illuminate\Http\Response
     */
    public function show(cookiesip $cookiesip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cookiesip  $cookiesip
     * @return \Illuminate\Http\Response
     */
    public function edit(cookiesip $cookiesip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cookiesip  $cookiesip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cookiesip $cookiesip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cookiesip  $cookiesip
     * @return \Illuminate\Http\Response
     */
    public function destroy(cookiesip $cookiesip)
    {
        //
    }
}
