<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Wishlist;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {
        if(session()->has('wishlist')){
                // stuff to do after user logs in
                $sessionWishlist = session()->get('wishlist') ? session()->get('wishlist') : 'no';
                $id = Auth::id();

                foreach($sessionWishlist as $xdx){
                        $wishlist = new Wishlist;
                        $wishlist->user_id     =  $id ;
                        $wishlist->product_id  =  $xdx;            
                        $wishlist->save();

                }
                session()->forget('wishlist');
                return redirect('/')->with('success_message','item was added to your bag');
        }
       
       



    }

    
}
