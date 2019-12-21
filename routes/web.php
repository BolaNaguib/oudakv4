<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! hello
|
*/

use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome');
// });

// main page
// Route::view('/','index');



// Route::view('/shop', 'shop');

// Shopingbag
// Route::view('shopingbag','bag');


// Voyager Admin Panel
Route::group(['prefix' => 'rashadencontrol'], function () {

    Voyager::routes();
    // 404 Route Handler
    Route::any('{url_param}', function() {
        abort(404, '404 Error. Page not found!');
    })->where('url_param', '.*')->name('errorx');

    Route::name('voyager.')->middleware('admin.user')->group(function () {
      Route::get('export/{table}', function ($table) {

        return response()->streamDownload(function () use ($table) {

          $columns = Schema::getColumnListing($table);

          $rows = DB::table($table)->get();

          echo implode(',', $columns). PHP_EOL;

          $rows->each(function ($row) use ($columns) {
            echo implode(',', array_map(function ($column) use ($row) { return $row->$column; }, $columns)) . PHP_EOL;
          });
        }, 'export.csv');

      })->name('export');
    });
});

Route::get('login/{provider}', 'Auth\SocialiteController@redirectToProvider')
  ->name('socialite.redirect');
Route::get('login/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');

//Route::get('/', '/en');
// wrapping the website  e.g oudak.com/en/login
Route::group(['prefix' => '{language}', 'where' => ['language' => 'ar|en|sp']] , function () {

  // Route::view('/checkout' , 'checkout')->name('checkout');
  // Route::view('/account' , 'account')->name('account');
  Route::get('/account' , 'UserProfileController@account')->name('account');
  Route::get('/account/myorders' , 'UserProfileController@orders')->name('orders');

   Route::get('edituserpage/{id}',[
  'uses' => 'UserProfileController@edituserpage',
  'as' => 'edituserpage'
  ]);

   Route::get('adduser',[
  'uses' => 'UserProfileController@adduser',
  'as' => 'adduser'
  ]);

     Route::get('showuserinfo',[
  'uses' => 'UserProfileController@showuserinfo',
  'as' => 'showuserinfo'
   ]);

  Route::post('storeuserinfo',[
  'uses' => 'UserProfileController@storeuserinfo',
  'as' => 'storeuserinfo'
   ]);

  Route::post('updateuserinfo/{id}',[
  'uses' => 'UserProfileController@updateuserinfo',
  'as' => 'updateuserinfo'
   ]);

  Route::view('/archive' , 'archive')->name('archive');
  // Home Page
  Route::get('/','IndexController@index')->name('index');

  // Auth Pages
  Auth::routes(['verify' => true]);

  // shop
  Route::get('/shop','ShopController@index')->name('shop.index');
  Route::get('/shop/{product}','ShopController@show')->name('shop.show');

  Route::get('/bag','CartController@index')->name('cart.index');
  Route::post('/bag','CartController@store')->name('cart.store');
  Route::patch('/bag/{product}','CartController@update')->name('cart.update');

  Route::delete('/bag/{product}','CartController@destroy')->name('cart.destroy');
  Route::post('/bag/switchToSaveForLater/{product}','CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');


  Route::delete('/saveForLater/{product}','saveForLaterController@destroy')->name('saveForLater.destroy');
  Route::post('/saveForLater/switchToCart/{product}','saveForLaterController@switchToCart')->name('saveForLater.switchToCart');

  Route::post('/coupon','CouponsController@store')->name('coupon.store');
  Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

  Route::view('/contact','contact')->name('contact');

  // Checkout
  Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
  Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
  Route::post('/savesession', 'CheckoutController@savesession')->name('checkout.savesession');

  Route::get('/tracker', 'TrackerController@index')->name('tracker.index');
  Route::post('/tracker', 'TrackerController@store')->name('tracker.store');

  Route::get('/tracker/{tracker}', 'TrackerController@show')->name('tracker.show');
  Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
  Route::post('/wishlist', 'WishlistController@localstorageSet')->name('wishlist.cookie');


  Route::get('empty', function(){
    Cart::instance('saveForLater')->destroy();

  });
  // if its after pages we get an error
  Route::get('/search','ShopController@search')->name('search');

  Route::get('/home', 'HomeController@index')->name('home');

  Route::post('newsletter/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');

  Route::get('category/{slug}','ProductCategoryController@show')->name('productcategory.show'); // this one works
  Route::get('category/{slug}/products','ProductCategoryController@showproducts')->name('productcategory.showproducts'); // this one works

  // pages
  Route::get('/pages/{page}','PagesController@show')->name('page.show'); // this one abd blogs noi

Route::post('/acceptcookies','CookiesipController@create')->name('cookie.store');

// blogs
$namespace = '\Pvtl\VoyagerBlog\Http\Controllers';
if (class_exists('\Pvtl\VoyagerFrontend\Http\Controllers\PostController')) {
    $namespace = '\Pvtl\VoyagerFrontend\Http\Controllers';
}
Route::group([
    'prefix' => 'blog', // Must match its `slug` record in the DB > `data_types`
    'middleware' => ['web'],
    'as' => 'voyager-blog.blog.',
    'namespace' => $namespace,
], function () {
    Route::get('/blog', ['uses' => 'PostController@getPosts', 'as' => 'list']);
    Route::get('blogs/{slug}', ['uses' => 'PostController@getPost', 'as' => 'post']);
});

  Route::post('/{contactus}','ContactUsController@contactus')->name('conktactus');

  Route::get('*','index@menu')->name('index.menu'); // this one abd blogs noi

  // Route::get('showuserinfo','UserProfileController@showuserinfo')->name('showuserinfo');
// Route::get('/', 'indexController@menu')->name('mainmenu');

// 404 Route Handler
Route::any('{url_param}', function() {
    abort(404, '404 Error. Page not found!');
})->where('url_param', '.*')->name('errorx');
});

Route::get('{unlocalizedPath?}', function (Request $request, $unlocalizedPath = '') {
  $language = session('language') ?? 'en';
  return redirect()->to(url("$language/$unlocalizedPath"));
})->where('unlocalizedPath', '(.*)');
