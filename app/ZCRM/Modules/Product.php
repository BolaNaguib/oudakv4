<?php

namespace App\ZCRM\Modules;

class Product extends Module {
    protected $casts = [
        'Vendor_Name' => Vendor::class,
    ];
}