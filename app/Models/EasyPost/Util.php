<?php

namespace App;

use \EasyPost\Util;

class EasyPostExt extends Util
{
    public static function convertToEasyPostObject($response, $apiKey, $parent = null, $name = null)
    {
        $types = array(
            'Address'         => '\EasyPost\Address',
            'Batch'           => '\EasyPost\Batch',
            'CarrierAccount'  => '\EasyPost\CarrierAccount',
            'Container'       => '\EasyPost\Container',
            'CustomsInfo'     => '\EasyPost\CustomsInfo',
            'CustomsItem'     => '\EasyPost\CustomsItem',
            'Event'           => '\EasyPost\Event',
            'Fee'             => '\EasyPost\Fee',
            'Item'            => '\EasyPost\Item',
            'Order'           => '\EasyPost\Order',
            'Parcel'          => '\EasyPost\Parcel',
            'Pickup'          => '\EasyPost\Pickup',
            'PostageLabel'    => '\EasyPost\PostageLabel',
            'Rate'            => '\EasyPost\Rate',
            'Refund'          => '\EasyPost\Refund',
            'ScanForm'        => '\EasyPost\ScanForm',
            'Shipment'        => '\EasyPost\Shipment',
            'Tracker'         => '\EasyPost\Tracker',
            'User'            => '\EasyPost\User'
        );

        $prefixes = array(
            'adr'       => '\EasyPost\Address',
            'batch'     => '\EasyPost\Batch',
            'ca'        => '\EasyPost\CarrierAccount',
            'container' => '\EasyPost\Container',
            'cstinfo'   => '\EasyPost\CustomsInfo',
            'cstitem'   => '\EasyPost\CustomsItem',
            'evt'       => '\EasyPost\Event',
            'fee'       => '\EasyPost\Fee',
            'item'      => '\EasyPost\Item',
            'order'     => '\EasyPost\Order',
            'prcl'      => '\EasyPost\Parcel',
            'pickup'    => '\EasyPost\Pickup',
            'pl'        => '\EasyPost\PostageLabel',
            'rate'      => '\EasyPost\Rate',
            'rfnd'      => '\EasyPost\Refund',
            'sf'        => '\EasyPost\ScanForm',
            'shp'       => '\EasyPost\Shipment',
            'trk'       => '\EasyPost\Tracker',
            'user'      => '\EasyPost\User'
        );

        if (self::isList($response)) {
            $mapped = array();
            foreach ($response as $object => $v) {
                if (is_string($object) && isset($types[$object])) {
                    $v['object'] = $object;
                }
                array_push($mapped, self::convertToEasyPostObject($v, $apiKey, $parent, $name));
            }

            return $mapped;
        } else if (is_array($response)) {
            if (isset($response['object']) && is_string($response['object']) && isset($types[$response['object']])) {
                $class = $types[$response['object']];
            } else if (isset($response['id']) && isset($prefixes[substr($response['id'], 0, strpos($response['id'], "_"))])) {
                $class = $prefixes[substr($response['id'], 0, strpos($response['id'], "_"))];
            } else {
                $class = '\EasyPost\Object';
            }

            return \App\Models\EasyPost\Extension::constructFrom($response, $class, $apiKey, $parent, $name);
        } else {

            return $response;
        }
    }
}
