<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class SaveForLaterController extends Controller
{

  public function destroy($id)
  {
    Cart::instance('saveForLater')->remove($id);
    return back()->with('success_message','item have been removed');
  }

// switch item from saved for later to cart
  public function switchToCart($id)
  {
    $item = Cart::instance('saveForLater')->get($id);

    Cart::instance('saveForLater')->remove($id);

    $duplicates = Cart::instance('default')->instance('saveForLater')->search(function($cartItem, $rowId) use ($id){
      return $rowId === $id;
    });
    if ($duplicates->isNotEmpty()) {
      return redirect()->route('cart.index')->with('success_message','item is already in Your Cart !');
      // code...
    }

    Cart::instance('default')->add($item->id, $item->name, 1,$item->price)
        ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message','item have been moved to cart');
  }

}
