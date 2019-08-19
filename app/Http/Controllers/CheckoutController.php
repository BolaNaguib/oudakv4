<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorExceprion;
use App\Order;
use App\OrderProduct;
use App\Http\Controllers\CartController;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('checkout')->with([
          'discount' => $this->getNumbers()->get('discount'),
          'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
          'newTax' => $this->getNumbers()->get('newTax'),
          'newTotal' => $this->getNumbers()->get('newTotal'),
        ]);;
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
      // dd just for testing purpose
      // dd($request->all());
        //
        try {
          $charge = Stripe::charges()->create([
            'amount' => $this->getNumbers()->get('newTotal'),
            'currency' => 'USD',
            'source' => $request->stripeToken,
            // 'decription' => 'Order',
            'receipt_email' =>$request->email,
            'metadata' => [
                // change to order ID after we start using DB
                // 'contents' => $contents,
                // 'quantity' => Cart::instance('default')->count(),
                'discount' => collect(session()->get('coupon'))->toJson(),
            ],
          ]);
          // insert into orders table
          $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name_on_card' => $request->name_on_card,
            'billing_name' => $request->fullname,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_province' => $request->state,
            'billing_postalcode' => $request->zipcode,
            // 'billing_phone',
            // 'billing_discount',
            // 'billing_discount_code',
            // 'billing_subtotal',
            // 'billing_tax',
            // 'billing_total',
            // 'error',

            // 'billing_total' => $this->getNumbers()->get('newTotal'),
            'error' => null,
          ]);

          foreach (Cart::content() as $item) {

            OrderProduct::create([
              'order_id' => $order->id,
              'product_id' => $item->model->id,
              'quantity' => $item->qty,
            ]);
          }

          // insert into order_product table
          //successful
          Cart::instance('default')->destroy();
          session()->forget('coupon');
          return back()->with('success_message', 'thank you order accepted ');
        } catch (\Exception $e) {
            return back()->withErrors('Error!'. $e->getMessage());
        }

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
