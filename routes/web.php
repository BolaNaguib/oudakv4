<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

// main page
// Route::view('/','index');



// Route::view('/shop', 'shop');

// Shopingbag
// Route::view('shopingbag','bag');

Route::redirect('/', 'oudak/en');
    // wrapping the website  e.g oudak.com/en/login
    Route::group(['prefix' => '{language}'] , function () {

      // Home Page
      Route::get('/','IndexController@index')->name('index');

      // Auth Pages
      Auth::routes(['verify' => true]);

    });





              Route::get('login/{provider}', 'Auth\SocialiteController@redirectToProvider')
                ->name('socialite.redirect');
              Route::get('login/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');

              // shop
              Route::get('/shop','ShopController@index')->name('shop.index');
              Route::get('/shop/{product}','ShopController@show')->name('shop.show');

              Route::get('/cart','CartController@index')->name('cart.index');
              Route::post('/cart','CartController@store')->name('cart.store');
              Route::patch('/cart/{product}','CartController@update')->name('cart.update');

              Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
              Route::post('/cart/switchToSaveForLater/{product}','CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');


          Route::delete('/saveForLater/{product}','saveForLaterController@destroy')->name('saveForLater.destroy');
          Route::post('/saveForLater/switchToCart/{product}','saveForLaterController@switchToCart')->name('saveForLater.switchToCart');

          Route::post('/coupon','CouponsController@store')->name('coupon.store');
          Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

          Route::view('/contact','contact')->name('contact');


          Route::group(['prefix' => 'admin'], function () {
              Voyager::routes();

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


          Route::get('empty', function(){
            Cart::instance('saveForLater')->destroy();

          });

          Route::get('/home', 'HomeController@index')->name('home');

          Route::post('newsletter/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');

          // pages
          Route::get('/{page}','PagesController@show')->name('page.show');

          Route::post('/{contactus}','ContactUsController@contactus')->name('conktactus');
