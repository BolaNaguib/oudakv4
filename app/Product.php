<?php

namespace App;

use App\ZCRM\Modules\Product as ZCRMProduct;
use App\ZCRM\Traits\MapsToZCRMModule;
use App\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    // use MapsToZCRMModule;

    // protected $zcrmModule = ZCRMProduct::class;

    // only use it online windows doesnt support this
    // public function presentPrice()
    // {
    //   return money_format('$%i', $this->price / 100);
    // }

    // public function mapToZCRMModule (ZCRMProduct $product) {
    //   //  question here are those fields from db ?  name ? i have it as a title not name
    //     $product->Product_Name = $this->title;
    //     $product->Unit_Price = $this->price;
    //     $product->Qty_in_Stock = $this->quantity;
    //     $product->Description = $this->main_description;
    //     $product->Product_Category = $this->belongsTo(ProductCategory::class, 'category')->value('title');
    //     $product->Product_Code = $this->serial_number;

    // }
    public function wishlist(){
     return $this->hasMany(Wishlist::class);
  }
//   public function discount(){
//     $discount = $this->discount/100; 
//     return $discount;

// }
public function discountPrice(){
  $discountPrice = $this->discount()*$this->price;
  return $discountPrice;
}
  public function wishlistexist(){

  }
}
