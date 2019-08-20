<?php

namespace App;

use App\ZCRM\Modules\Product as ZCRMProduct;
use App\ZCRM\Traits\MapsToZCRMModule;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use MapsToZCRMModule;

    protected $zcrmModule = ZCRMProduct::class;

    // only use it online windows doesnt support this
    // public function presentPrice()
    // {
    //   return money_format('$%i', $this->price / 100);
    // }

    public function mapToZCRMModule (ZCRMProduct $product) {
        $product->Product_Name = $this->name;
        $product->Unit_Price = $this->price;
        $product->Description = $this->main_description;
    }
}
