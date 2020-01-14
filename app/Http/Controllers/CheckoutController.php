<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorExceprion;
use App\Order;
use App\OrderProduct;
use App\shippingtype;
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
    $session = session()->all();
    $shippingtypes = shippingtype::all();
    // dd($shippingtypes);
    //
    return view('checkout')->with([
      'discount'      => $this->getNumbers()->get('discount'),
      'newSubtotal'   => $this->getNumbers()->get('newSubtotal'),
      'newTax'        => $this->getNumbers()->get('newTax'),
      'newTotal'      => $this->getNumbers()->get('newTotal'),
      'total'         => $this->getNumbers()->get('total'),
      'newGiftPrice'  => $this->getNumbers()->get('newGiftPrice'),
      'shippingtypes' => $shippingtypes
      // 'session' => $session['shippingprice']
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
        'receipt_email' => $request->email,
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
        'billing_phone' => $request->phone,
        'billing_discount' => $this->getNumbers()->get('discount'),
        // 'billing_discount_code',
        'billing_subtotal' => $this->getNumbers()->get('newSubtotal'),
        'billing_tax' => $this->getNumbers()->get('newTax'),
        'billing_total' => $this->getNumbers()->get('newTotal'),
        'shippingprice' => $request->shippingprice,
        'error' => null,
      ]);




      foreach (Cart::content() as $item) {
        \DB::transaction(function () use ($order, $item) {

          OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $item->model->id,
            'quantity' => $item->qty,
          ]);

          $model = $item->model;
          $model->quantity -= $item->qty;
          $model->save();
        });
      }

      // Create EASYPOST Order START
      \EasyPost\EasyPost::setApiKey(env('EASYPOST_API_KEY'));

      // $to_address = \EasyPost\Address::create(
      //     array(
      // "name"    => "Dirk Diggler",
      // "street1" => "$request->address",
      // "city"    => $request->city,
      // "state"   => $request->state,
      // "zip"     => $request->zipcode,
      // "phone"   => $request->phone
      //     )
      // );
      // // dd($to_address);
      //
      // $from_address = \EasyPost\Address::create(
      //     array(
      // "company" => "Simpler Postage Inc",
      // "street1" => "764 Warehouse Ave",
      // "city"    => "Kansas City",
      // "state"   => "KS",
      // "zip"     => "66101",
      // "phone"   => "620-123-4567"
      //     )
      // );
      //
      // // dd($from_address);
      // // $parcel = \EasyPost\Parcel::create(
      // //     array(
      // //         "predefined_package" => "LargeFlatRateBox",
      // //         "weight" => 76.9
      // //     )
      // // );
      // $shipment = \EasyPost\Shipment::create(
      //     array(
      //         "to_address"   => $to_address,
      //         "from_address" => $from_address,
      //         // "parcel"       => $parcel
      //     )
      // );
      // dd($shipment->lowest_rate());
      //
      // // $rate = \EasyPost\Rate::retrieve($shipment->lowest_rate());
      // // dd($rate);
      // // print_r($rate);
      // // dd($shipment);
      //
      // // $shipment->buy($shipment->lowest_rate());
      //
      // // $shipment->insure(array('amount' => 100));
      //
      // // echo $shipment->postage_label->label_url;
      // // var_dump($shipment->postage_label->label_url);
      // // $to_address = array(
      // //   "street1" => $request->address,
      // //   "city"    => $request->city,
      // //   "state"   => $request->state,
      // //   "zip"     => $request->zipcode,
      // //   "country" => "US",
      // //   "phone"   => $request->phone,
      // //   // "verify"  => array("delivery"),
      // // );
      // // // 777 Brockton Avenue, Abington MA 2351
      // // $from_address = array(
      // //   "street1" => '777 Brockton Avenue',
      // //   "city"    => 'Abington',
      // //   "state"   => 'MA',
      // //   "zip"     => '2351',
      // //   "country" => "US",
      // //   "phone"   => '+14533342243'
      // // );
      // //
      // // $easyPostOrder = \EasyPost\Order::create(array(
      // //     "to_address" => $to_address,
      // //     "from_address" => $from_address,
      // //     "shipments" => array(
      // //       array(
      // //           "parcel" => array(
      // //               "predefined_package" => "FedExBox",
      // //               "weight" => 10.2
      // //           )
      // //       ),
      // //       array(
      // //           "parcel" => array(
      // //               "predefined_package" => "FedExBox",
      // //               "weight" => 17.5
      // //           )
      // //       ),
      // //     )
      // // ));
      // // // dd($easyPostOrder);
      // // $order->easypost_order_id = $easyPostOrder->id;
      //
      // // Create EASYPOST Order End
      //
      //   // i guess it should be somewhere here this is the checkout controller
      // // insert into order_product table
      // //successful


      $to_address = \EasyPost\Address::create(
        array(
          "name"    => $request->name_on_card,
          "street1" => $request->address,
          "city"    => $request->city,
          "state"   => $request->state,
          "zip"     => $request->zipcode,
          "phone"   => $request->phone
        )
      );
      $from_address = \EasyPost\Address::create(
        array(
          "company" => "Simpler Postage Inc",
          "street1" => "764 Warehouse Ave",
          "city"    => "Kansas City",
          "state"   => "KS",
          "zip"     => "66101",
          "phone"   => "620-123-4567"
        )
      );
      $parcel = \EasyPost\Parcel::create(
        array(
          "predefined_package" => "Parcel",
          "weight" => 70
        )
      );
      $shipment = \EasyPost\Shipment::create(
        array(
          "to_address"   => $to_address,
          "from_address" => $from_address,
          "parcel"       => $parcel
        )
      );
      // dd($shipment);
      $shipment->buy($shipment->lowest_rate());

      $shipment->insure(array('amount' => $this->getNumbers()->get('newTotal')));

      echo $shipment->postage_label->label_url;


      Cart::instance('default')->destroy();
      session()->forget('coupon');


      try {

        // Connect to ZOHO Inventory
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://inventory.zoho.com/api/v1/salesorders', [
          'query' => ['authtoken' => '5eea0cf51f0119d6282212f6202a7449'],
          'form_params' => [
            'line_items' => [
              "name" => "Laptop-white/15inch/dell",
              "description" => "Just a sample description.",
              "rate" => 122,
              "quantity" => 2,
              "unit" => "qty",
              "tax_id" => 4815000000044043,
              "tax_name" => "Sales Tax",
              "tax_type" => "tax",
              "tax_percentage" => 12,
              "item_total" => 244,
              "warehouse_id" => 130426000000664020,
              "hsn_or_sac" => 80540
            ],
          ]
        ]);
        echo $response->getStatusCode(); // 200
        echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'        
      } catch (\Exception $e) {

        return back()->withErrors('Error!' . $e->getMessage());
      }
      return back()->with('success_message', 'thank you order accepted ');
    } catch (\Exception $e) {
      // dd($e);
      return back()->withErrors('Error!' . $e->getMessage());
    }
  }

  private function getNumbers()
  {
    $item = Cart::content('cart');
    // dd($item);
    $newGiftPrice = 0;

    foreach ($item as $newitem) {
      // code...
      $newitem->options->giftprice ?? 0;
      $newitem->qty;

      if ($newitem->options->giftprice != 0) {
        $newGiftPrice = $newitem->options->giftprice * $newitem->qty;
      }
    }
    $total = (Cart::subtotal() + $newGiftPrice);

    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $newSubtotal = (Cart::subtotal() + $newGiftPrice  - $discount);
    $newTax = ($newSubtotal * $tax);
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
      'tax' => $tax,
      'discount' => $discount,
      'newSubtotal' => $newSubtotal,
      'newTax' => $newTax,
      'newTotal' => $newTotal,
      'newGiftPrice' => $newGiftPrice,
      'total' => $total
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

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function savesession(Request $request)
  {
    //
    Session()->put('shippingprice', $request->shippingprice);
    echo "Added Shipping Price ";
    dd(session());
  }
}
