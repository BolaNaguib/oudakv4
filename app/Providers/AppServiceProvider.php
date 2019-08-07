<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // set laravel mail config from voyager settings
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
