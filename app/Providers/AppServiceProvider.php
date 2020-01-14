<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product;
use App\ProductCategory;
use App\MainMenu;
use App\cookiesip;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Auth;
use View;
use App\Page;
use App\Wishlist;
use App\guestwishlist;
use Composer\DependencyResolver\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {

        // Connect to ZOHO Inventory
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('GET', 'https://inventory.zoho.com/api/v1/items', ['query' => 
        // ['authtoken' => '5eea0cf51f0119d6282212f6202a7449']] );
        // echo $response->getStatusCode(); // 200
        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        // echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'


        $clientip = \Request::ip();
        $cookies = cookiesip::get();
        $products_menu = Product::get();
        $products_categories = ProductCategory::get();
        $main_menu = MainMenu::orderBy('Item_order','desc')->get() ;
        $page_menu = Page::get();
        $wishlists  = Wishlist::get();
        $session_id = Session::getId();
        $cookies_session = session()->get('wishlist');
        // dd(session());
        // foreach((array)$cookies_session as $item){
        //     $pxp = Product::where('id', $item)->get();
        //     dd($pxp);
        // };
        // dd($pxp);
        // dd($cookies_session);
        
        // {{ json_encode(session()->get('wishlist.id')) }}
        // dd($session_id);
        $this->applyVoyagerMailSettings();
        // dd($request->session());
        view()->share('session_id', $session_id );
        view()->share('main_menu', $main_menu );
        view()->share('products_categories', $products_categories );
        view()->share('products_menu', $products_menu );
        view()->share('page_menu', $page_menu );
        view()->share('cookies', $cookies );
        view()->share('wishlists',$wishlists);
        view()->share('cookies_session', $cookies_session);

    }

    public function applyVoyagerMailSettings() {
        config([
            'mail.driver'       => 'smtp',
            'mail.host'         => setting('mailing-settings.host'),
            'mail.port'         => setting('mailing-settings.port'),
            'mail.from.address' => setting('mailing-settings.sender-email'),
            'mail.from.name'    => setting('mailing-settings.sender-name'),
            'mail.encryption'   => setting('mailing-settings.encryption') ?: null,
            'mail.username'     => setting('mailing-settings.username'),
            'mail.password'     => setting('mailing-settings.password'),
        ]);
    }
}
