<?php

namespace App\Http\Controllers;
// use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        //
        return view('cart')->with([
          'discount' => $this->getNumbers()->get('discount'),
          'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
          'newTax' => $this->getNumbers()->get('newTax'),
          'newTotal' => $this->getNumbers()->get('newTotal'),
        ]);
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
        $duplicates = Cart::search(function($cartItem, $rowId) use ($request){
          return $cartItem->id === $request->id;
        });
        if ($duplicates->isNotEmpty()) {
          return redirect()->route('cart.index')->with('success_message','item is already in your bag!');
          // code...
        }
        Cart::add($request->id, $request->name, 1,$request->price)
            ->associate('App\Product');

              return redirect()->route('cart.index')->with('success_message','item was added to your bag');

      }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // return $request->all();
        Cart::update($id, $request->quantity);
        session()->flash('success_message','Quantity was updated successfully');
        return response()->json(['success' => true]);
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
        Cart::remove($id);
        return back()->with('success_message','item have been removed');
    }


/**
 * Switch item for shopping cart to Save for Later.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function switchToSaveForLater($id)
{
  $item = Cart::get($id);

  Cart::remove($id);

  $duplicates = Cart::instance('saveForLater')->search(function($cartItem, $rowId) use ($id){
    return $rowId === $id;
  });
  if ($duplicates->isNotEmpty()) {
    return redirect()->route('cart.index')->with('success_message','item is already Saved For Later!');
    // code...
  }

  Cart::instance('saveForLater')->add($item->id, $item->name, 1,$item->price)
      ->associate('App\Product');

      return redirect()->route('cart.index')->with('success_message','item saved for later');
}




private function getNumbers()
{
  $tax = config('cart.tax') / 100;
  $discount = session()->get('coupon')['discount'] ?? 0 ;
  $newSubtotal = (Cart::subtotal() - $discount);
  $newTax = ($newSubtotal * $tax);
  $newTotal = $newSubtotal * ( 1 + $tax);

  return collect( [
    'tax' => $tax,
    'discount' => $discount,
    'newSubtotal' => $newSubtotal,
    'newTax' => $newTax,
    'newTotal' => $newTotal,
  ]);
}

}
