<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product;
use App\ProductCategory;
use App\MainMenu;
use View;
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
    public function boot()
    {
        $this->applyVoyagerMailSettings();
        // $main_menu = MainMenu::orderBy('id', 'desc')->get();
        // $productcategoryx = ProductCategory::get();
        // dd($productcategoryx);
        // $lol = Product::orderBy('id', 'desc')->take(3)->get();
        // dd($lol);
        // View::composer('layout.header',function($view){
        //   $view->with('auth','TESTING');
        //   // ->with('productcategory', $productcategory)
        //   $view->with('products', $lol);
        //   // $view->with('main_menu', $main_menu);
        // });
    }

    public function applyVoyagerMailSettings() {
        config([
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
