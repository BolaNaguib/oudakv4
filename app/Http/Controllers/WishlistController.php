<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class WishlistController extends Controller
{
    // public function __construct() {
    //       $this->middleware(['auth']);
    //   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            //
            $user = Auth::user();
            $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);

            return view('pages.wishlist', compact('user', 'wishlists'));

        }else{
                    // $cookies_session = session()->get('wishlist');
                    // $products_menu = Product::get();

                    // view()->share('cookies_session', $cookies_session);
                    return view('pages.wishlist');

            

        }
     
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
        if (Auth::user()) {
            //
            //Validating title and body field
            $this->validate($request, array(
                'user_id' => 'required',
                'product_id' => 'required',
            ));

            $wishlist = new Wishlist;

            $wishlist->user_id = $request->user_id;
            $wishlist->product_id = $request->product_id;


            $wishlist->save();

            return redirect()->back()->with(
                'success_message',
                'Item, ' . $wishlist->product->title . ' Added to your wishlist.'
            );
        } else {

            if ($request->session()->has('wishlist')) {
                //
                $request->session()->push('wishlist', $request->product_id);

            } else{
                $request->session()->put('wishlist', [$request->product_id]);

            }


            return redirect()->back()->with(
                'success_message',
                'Item, Added to your wishlist.'
            );
        }
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
    public function destroy($product_id)
    {
        //
        if (Auth::user()) {

        $id = $product_id;
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        $wishlist->delete();
        } else {
            // dd($product_id);
        session()->pull('wishlist', $product_id);


        }
        return redirect()->back()->with('success_message', 'Item Deleted From WishList');
     
    }
}
