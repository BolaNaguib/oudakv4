<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use zcrmsdk\oauth\exception\ZohoOAuthException;
use zcrmsdk\oauth\ZohoOAuthClient;

class ZohoGenerateAccessToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zoho:token {--r|refresh= : The user\'s email address in case it is a refresh token}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Persist access token for Zoho CMS';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(ZohoOAuthClient $client)
    {
        $email = $this->option('refresh');
        $token = $this->ask('Enter ' . ($email ? 'refresh' : 'grant') . ' token');

        $this->info('Please wait while token is being generated...');

        try {
            if($email) $client->generateAccessTokenFromRefreshToken($token, $email);
            else $client->generateAccessToken($token);
            $this->info('Token is successfully generated');
        } catch (ZohoOAuthException $e) {
            $this->error('Unable to generate token. Please double check your input and try again');
        } catch(Exception $e) {
            $this->error('Unable to generate token due to this error: ' . $e->getMessage());
        }
        
    }
}
