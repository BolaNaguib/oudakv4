<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use zcrmsdk\crm\setup\org\ZCRMOrganization;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use zcrmsdk\oauth\persistence\ZohoOAuthPersistenceInterface;
use zcrmsdk\oauth\ZohoOAuth;
use zcrmsdk\oauth\ZohoOAuthClient;

class ZohoCRMServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ZohoOAuthClient::class, function () {
            return ZohoOAuth::getClientInstance();
        });

        $this->app->singleton(ZohoOAuthPersistenceInterface::class, function () {
            return ZohoOAuth::getPersistenceHandlerInstance();
        });

        $this->app->singleton(ZCRMRestClient::class, function () {
            return ZCRMRestClient::getInstance();
        });

        $this->app->singleton(ZCRMOrganization::class, function () {
            return ZCRMRestClient::getOrganizationInstance();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        ZCRMRestClient::initialize(config('zoho'));
    }
}
