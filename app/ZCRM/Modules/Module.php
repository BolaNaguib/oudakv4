<?php

namespace App\ZCRM\Modules;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use zcrmsdk\crm\api\response\CommonAPIResponse;
use zcrmsdk\crm\crud\ZCRMModule;
use zcrmsdk\crm\crud\ZCRMRecord;

class Module {

    protected $casts = [];

    /**
     * @var ZCRMRecord
     */
    protected $record;

    public function __construct(ZCRMRecord $record = null)
    {
        $record = $record ?: ZCRMRecord::getInstance(static::guessApiName(), null);
        $this->record = $record;
    }

    public static function all($page = 1, $perPage = 200) {
        $endIndex = $page * $perPage;
        $startIndex = $endIndex - $perPage + 1;
        $response = static::module()->getRecords(null, null, null, $startIndex, $endIndex);
        return new Paginator(static::from( $response ), $perPage, $page);
    }

    public static function first() {
        return static::from( static::module()->getRecords(null, null, null, 1, 1) )[0];
    }

    public static function find($entityId) {
        return static::from( static::module()->getRecord($entityId) );
    }

    public static function search($searchWord, $page = 1, $perPage = 200) {
        return static::from(
            static::module()->searchRecords($searchWord, $page, $perPage)
        );
    }

    public static function searchByPhone($phone, $page = 1, $perPage = 200) {
        return static::from(
            static::module()->searchRecordsByPhone($phone, $page, $perPage)
        );
    }

    public static function searchByEmail($email, $page = 1, $perPage = 200) {
        return static::from(
            static::module()->searchRecordsByEmail($email, $page, $perPage)
        );
    }

    public static function searchByCriteria($criteria, $page = 1, $perPage = 200) {
        return static::from(
            static::module()->searchRecordsByCriteria($criteria, $page, $perPage)
        );
    }

    public static function from($record) {
        if ($record instanceof CommonAPIResponse)
            return static::from($record->getData());

        if (is_array($record)) return array_map(function ($record) {
            return static::from($record);
        }, $record);

        return new static($record);
    }

    protected static function module()
    {
        return ZCRMModule::getInstance( static::guessApiName() );
    }

    public static function guessApiName() {
        $classname = static::class;
        if ( defined("$classname::API_NAME") ) return static::API_NAME;
        $pos = strrpos($classname, '\\');
        return Str::plural( $pos === false ? $classname : substr($classname, $pos + 1) );
    }

    public function save() {
        $save = $this->record->getEntityId() ? 'updateRecords' : 'createRecords';
        $response = static::module()->$save([$this->record]);
        $arr = $response->getData();
        if (!isset($arr[0])) {
          $eR = $response->getEntityResponses()[0];
          error_log('Zoho CRM API Error: ' . $eR->getMessage());
          return false;
        }
        $this->record = $arr[0];
        return true;
    }

    public function delete() {
        static::module()->deleteRecords([$this->record->getEntityId()]);
        return true;
    }

    public function __get($key) {
        $value = $this->record->getFieldValue($key);
        if (key_exists($key, $this->casts)) return $this->casts[$key]::from($value);
        return $value;
    }

    public function __set($key, $value) {
        return $this->record->setFieldValue($key, $value);
    }

    public function __call($function, $param_arr) {
        return call_user_func_array([$this->record, $function], $param_arr);
    }
}
