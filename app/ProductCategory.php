<?php

namespace App;
// use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    public function first_section_product(){
        return $this->belongsTo(Product::class,'product1','id');
    }
    public function Productone(){

    return $this->belongsTo(Product::class,'first_section_product1','id');

    }
    public function Productonex(){

    return $this->belongsTo(Product::class,'first_section_product','id');

    }

    public function Producttwo(){

    return $this->belongsTo(Product::class,'second_section_product1','id');

    }
    public function Producttwox(){

    return $this->belongsTo(Product::class,'second_section_product','id');

    }

    public function productsWithParents(){
      $productCategories = ProductCategory::where('parent',$this->id)->get();
      // $clients_ids =[];
      // foreach ($clients as $value) {
      //      array_push($clients_ids,$value->id);
      // }
      //
      // $cashs_sum = Cash::whereIn('client_id',$clients_ids)->sum('total');
      return $productCategories;

  }
}
