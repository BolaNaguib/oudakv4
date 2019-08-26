<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product;
use App\ProductCategory;
use App\MainMenu;
use View;
use App\Page;
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
        $products_menu = Product::get();
        $products_categories = ProductCategory::get();
        $main_menu = MainMenu::orderBy('Item_order','desc')->get() ;
        $page_menu = Page::get();
        $this->applyVoyagerMailSettings();
        view()->share('main_menu', $main_menu );
        view()->share('products_categories', $products_categories );
        view()->share('products_menu', $products_menu );
        view()->share('page_menu', $page_menu );


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
