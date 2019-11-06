<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $mytime = Carbon::now();
        $todaytime = $mytime->toDateTimeString();
        $maxvalue = $coupon->maxvalue;

        if ($maxvalue != null && $coupon->discount($totalx) > $maxvalue+1) {
           $discount = $maxvalue;
        }else {
          $discount = $coupon->discount($totalx);
        }

        // dd($todaytime);
        if ($coupon->count > 1 && $coupon->min_number < $totalx+1) {
            if ($coupon->exporationdate != null && $coupon->exporationdate >= $todaytime) {
                session()->put('coupon', [
                'name' => $coupon->code,
                'discount' => $discount,
                  ]);
                $coupon->count--;
                $coupon->save();
                // dd($coupon->count);

                return redirect()->route('cart.index')->with('success_message', 'Coupon has been applied');
            }else {
              session()->put('coupon', [
              'name' => $coupon->code,
              'discount' => $discount,
                ]);
              $coupon->count--;
              $coupon->save();
              // dd($coupon->count);

              return redirect()->route('cart.index')->with('success_message', 'Coupon has been applied');
            }

            return redirect()->route('cart.index')->withErrors('Invalid coupon code. try another one');
        } elseif ($coupon->count < 1 || $coupon->min_number > $totalx || !$coupon) {
            return redirect()->route('cart.index')->withErrors('Invalid coupon code. try another one');
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
