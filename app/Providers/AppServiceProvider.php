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
          'mail.host'         => settings('mailing-settings.host'),
          'mail.port'         => settings('mailing-settings.port'),
          'mail.from.address' => settings('mailing-settings.sender-email'),
          'mail.from.name'    => settings('mailing-settings.sender-name'),
          'mail.encryption'   => settings('mailing-settings.encryption') ?: null,
          'mail.username'     => settings('mailing-settings.username'),
          'mail.password'     => settings('mailing-settings.password'),
        ]);
    }
}
