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

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function mapToZCRMModule (ZCRMProduct $product) {
      //  question here are those fields from db ?  name ? i have it as a title not name
        $product->Product_Name = $this->title;
        $product->Unit_Price = $this->price;
        $product->Qty_in_Stock = $this->quantity;
        $product->Description = $this->main_description;
        $cat = $this->category()->first();
        if ($cat) $product->Product_Category = $cat->title;
        $product->Product_Code = $this->serial_number;
    }
}
