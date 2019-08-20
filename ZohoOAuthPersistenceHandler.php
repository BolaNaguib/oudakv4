<?php

use Illuminate\Support\Facades\DB;
use zcrmsdk\oauth\exception\ZohoOAuthException;
use zcrmsdk\oauth\persistence\ZohoOAuthPersistenceInterface;
use zcrmsdk\oauth\utility\OAuthLogger;
use zcrmsdk\oauth\utility\ZohoOAuthTokens;

class ZohoOAuthPersistenceHandler implements ZohoOAuthPersistenceInterface
{
    
    public function saveOAuthData($zohoOAuthTokens)
    {
        try {
            $this->deleteOAuthTokens($zohoOAuthTokens->getUserEmailId());
            
            DB::table('zohooauth')->insert([
                'useridentifier'    => $zohoOAuthTokens->getUserEmailId(),
                'accesstoken'       => $zohoOAuthTokens->getAccessToken(),
                'refreshtoken'      => $zohoOAuthTokens->getRefreshToken(),
                'expirytime'        => $zohoOAuthTokens->getExpiryTime(),
            ]);
        } catch (Exception $ex) {
            OAuthLogger::severe("Exception occured while inserting OAuthTokens into DB(file::ZohoOAuthPersistenceHandler)({$ex->getMessage()})\n{$ex}");
        }
    }
    
    public function getOAuthTokens($userEmailId)
    {
        $oAuthTokens = new ZohoOAuthTokens();

        try {
            $row = DB::table('zohooauth')->where('useridentifier', $userEmailId)->first();
            
            if (!$row) throw new ZohoOAuthException("No Tokens exist for the given user-identifier,Please generate and try again.");

            $oAuthTokens->setExpiryTime($row->expirytime);
            $oAuthTokens->setRefreshToken($row->refreshtoken);
            $oAuthTokens->setAccessToken($row->accesstoken);
            $oAuthTokens->setUserEmailId($row->useridentifier);
        } catch (Exception $ex) {
            OAuthLogger::severe("Exception occured while getting OAuthTokens from DB(file::ZohoOAuthPersistenceHandler)({$ex->getMessage()})\n{$ex}");
        }

        return $oAuthTokens;
    }
    
    public function deleteOAuthTokens($userEmailId)
    {
        try {
            DB::table('zohooauth')->where('useridentifier', $userEmailId)->delete();
        } catch (Exception $ex) {
            OAuthLogger::severe("Exception occured while Deleting OAuthTokens from DB(file::ZohoOAuthPersistenceHandler)({$ex->getMessage()})\n{$ex}");
        }
    }
}