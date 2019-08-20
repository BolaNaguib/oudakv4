<?php

$defaultHandler = 'ZohoOAuthPersistenceHandler.php';

return [
    // Required
    "client_id"                 => env('ZOHO_CLIENT_ID'),
    "client_secret"             => env('ZOHO_CLIENT_SECRET'),
    "redirect_uri"              => env('ZOHO_REDIRECT_URI'),
    "currentUserEmail"          => env('ZOHO_CURRENT_USER_EMAIL'),

    // Optional
    "applicationLogFilePath"    => env('ZOHO_APPLICATION_LOG_FILE_PATH'),
    "sandbox"                   => env('ZOHO_SANDBOX', false),
    "apiBaseUrl"                => env('ZCRM_API_BASE_URL', 'www.zohoapis.com'),
    "apiVersion"                => env('ZCRM_API_VERSION', 'v2'),
    "access_type"               => env('ZCRM_ACCESS_TYPE', 'offline'),
    "accounts_url"              => env('ZCRM_ACCOUNTS_URL', 'https://accounts.zoho.com'),
    "persistence_handler_class" => env('ZOHO_PERSISTENCE_HANDLER_CLASS', $defaultHandler),
    "token_persistence_path"    => env('ZCRM_TOKEN_PERSOSTENCE_PATH'),
];