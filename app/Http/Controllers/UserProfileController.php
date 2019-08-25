<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use Auth;
use App\Order;
use App\OrderProduct;
use App\Product;
class UserProfileController extends Controller
{
  public function edituserpage($id){
    $userdata=UserProfile::find($id);
  	return view('edituser' ,compact('userdata'));
  }

  public function updateuserinfo(Request $request , $id){
    $data=UserProfile::find($id);
    $data->id=Auth::user()->id;
    $data->email=$request->email;
    $data->firstname=$request->firstname;
    $data->lastname=$request->lastname;
    $data->address=$request->address;
    $data->zipcode=$request->zipcode;
    $data->city=$request->city;
    $data->state=$request->state;
    $data->country=$request->country;
    $data->nearlocation=$request->nearlocation;
    $data->update();
    return redirect()->route('account');

  }

  public function account(){


    if (Auth::user() != null) {
       $orders = Order::all();
       $orderproducts  = OrderProduct::all();
       $products  = Product::all();
       $id=Auth::user()->id;
       $data=UserProfile::find($id);
       return view('account' , compact('data'))
             ->with('orders', $orders )
             ->with('orderproducts', $orderproducts )
             ->with('id', $id )
             ->with('products', $products );
   } else {
     // dd('u r not registered');
     return redirect('/');
   }

  }

  public function orders(){
    $orders = Order::all();
    $orderproducts  = OrderProduct::all();
    $products  = Product::all();
    $id=Auth::user()->id;
    $data=UserProfile::find($id);

    $easypost = [];
    foreach($orders as $order){
      \EasyPost\EasyPost::setApiKey(env('EASYPOST_API_KEY'));

      if($order->easypost_order_id != null){
        $easypost_order = \EasyPost\Order::retrieve($order->easypost_order_id);
        $easypost[] = $easypost_order;
      }

    }

    dd($easypost);

    return view('myorders')
          ->with('orders', $orders )
          ->with('orderproducts', $orderproducts )
          ->with('id', $id )
          ->with('products', $products );
  }

  public function adduser(){

  	return view('adduser');
  }

    public function storeuserinfo(Request $request){
      // dd($request->all());
  	$data= new UserProfile();
    $data->id=Auth::user()->id;
  	$data->email=$request->email;
  	$data->firstname=$request->firstname;
  	$data->lastname=$request->lastname;
  	$data->address=$request->address;
    $data->zipcode=$request->zipcode;
    $data->city=$request->city;
    $data->state=$request->state;
    $data->country=$request->country;
    $data->nearlocation=$request->nearlocation;
  	$data->save();
  	return redirect()->route('account');

  }


}
