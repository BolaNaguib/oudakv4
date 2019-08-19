<?php

namespace App\Http\Controllers;
use App\Coupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
// use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;


class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
      // return 'adding coupon';
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        // dd($coupon);
        if (!$coupon) {
          return redirect()->route('cart.index')->withErrors('Invalid coupon code. try another one ');
          // code...
        }
        session()->put('coupon',[
          'name' => $coupon->code,
          'discount' => $coupon->discount(Cart::subtotal()),
        ]);

        return redirect()->route('cart.index')->with('success_message','Coupon has been applied');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        session()->forget('coupon');
        return redirect()->route('cart.index')->with('success_message', 'Coupon has been removed');
    }
}
