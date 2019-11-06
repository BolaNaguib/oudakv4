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
      $totalx = Cart::subtotal();
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if (!$coupon) {
          return redirect()->route('cart.index')->withErrors('Invalid coupon code. try another one ');
          // code...
        }
    if ($coupon->count > 1 && $coupon->min_number < $totalx+1 ) {
      session()->put('coupon',[
        'name' => $coupon->code,
        'discount' => $coupon->discount(Cart::subtotal()),
      ]);
      $coupon->count--;
      $coupon->save();
      // dd($coupon->count);
      return redirect()->route('cart.index')->with('success_message','Coupon has been applied');
    } elseif ($coupon->count < 1 || $coupon->min_number > $totalx) {
      return redirect()->route('cart.index')->withErrors('Coupon is No Longer Available');
    } else {
     return redirect()->route('cart.index')->withErrors('System Error ');
    }


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
